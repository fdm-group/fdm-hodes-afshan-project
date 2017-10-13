<?php
namespace Hodes\FDM;

class BlogListing extends VCComponent {

	public function __construct() {

		parent::__construct();

		// Catch ajax request
		add_action( 'init', function() {

			// Request path, normalised by removing query string and removing leading and trailing slashes
			$request_path = trim( strtok( $_SERVER['REQUEST_URI'], '?' ), '/' );
			if ( $request_path == 'fdm-ajax-get-blog-listing' ) {
				$this->ajax_get_blog_listing();
			}

		} );

	}

	public $has_more;

	public static function regions() {
		return [
			'North America',
			'Europe',
			'APAC',
		];
	}

	public function base() {
		return 'fdm_blog_listing';
	}

	public function vc_params() {

		return [
			'name' => 'FDM Blog listing',
			'description' => 'Display a listing of blog posts, with filters',
			'category' => 'FDM',
			'params' => [
				[
					'type' => 'checkbox',
					'class' => '',
					'heading' => 'Load more on scroll',
					'param_name' => 'load_on_scroll',
					'description' => 'Automatically load more blogs when the user scrolls down (only do this if the blog is the last thing on the page',
					'value' => ['Yes' => 'true'],
				]
			]
		];

	}

	public function get_query( $page = 1, $region = null, $category = null ) {

		$posts_per_page = 3;

		$args = [
			'post_type' => 'post',
			'posts_per_page' => $posts_per_page,
			'paged' => (int) $page,
			'lang' => '',
		];

		if ( in_array( $region, self::regions(), true ) ) {
			$args['meta_key'] = 'fdm_region';
			$args['meta_value'] = $region;
		}

		if ( $category ) {
			$args['category_name'] = $category;
		}

		$query = new \WP_Query( $args );

		// keep track of whether there is more posts available for this query
		$this->has_more = ( $query->found_posts > ( ( $page - 1 ) * $posts_per_page + $query->post_count ) );

		// error_log( "page {$page} got {$query->post_count} posts, total {$query->found_posts}" );

		return $query;

	}

	public function render_shortcode( $atts, $content ) {

		$query = $this->get_query();
		$load_on_scroll = ( isset($atts['load_on_scroll']) && $atts['load_on_scroll'] == 'true' );

		ob_start();
		
		// The categories should all be defined for the UK, so start with that list
		// If a translation is defined in the CMS, use that as the label
		$categories = [];
		foreach( get_categories( [ 'lang' => 'en' ] ) as $category ) {
			if ( $category->slug == 'uncategorized' ) {
				continue; // don't show uncategorized
			}
			
			$translated_category_id = pll_get_term( $category->term_id );
			$translated_category = $translated_category_id ? get_term( $translated_category_id ) : false;
			$categories[ $category->slug ] = $translated_category ? $translated_category->name : $category->name;
		}
		
		?>
		<div class="fdm-post-listing-component" data-ajax-url="/fdm-ajax-get-blog-listing/" <?= $load_on_scroll ? 'data-load-on-scroll' : '' ?> >

			<div class="fdm-post-listing-filters">
				<select name="region">
					<option value="" selected><?= __( 'All Regions', 'fdm' ) ?></option>
					<option value="North America"><?= __( 'North America', 'fdm' ) ?></option>
					<option value="Europe"><?= __( 'Europe', 'fdm' ) ?></option>
					<option value="APAC"><?= __( 'APAC', 'fdm' ) ?></option>
				</select>
				<select name="category">
					<option value="" selected><?= __( 'All Categories', 'fdm' ) ?></option>
					<?php foreach( $categories as $category_slug => $category_name ) { ?>
						<option value="<?= $category_slug ?>"><?= $category_name ?></option>
					<?php } ?>
				</select>
			</div>

			<div class="fdm-post-listing-tiles">
				<?php while ( $query->have_posts() ) { ?>
					<?php $query->the_post(); ?>
					<?php $this->render_post(); ?>
				<?php } ?>
			</div>

			<div class="fdm-post-listing-no-posts" style="<?= $query->found_posts == 0 ? '' : 'display:none' ?>" >
				<p><?= __( 'Sorry, there are no currently no posts matching your criteria.', 'fdm' ) ?></p>
			</div>

			<div class="fdm-post-listing-load-more" style="<?= $this->has_more ? '' : 'display:none' ?>" >
				<a href="#"><?= __( 'Load More', 'fdm' ) ?></a><br />
				<i class="material-icons"><?= __( 'keyboard_arrow_down', 'fdm' ) ?></i>
			</div>

		</div>
		<?php
		wp_reset_postdata();
		return ob_get_clean();

	}

	public function render_post() {

		?>
		<div class="fdm-post-teaser">
			<a class="fdm-post-teaser-inner" href="<?= get_permalink() ?>">
				<div class="teaser-text">
					<?php $categories = get_the_category(); $first_category = array_shift( $categories ); if ( $first_category ) { ?>
						<span name="category"><?= $first_category->name ?></span>
					<?php } ?>
					<h3 name="post-title"><?= get_the_title() ?></h3>
					<span name="author"><i class="material-icons">person</i> <?= get_field('author') ?></span>
					<time name="updated" datetime="<?= get_the_date( 'Y-m-d H:i:s' ) ?>"><i class="material-icons">access_time</i> <?= get_the_date() ?></time>
				</div>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
				<div class="teaser-image" style="background-image:url(<?= $image[0] ?>);"></div>
			</a>
		</div>
		<?php
	}

	public function ajax_get_blog_listing() {

		header('Content-Type: application/json');

		$query = $this->get_query( (int) $_GET['page'] , stripslashes( @ $_GET['region'] ), stripslashes( @ $_GET['category'] ) );
		$response = [];

		if ( $query->have_posts() ) {

			$response['got_posts'] = true;
			$response['has_more'] = $this->has_more;
			ob_start();
			while ( $query->have_posts() ) {
				$query->the_post();
				$this->render_post();
			}
			$response['html'] = ob_get_clean();

		} else {

			$response['got_posts'] = false;
			$response['has_more'] = false;

		}

		echo json_encode( $response );
		exit;

	}

}
