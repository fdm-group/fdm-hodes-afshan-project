<?php

namespace Hodes\FDM;

include( __DIR__ . '/include/tracking.php' );

if ( ! defined( 'STAGING' ) ) {
	wp_die( "Required constant is not set. Please edit the wordpress config wp-config.php and define the constant STAGING, true for staging sites, false for the live environment" );
}


// Register autoload function for finding classes in Hodes\FDM namespace
spl_autoload_register( function( $class ) {
	$parts = explode( '\\', $class );
	$vendor = array_shift( $parts );
	$project = array_shift( $parts );
	if ( 'Hodes' === $vendor && 'FDM' === $project && count( $parts ) > 0 ) {
		require_once __DIR__ . '/src/' . implode( '/', $parts ) . '.php';
	}
} );

// Function for locating assets within Hodes\FDM namespace
function asset_url( $path ) {
	return get_stylesheet_directory_uri() . '/' . $path;
}

// Add our language files (must come first)
add_action( 'after_setup_theme', function() {
    load_theme_textdomain( 'fdm', get_stylesheet_directory() . '/lang' );
}, 1 );

// Return a generic error message regardless of login failure (prevents username/email ennumeration)
add_filter( 'login_errors', function() {
	return 'Login Error';
});

// During password reset process, show same response for incorrect login as correct (prevents username/email ennumeration)
add_action( 'lost_password', function() {

	global $errors;

	$error_codes_to_mask = [
		'invalid_email',
		'invalidcombo',
		'invalid_username',
	];
	foreach( $error_codes_to_mask as $code ) {
		if ( $errors->get_error_messages( $code ) ) {
			// user entered incorrect login or email - send them the same response as for a correct one - redirect to check email message
			wp_safe_redirect( 'wp-login.php?checkemail=confirm' );
			exit;
		}
	}

});

add_filter( 'cn_cookie_notice_args', function($args) {

	// Override the cookie message with our own translated version
	$args['message_text'] = __( 'We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.', 'fdm' );
	$args['accept_text'] = __( 'Ok', 'fdm' );

	return $args;

} );

// Implement ip whitelist for login/admin pages
include( 'include/ip-whitelist.php' );

add_action( 'after_setup_theme', function() {

	// Create our extra VC Components
	$map = new Map();
	$our_people = new OurPeople();
	$board = new BoardOfDirectors();
	$mini_share_price = new MiniSharePrice();
	$reports = new Reports();
	$bloglisting = new BlogListing();
	$application_form = new ApplicationForm();
	$investors_header = new InvestorsHeader();

} );

// Very simple password protection on staging sites to keep the general public / search engine bots
if ( STAGING ) {
	add_action('init', function(){
		$auth_user = trim( strtolower( $_SERVER['PHP_AUTH_USER'] ?? '' ) );
		$auth_pw = trim( strtolower( $_SERVER['PHP_AUTH_PW'] ?? '' ) );
		if ( $auth_user != 'fdm' || $auth_pw != 'hodes123' ) {
		    header('WWW-Authenticate: Basic realm="FDM Staging"');
		    header('HTTP/1.0 401 Unauthorized');
		    echo 'Username and password required';
		    exit;
		}
	});
}




add_action( 'init', function() {
	// Implement our redirects
	include( 'include/redirects.php' );

	// Add image sizes, these will also then be made available to select in the CMS.
	add_image_size( 'blog-listing', 740, 370, true );
	add_image_size( 'people-thumb', 375, 375, true );
	add_image_size( 'people-profile', 500, 500, true );
	add_image_size( 'home-service-thumb', 570, 602, true );
	add_image_size( 'alt-service-thumb', 570, 380, true );
	add_image_size( 'heading-banner', 1800, 1200, false );
	add_image_size( 'investors-stat', 520, 520, false );
} );


add_filter( 'image_size_names_choose', function( $sizes ) {
    return array_merge( $sizes, array(
        'people-thumb' => __( 'FDM Person thumb' ),
		  'investors-stat' => __( 'Investors Stat Slide' )
    ) );
});

//use non minified version of core Zephyr script, with some modifications.
add_action( 'wp_enqueue_scripts', function() {
	global $us_template_directory_uri;
	wp_deregister_script('us_core');
	wp_register_script( 'us-core', $us_template_directory_uri . '/framework/js/us.core.js', array( 'jquery' ), US_THEMEVERSION, TRUE );
	wp_enqueue_script( 'us-core' );
} );

