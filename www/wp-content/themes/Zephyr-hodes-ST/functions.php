<?php

namespace Hodes\FDM;

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

add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_script( 'hodes-fdm', asset_url( 'js/hodes-fdm.js' ) , [ 'jquery' ] );
	wp_enqueue_script( 'investis-iframe-manager', asset_url( 'js/frame-manager.js' ) , [ 'jquery' ] );

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
	
	if ( true ) {
	//if ( $timestamp < filemtime( $less_path ) ) {
	
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

// Add Analytics
add_action( 'wp_head', function() {
	?>
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-236343-7"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments)};
		gtag('js', new Date());		
		gtag('config', 'UA-236343-7');
	</script>
	<?php
} );

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


// Add Tribe Event Namespace

function events_rss2_namespace() {
    echo 'xmlns:ev="http://purl.org/rss/2.0/modules/event/"'."\n";
}
 
// Add Event Dates to RSS Feed
add_action('rss_item','tribe_rss_feed_add_eventdate');
add_action('rss2_item','tribe_rss_feed_add_eventdate');
add_action('commentsrss2_item','tribe_rss_feed_add_eventdate');
 
function tribe_rss_feed_add_eventdate() {
  if ( ! tribe_is_event() ) return;
  ?>
  <ev:tribe_event_meta xmlns:ev="Event">
  <?php if (tribe_get_start_date() !== tribe_get_end_date() ) { ?>
 
    <ev:startdate><?php echo tribe_get_start_date($post, false, 'M-d-Y h:i:s ') ; ?></ev:startdate>
    <ev:enddate><?php echo tribe_get_end_date($post, false, 'M-d-Y h:i:s '); ?></ev:enddate>
 
  <?php } else { ?>
 
    <ev:startdate><?php echo tribe_get_start_date($post, false, 'M-d-Y h:i:s ') ; ?></ev:startdate>
 
  <?php } ?>
  </ev:tribe_event_meta>
 
<?php }

add_action( 'wp_enqueue_scripts', 'register_smiles', 14 );
function register_smiles() {
	wp_dequeue_script( 'bsf-Defaults' );
	wp_enqueue_style( 'bsf-Defaults', str_replace( array(
			'http:',
			''
		), '', content_url() ) . '/uploads/smile_fonts/Defaults/Defaults.css' );
}

add_shortcode('cws_breadcrumb', 'cws_add_zephyr_breadcrumbs');
function cws_add_zephyr_breadcrumbs(){
	// Shortcodes expect to return a string, their function prints it
	$output = '';
	ob_start();
	us_breadcrumbs();
	$output .= ob_get_clean();

	return $output;
}






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

// The design specifies a button in the left of the footer underneath the company logo which points to a language-specific page
// There is no way of achieving this in VC, so we use a shortcode to provide a VC Button with a translated link (defaulting to English UK)
// @param	$args	array	Arguments passed to shortcode. If 'post-id' defined, this should be the ID OF THE UK POST/PAGE.
add_shortcode( 'fdm-translated-button', function( $args ) {

	// Get the post id to translate (default to current post)	
	$post_id = isset( $args['post_id'] ) ? $args['post_id'] : get_the_ID();
	
	// Get the translated post (as long as Polylang is installed)
	$translated_post_id = function_exists('pll_get_post') ? pll_get_post( $post_id ) : false;
	
	// Calculate link and label
	$link = get_permalink( $translated_post_id ? : $post_id ) . ( isset( $args['hash'] ) ? '#' . $args['hash'] : '' );
	$label = isset($args['link_text']) ? $args['link_text'] : get_the_title( $translated_post_id );
	$invert = isset( $args['invert'] ) ? (bool) $args['invert'] : false;

	// Generate the button
	ob_start();
	fdm_output_button( $link, $label, $invert );
	return ob_get_clean();

});


//include('include/dh-content-find-replace.php');
