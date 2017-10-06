<?php
namespace Hodes\FDM;

abstract class VCComponent {

	public function __construct() {

		if ( function_exists( 'vc_map' ) ) {
			$params = $this->vc_params();
			$params['base'] = $this->base();
			vc_map( $params );
		}
	
		add_shortcode( $this->base(), [ $this, 'render_shortcode' ] );
	
	}
	
	abstract public function base();
	abstract public function vc_params();
	abstract public function render_shortcode( $atts, $content );

}