// Add our custom js, and the investis responsive frame script
add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_script( 'jquery-cookie', asset_url( 'js/jquery.cookie.js' ) , [ 'jquery' ]);
	wp_enqueue_script( 'hodes-fdm', asset_url( 'js/hodes-fdm.js' ) , [ 'jquery' ], 5.7);
	wp_enqueue_script( 'investis-iframe-manager', asset_url( 'js/frame-manager.js' ) , [ 'jquery' ] );

} );

// Stop mobile being resizable (so you can use touch for other functionality)
add_filter( 'us_meta_viewport', function( $meta ) {
	return 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no';
} );

// define footer menu
add_action( 'after_setup_theme', function() {
	register_nav_menu( 'footer', 'Footer Menu' );
} );

// Add our stylesheet
add_action( 'wp_head', function() {

	$css_path = get_stylesheet_directory() . '/css/style.css';
	$less_path = get_stylesheet_directory() . '/css/style.less';
	$timestamp = filemtime( $css_path ) ?: 0;

	if ( $timestamp < filemtime( $less_path ) ) {

		error_log( "Custom CSS file is out of date - recompiling from less file $less_path to $css_path" );

		// load and set up the compiler
		require_once( __DIR__ . '/include/lessc.php' );
		$lesscompiler = new \lessc();

		$lesscompiler->setImportDir( __DIR__ . '/css' );

		// use compressed output
		$lesscompiler->setFormatter( "compressed" );

		// compose the input string
		$input = file_get_contents( $less_path );

		// compile and save
		if ( file_put_contents( $css_path, $lesscompiler->compile( $input ) ) ) {
			$timestamp = filemtime( $css_path );
		} else {
			error_log( "Failed writing custom CSS file to $css_path - check this file is writable by webserver - css may be out of date" );
		};

	}

	?>
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() . '/css/style.css?t=' . $timestamp ?>" />
	<?php

}, 999 );


// Set javascript variable to allow the FDM logo to be set to a link to the correct language homepage
add_action( 'wp_head', function() {
	?>
	<script>
		<?php if ( function_exists( 'pll_home_url' ) ) { ?>
			window.fdmTranslatedHomeLink = <?= json_encode( pll_home_url() ) ?>;
		<?php } ?>
		<?php if ( function_exists( 'pll_current_language' ) ) { ?>
			window.fdmCurrentLang = <?= json_encode( pll_current_language() ) ?>;
		<?php } ?>
	</script>
	<?php
} );


add_action( 'wp_head', function() {
	if ( function_exists( 'pll_current_language' ) ) {
	
		if($_COOKIE['acceptcookies']==1  || (pll_current_language()!='de' && !isset($_COOKIE['acceptcookies']))){

			echo "<script type=\"text/javascript\" id=\"hs-script-loader\" async src=\"//js.hs-scripts.com/4411419.js\"></script>";		
	 	} 
	}
});



// Insert addthis sharing buttons on single post pages
add_filter( 'wp', function() {
	if ( is_singular( ['post'] ) ) {

		// insert the share buttons after the post metadata
		add_filter( 'us_single_post_meta_html', function( $meta_html ) {
			$meta_html[] = '&nbsp;&nbsp;&nbsp; <div class="addthis_sharing_toolbox"></div>';
			return $meta_html;
		} );

		// insert the addthis script at the bottom of the page
		add_filter( 'wp_footer', function() {
			?>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e96df33654aff"></script>
			<?php
		} );

	}
} );

// Insert our custom header
add_action( 'us_before_page', function() {

	$prefix = 'fdm_hdr_';
	$len = strlen( $prefix );
	$args = [];
	foreach( (array) get_fields() as $name => $value ) {
		if ( substr( $name, 0, $len ) == $prefix ) {
			$args[ substr( $name, $len ) ] = $value;
		}
	}
	if ( ! empty( $args ) && $args['use_header_banner'] ) {
		extract( $args );
		unset( $args );
		include( __DIR__ . '/template/heading-banner.php' );
	}

} );


// By default, polylang uses wordpress' native search functionality to find posts for the translations dropdown
// But wordpress' native search functionality is rubbish.  Override so that we only return posts whose title matches the search term.
// This will be much more helpful for this site
add_filter( 'pll_ajax_posts_not_translated_args', function( $args ) {

	// remove search term
	$search = $args['s'];
	unset( $args['s'] );

	// find post ids for posts with matching titles, and add their ids to the query instead
	global $wpdb;
	$sql = $wpdb->prepare( "SELECT ID FROM {$wpdb->posts} WHERE post_title LIKE %s", '%' . $search . '%' );
	$args['post__in'] = $wpdb->get_col( $sql );

	return $args;

} );



