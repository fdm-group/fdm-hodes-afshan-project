<?php
namespace Hodes\FDM;

class Map extends VCComponent {

	public function __construct() {
	
		parent::__construct();
		
		if ( function_exists( 'acf_add_options_page' ) ) {

			acf_add_options_page( [
				'page_title' => 'FDM Map Markers',
				'capability' => 'manage_options',
				'post_id' => 'fdm_map_markers'
			] );
		
		}
		
		// Setup ACF fields
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			require_once( dirname( __DIR__ ) . '/acf/fdm-map.php' );
		}
	
	}

	public function base() {
		return 'fdm_map';
	}

	public function vc_params() {

		return [
			'name' => 'FDM Map',
			'description' => 'Add a map to the page',
			'category' => 'FDM',
			'params' => [
				[
				]
			]
		];

	}
	
	public function render_shortcode( $atts, $content ) {
	
		$locations = function_exists( 'get_field' ) ? get_field( 'map_locations', 'fdm_map_markers' ) : [];
		
		ob_start();
		?>
		<div class="fdm-map-component">	
				
			<div class="fdm-map-legend">
				<label><input type="checkbox" checked data-layer="centre" /> <?= __( 'Centres', 'fdm' ) ?></label>
				<label><input type="checkbox" checked data-layer="academy" /> <?= __( 'Academies', 'fdm' ) ?></label>
				<label><input type="checkbox" data-layer="placement" /> <?= __( 'Placements', 'fdm' ) ?></label>
			</div>
			
			<div class="fdm-map"></div>
			
			<?php foreach( $locations as $loc ) { ?>

				<div class="fdm-map-location" data-marker-src="<?= asset_url( 'img/'.$loc['type'].'-marker.png' ) ?>" data-layer="<?= $loc['type'] ?>" data-latitude="<?= $loc['latitude'] ?>" data-longitude="<?= $loc['longitude'] ?>">
					<span name="city"><?= $loc['city'] ?></span>
					<?php if ( $loc['type'] != 'placement' ) { ?>
						<span name="description">
							<?php if ($loc['address']) { ?><?= $loc['address'] ?><?php } ?>
							<?php if ($loc['phone_number']) { ?><br /><?= $loc['phone_number'] ?><?php } ?>
							<?php /* they don't want to show email address at the moment
							<?php if ($loc['email_address']) { ?><br /><a href="mailto:<?= $loc['email_address'] ?>"><?= $loc['email_address'] ?></a><?php } */ ?>
						</span>
					<?php } ?>
				</div>
			
			<?php } ?>

		</div>
		<?php
		return ob_get_clean();		
		
	}

}