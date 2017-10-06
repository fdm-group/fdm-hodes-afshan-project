<?php
namespace Hodes\FDM;

class Reports extends VCComponent {

	public function __construct() {

		parent::__construct();

		if ( function_exists( 'acf_add_options_page' ) ) {

			$parent = acf_add_options_page( [
				'page_title' => 'FDM Reports',
				'capability' => 'manage_options',
				'menu_slug' => 'acf-options-fdm-reports',
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
		return 'fdm_reports';
	}

	public function vc_params() {

		return [
			'name' => 'FDM Reports',
			'description' => "Custom 'Reports' section for FDM site",
			'category' => 'FDM',
			'params' => [
				[
				]
			]
		];

	}

	public function render_shortcode( $atts, $content ) {

		$reports = get_field( 'reports', 'options' );
		usort( $reports, function( $a, $b ) {
			return
				( ( $b['year'] - $a['year'] ) * 2 ) // year scores 2 'points'
				+ min( 1, max( -1, strnatcmp( $a['title'], $b['title'] ) ) ); // alphabetical order of title scores 1 'point'
		} );

		$years = array_unique( array_map( function( $report ) { return (int) $report['year']; }, $reports ) );
		sort( $years );

		$categories = array_unique( array_map( function( $report ) { return $report['category']; }, $reports ) );
		sort( $categories );

		ob_start();
		?>

		<div class="fdm-reports-component">
			<form class="fdm-report-filters">
				<select name="year">
					<option value=""><?= __( 'All years', 'fdm' ) ?></option>
					<?php foreach( $years as $year ) { ?>
						<option value="<?= $year ?>"><?= $year ?></option>
					<?php } ?>
				</select>
				<?php foreach( $categories as $category ) { ?>
					<label><input type="checkbox" name="category" value="<?= $category ?>" /><?= $category ?></label>
				<?php } ?>
			</form>

			<div class="fdm-report-list">
				<?php foreach( $reports as $report ) { ?>
					<div class="fdm-report-link" data-year="<?= $report['year'] ?>" data-category="<?= $report['category'] ?>" >
						<span name="year"><?= $report['year'] ?></span>
						<a name="download" href="<?= $report['file']['url'] ?>">
							<?= __( 'Download report', 'fdm' ) ?>
							<i class="material-icons">vertical_align_bottom</i><?php /* https://material.io/icons/#ic_vertical_align_bottom */ ?>
						</a>
						<span name="title"><?= $report['title'] ?></span>
					</div>
				<?php } ?>
			</div>
		</div>
		<?php

		return ob_get_clean();

	}

}
