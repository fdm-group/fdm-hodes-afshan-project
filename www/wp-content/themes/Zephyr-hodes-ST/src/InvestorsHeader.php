<?php
namespace Hodes\FDM;

class InvestorsHeader extends VCComponent {

	public function __construct() {
	
		parent::__construct();
		
		// check that functions from ACF and Polylang are available
		// if either plugin isn't installed the functions will be missing, so we need to exit early to avoid crashing the site
		$plugin_functions = [ 'acf_add_options_page', 'acf_add_options_sub_page', 'pll_languages_list', 'pll_languages_list' ];
		foreach( $plugin_functions as $fn ) {
			if ( ! function_exists( $fn ) ) {
				return;
			}
		}		
		
		// get array of all languages in form slug => name
		$langs = array_combine( pll_languages_list( ['fields'=>'slug'] ),  pll_languages_list( ['fields'=>'name'] ) );
					
		$parent = acf_add_options_page( [
			'page_title' => 'FDM Investors Header',
			'capability' => 'manage_options',
			'menu_slug' => 'acf-fdm-investors-header',
		] );
		
		foreach ($langs as $slug => $name ) {
			acf_add_options_sub_page( [
				'page_title' => 'Investors Header - ' . $name,
				'capability' => 'manage_options',
				'post_id' => 'fdm-investors-header-' . $slug,
				'menu_slug' => 'acf-fdm-investors-header-' . $slug,
				'parent_slug' => 'acf-fdm-investors-header',
			]);
		}
	
	}



	public function base() {
		return 'fdm_investors_header';
	}

	public function vc_params() {

		return [
			'name' => 'FDM Investors Header',
			'description' => 'Header for Investors pages',
			'category' => 'FDM',
			'params' => [
				[
					'type' => 'checkbox',
					'class' => '',
					'heading' => 'Share price widget',
					'param_name' => 'share_price_widget',
					'description' => 'Show the share price widget on the right?',
					'value' => ['Yes' => 'true'],
				]
			]
		];

	}
	
	public function sidebar_button( $link, $label ) {
		
		ob_start();
		?>
		[mpc_button preset="default" url="url:<?= urlencode( $link ) ?>|title:<?= urlencode( $label ) ?>||" font_color="#333333" title="<?= $label ?>" icon="fa fa-angle-right" icon_color="#333333" icon_size="14" icon_effect="stay-right" background_color="#ffffff" border_divider="true" border_css="border-top:0px;border-radius:3px;" padding_divider="true" padding_css="padding-top:20px;padding-right:15px;padding-bottom:20px;padding-left:15px;" margin_divider="true" hover_font_color="#ffffff" hover_icon_color="#ffffff" hover_background_color="#1daded" hover_background_effect="slide-left" hover_border_divider="true" hover_border_css="border-radius:3px;" class="buttonMenu"]
		<?php
		return ob_get_clean();
	
	}
	
	public function sidebar_spacer() {
		return '[us_separator type="invisible" size="small"]';
	}
	
	public function render_shortcode( $atts, $content ) {

		if ( ! function_exists( 'pll_current_language' ) || ! function_exists( 'get_field' ) ) {
			return '';
		}
		
		$options_page_id = 'fdm-investors-header-' . pll_current_language();
		$sidebar_items = get_field( 'sidebar_items', $options_page_id );
		$share_price_widget = ( isset($atts['share_price_widget']) && $atts['share_price_widget'] == 'true' ? get_field( 'share_price_widget', $options_page_id ) : false );
		$annual_report = get_field( 'annual_report', $options_page_id );

				
		$sidebar_html = array_map( function( $item ) {
			return $this->sidebar_button( $item['link'], $item['label'] );
		}, $sidebar_items );
		$sidebar_html = implode( $this->sidebar_spacer(), $sidebar_html );
		
		ob_start();
		?>
		<div class="fdm-investors-header-component">
			<div class="fdm-investors-header-sidebar">
				<?= $sidebar_html ?>
			</div>
			<div class="fdm-investors-header-info">
				<?php if ( $share_price_widget ) { ?>
					<h3><?= $share_price_widget['heading'] ?></h3>
					[fdm_mini_share_price]
					[fdm-cta href="<?= $share_price_widget['button_link'] ?>"]<?= $share_price_widget['button_label'] ?>[/fdm-cta]
					[us_separator type="invisible"]
				<?php } ?>
					<h3><?= $annual_report['heading'] ?></h3>
					[fdm-cta href="<?= $annual_report['report_file']['url'] ?>"]<?= $annual_report['button_label'] ?>[/fdm-cta]
			</div>
		</div>
		<?php
		
		return do_shortcode( ob_get_clean() );
		
	}


}
	
	