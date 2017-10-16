<?php
namespace Hodes\FDM;

class MiniSharePrice extends VCComponent {

	public function base() {
		return 'fdm_mini_share_price';
	}

	public function vc_params() {

		return [
			'name' => 'FDM Mini Share price',
			'description' => 'Small share price ticker',
			'category' => 'FDM',
			'params' => [
				[
				]
			]
		];

	}
	
	public function render_shortcode( $atts, $content ) {
			
		ob_start();
		?>
		<iframe class="mini-share-price" width="100%" height="230px" src="https://irs.tools.investis.com/Clients/uk/fdmgroup/Minichart/Default.aspx?culture=en-GB"></iframe>
		<?php
		return ob_get_clean();
		
	}

}