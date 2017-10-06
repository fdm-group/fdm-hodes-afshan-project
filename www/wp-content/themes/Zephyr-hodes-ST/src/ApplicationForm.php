<?php
namespace Hodes\FDM;

class ApplicationForm extends VCComponent {

	public function base() {
		return 'fdm_application_form';
	}

	public function vc_params() {

		return [
			'name' => 'FDM Application Form',
			'description' => 'Add the FDM application form',
			'category' => 'FDM',
			'params' => [
				[
				]
			]
		];

	}
	
	public function render_shortcode( $atts, $content ) {

		$region_map = [
			'en' => 'UK',
			'de' => 'DE',
			'en-ca' => 'Canada',
			'en-hk' => 'HK',
			'en-sg' => 'Singapore',
			'en-us' => 'USA',
			'cn' => 'China',
		];
		$lang_code = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
		$default_region = isset( $region_map[ $lang_code ] ) ? $region_map[ $lang_code ] : 'UK';
		
		ob_start();
		include( dirname(__DIR__) . '/template/application-form.php' );
		return ob_get_clean();
		
	}

}