add_shortcode( 'fdm-location-selector', function() {

	$langs = pll_the_languages( [ 'raw' => true ] );
	$current_lang = array_filter( $langs, function( $lang ) { return $lang['current_lang']; } );
	$current_lang = array_pop( $current_lang );
	ob_start();
	?>
	<div id="fdm-location-selector">
		<div class="fdm-location-selector-toggle"><a href="#"><img src="<?= $current_lang['flag'] ?>" /></a></div>
		<ul class="fdm-location-selector-list" style="display:none;">
			<?php foreach( $langs as $lang ) { ?>
				<li><a href="<?= $lang['url'] ?>" class="<?= $lang['current_lang'] ? 'current' : '' ?>"><img src="<?= $lang['flag'] ?>" /> <?= $lang['name'] ?></a></li>
			<?php } ?>
		</ul>
	</div>
	<script>jQuery(function($){
		$('#fdm-location-selector').each(function(){
			var $toggle = $('.fdm-location-selector-toggle', this);
			var $list = $('.fdm-location-selector-list', this);
			var showList = function() {
				$list.slideDown();
				$(document.body).on('click', hideList);
			};
			var hideList = function() {
				$list.slideUp();
				$(document.body).off('click', hideList);
			};
			$toggle.on('click', function(){
				if ( $list.is(':visible') ) {
					hideList();
				} else {
					showList();
				}
				return false;
			});
		})
	});</script>
	<?php
	return ob_get_clean();
} );


// Get the menu id for the given theme menu location, in the current language
// Return int menu id or false on failure
function hodes_get_translated_menu_id( $location ) {

	// Polylang will filter this to give us the lagnuage-specific version of the menu
	$theme_locations = get_nav_menu_locations();
	return $theme_locations[ $location ] ?? false;

}

function get_mobile_detect() {
	static $detect;
	if ( ! $detect ) {
		require_once( 'include/Mobile_Detect.php' );
		$detect = new \Mobile_Detect();
	}
	return $detect;
}


// We need to resolve a conflict here between Ubermenu and Polylang
// Both of them try to 'take over' the menus, so we create a new shortcode which will merge the functionality of both
add_shortcode( 'fdm-main-nav', function() {

	ob_start();

	// Attempt to get a translated menu
	// NOTE: the 'us' in 'us_main_menu' doesn't refer to the United States or anything to do with languages
	// Actually it seems like the Zephyr theme uses 'us' as a prefix for all of their variables, methods etc
	// 'us_main_menu' is the name registered in Zephyr for the primary nav menu
	$menu_id = hodes_get_translated_menu_id( 'us_main_menu' );

	if ( $menu_id ) {
		// If we successfully got a translated menu id, we'll feed it to Ubermenu for the rendering
		ubermenu( 'main', [ 'menu_id' => 'fdm-main-nav', 'menu' => $menu_id ] );
	} else {
		// Otherwise use default
		ubermenu( 'main', [ 'menu_id' => 'fdm-main-nav', 'theme_location' => 'us_main_menu' ] );
	}

	return ob_get_clean();

} );

add_shortcode( 'fdm-footer-nav', function() {

	ob_start();
	wp_nav_menu( ['theme_location'=>'footer'] );
	return ob_get_clean();

} );


// Function to output a standard button with the blue transition
function fdm_output_button( $link, $label, $invert = false ) { ?>
	<a href="<?= htmlspecialchars( $link ) ?>" class="fdm-cta <?= $invert ? 'fdm-cta-invert' : '' ?> mpc-button mpc-transition mpc-inited" style="opacity: 1;">
		<div class="mpc-button__content mpc-effect-type--stay mpc-effect-side--right">
			<span class="mpc-button__title mpc-transition"><?= $label ?></span>
			<i class="mpc-button__icon mpc-transition  fa fa-angle-right"></i>
		</div>
		<div class="mpc-button__background mpc-transition mpc-effect-type--slide mpc-effect-side--left"></div>
	</a>
	<?php
}

