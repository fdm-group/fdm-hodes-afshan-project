<?php
namespace Hodes\FDM;

class BoardOfDirectors extends VCComponent {

	public function __construct() {

		parent::__construct();

		if ( function_exists( 'acf_add_options_page' ) ) {

			acf_add_options_page( [
				'page_title' => 'FDM Board',
				'capability' => 'manage_options',
				'post_id' => 'fdm_board'
			] );

		}

		/*
		// Setup ACF fields
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			require_once( dirname( __DIR__ ) . '/acf/fdm-people.php' );
		}
		*/

	}

	public function base() {
		return 'fdm_board';
	}

	public function vc_params() {

		return [
			'name' => 'FDM Board',
			'description' => "Custom 'Board of Directors' section for FDM site",
			'category' => 'FDM',
			'params' => [
				[
				]
			]
		];

	}

	public function render_shortcode( $atts, $content ) {

		$people = function_exists( 'get_field' ) ? get_field( 'fdm_board', 'fdm_board' ) : [];

		foreach( $people as &$person ) {
			$person['slug'] = sanitize_title_with_dashes( $person['name'] );
		}
		unset( $person );

		ob_start();
		?>

		<div class="fdm-board-of-directors-component">

			<div class="fdm-people-grid">

				<?php foreach( $people as $i => $person ) { ?>

					<div class="fdm-grid-block">
						<div class="fdm-person-teaser" data-person="<?= $person['slug'] ?>"  >
							<div name="image"><img src="<?= $person['image']['url'] ?>" alt="" /></div>
							<div name="info">
								<span name="name"><?= $person['name'] ?></span>
								<span name="position"><?= $person['position'] ?></span>
							</div>
						</div>
					</div>

				<?php } ?>

			</div>

			<div class="fdm-people-overlay" style="display:none;" >

				<button class="fdm-overlay-close" title="close">X</button>

				<?php foreach( $people as $i => $person ) { ?>

					<div class="fdm-person-profile" data-person="<?= $person['slug'] ?>" style="display:none;" >
						<button class="fdm-overlay-close" title="close"><?= __( 'Close', 'fdm' ) ?></button>
						<div class="inner">
							<img src="<?= $person['image']['url'] ?>" alt="<?= $person['name'] ?>" />
							<h3 name="name"><?= $person['name'] ?></h3>
							<span name="job-title"><?= $person['position'] ?></span>
							<div name="bio"><?= $person['bio'] ?></div>
						</div>
					</div>

				<?php } ?>

			</div>

		</div>
		<?php
		return ob_get_clean();

	}

}