// Shortcode to output a standard 'CTA' button
add_shortcode( 'fdm-cta', function( $atts, $content ) {

	ob_start();
	$invert = isset( $atts['invert'] ) ? (bool) $atts['invert'] : false;
	// wordpress will automatically htmlencode the href attribute value, fdm_output_button() does that too, so de-encode here to stop double-encoding
	$href = html_entity_decode( $atts['href'] );
	fdm_output_button( $href, $content, $invert );
	return ob_get_clean();

} );


function get_translated_permalink( $post_id, $lang = null ) {
	return get_permalink( get_translated_post_id( $post_id, $lang ) );
}

function get_translated_post_id( $post_id, $lang = null ) {
	// Get the translated post (as long as Polylang is installed)
	$translated_post_id = false;
	if ( function_exists('pll_get_post') && function_exists('pll_current_language') ) {
		// if $lang is not set, assume current language
		$translated_post_id = pll_get_post( $post_id, $lang ? : pll_current_language() );
	}
	// Return the translated post id
	// Fall back to theuntranslated post if the post isn't translated
	return $translated_post_id ? $translated_post_id : $post_id;
}

// The design specifies a button in the left of the footer underneath the company logo which points to a language-specific page
// There is no way of achieving this in VC, so we use a shortcode to provide a VC Button with a translated link (defaulting to English UK)
// @param	$args	array	Arguments passed to shortcode. If 'post-id' defined, this should be the ID OF THE UK POST/PAGE.
add_shortcode( 'fdm-translated-button', function( $args ) {

	// Get the translated post id (default to current post)
	$translated_post_id = get_translated_post_id( $args['post_id'] ?? get_the_ID() );

	// Calculate link and label
	$link = get_permalink( $translated_post_id ) . ( isset( $args['hash'] ) ? '#' . $args['hash'] : '' );
	$label = isset($args['link_text']) ? $args['link_text'] : get_the_title( $translated_post_id );
	$invert = isset( $args['invert'] ) ? (bool) $args['invert'] : false;

	// Generate the button
	ob_start();
	fdm_output_button( $link, $label, $invert );
	return ob_get_clean();

});

if( function_exists('acf_add_local_field_group') ) {

	acf_add_local_field_group(array (
		'key' => 'group_5a0c6a0d833a4',
		'title' => 'Meta Tags',
		'fields' => array (
			array (
				'key' => 'field_5a0c6a18ed495',
				'label' => 'Meta Title',
				'name' => 'fdm_meta_title',
				'type' => 'text',
				'value' => NULL,
				'instructions' => 'Contents of HTML title tag to be used. Aim to keep titles under 70 characters. For best practice see: http://moz.com/learn/seo/title-tag',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a0c6aaced496',
				'label' => 'Meta Description',
				'name' => 'fdm_meta_desc',
				'type' => 'textarea',
				'value' => NULL,
				'instructions' => 'Meta description to be used on event archive pages. Aim for approximately 155 characters. For best practice see: http://moz.com/learn/seo/meta-description.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'us_testimonial',
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'us_portfolio',
				),
			),
		),
		'menu_order' => 30,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

	function output_meta_tags() {
		$meta_title = ($post_title = get_the_title()) ? $post_title : get_bloginfo();
		$meta_description = '';

		if( is_singular() ) {
			$post_id = get_the_ID();
			$meta_title = ($custom_title = get_field( 'fdm_meta_title', $post_id )) ? $custom_title : $meta_title;

			$meta_description = get_field( 'fdm_meta_desc', $post_id );
			if( empty($meta_description) ) {
				$this_post = get_post( $post_id );
				$meta_description = wp_trim_words( strip_shortcodes( $this_post->post_content ), 20 );
			}
		}

		echo "<title>$meta_title</title>";
		echo '<meta name="description" content="'.$meta_description.'">';
	}

	add_action( 'wp_head', function() {
		output_meta_tags();
	}, 5 );

	// Add Options page for custom post type archive meta tags
	// Commented out as not required at this time, but added for future extensibility
	//acf_add_options_page( ['page_title' => 'Archive Meta Tags', 'menu_slug' => 'archive_meta_tags'] );

}

// Filter to get Zephyr to display our custom Author info in their blog page template
add_filter( 'us_single_post_meta_html', function( $meta_html, $post_id ) {
	$author = get_field( 'author', $post_id );
	if ( empty( $author ) ) {
		unset( $meta_html['author'] );
	} else {
		$meta_html['author'] = '<span class="w-blog-post-meta-author vcard author">'.htmlspecialchars($author).'</span>';
	}
	return $meta_html;
}, 10, 2 );

//include('include/dh-content-find-replace.php');
