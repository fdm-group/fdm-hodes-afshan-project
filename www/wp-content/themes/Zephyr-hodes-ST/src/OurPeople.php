<?php
namespace Hodes\FDM;

class OurPeople extends VCComponent {

	protected $countries;
	protected $pathways;
	protected $roles;

	public function __construct() {

		parent::__construct();

		$this->countries = [
			[ 'acf_post' => 'fdm_people', 'name' => 'United Kingdom', 'lang_code' => 'en', 't_name' => __( 'United Kingdom', 'fdm' ) ],
			[ 'acf_post' => 'fdm_people_can', 'name' => 'Canada', 'lang_code' => 'en-ca', 't_name' => __( 'Canada', 'fdm' ) ],
			[ 'acf_post' => 'fdm_people_us', 'name' => 'United States of America', 'lang_code' => 'en-us', 't_name' => __( 'United States of America', 'fdm' ) ],
			[ 'acf_post' => 'fdm_people_germany', 'name' => 'Germany', 'lang_code' => 'de', 't_name' => __( 'Germany', 'fdm' ) ],
			[ 'acf_post' => 'fdm_people_china', 'name' => 'China', 'lang_code' => 'cn', 't_name' => __( 'China', 'fdm' ) ],
			[ 'acf_post' => 'fdm_people_singapore', 'name' => 'Singapore', 'lang_code' => 'en-sg', 't_name' => __( 'Singapore', 'fdm' ) ],
			[ 'acf_post' => 'fdm_people_hk', 'name' => 'Hong Kong', 'lang_code' => 'en-hk', 't_name' => __( 'Hong Kong', 'fdm' ) ],

		];
		
		$this->pathways = [
			'Ex-Forces' => __( 'Ex-Forces', 'fdm' ),
			'Internal staff' => __( 'Internal staff', 'fdm' ),
			'Graduates' => __( 'Graduates', 'fdm' ),
			'Getting Back to Business' => __( 'Getting Back to Business', 'fdm' ),
		];		
		
		$this->roles = [
			'Consultant' => __( 'Consultant', 'fdm' ),
			'Sales & Business Development' => __( 'Sales & Business Development', 'fdm' ),
			'Recruitment' => __( 'Recruitment', 'fdm' ),
			'Marketing' => __( 'Marketing', 'fdm' ),
			'HR & Consultant Support' => __( 'HR & Consultant Support', 'fdm' ),
			'Academy & Training' => __( 'Academy & Training', 'fdm' ),
			'Diversity, Inclusion & Initiatives' => __( 'Diversity, Inclusion & Initiatives', 'fdm' ),
			'Finance' => __( 'Finance', 'fdm' ),
			'Operations' => __( 'Operations', 'fdm' ),
		];

		if ( function_exists( 'acf_add_options_page' ) ) {

			$parent = acf_add_options_page( [
				'page_title' => 'FDM People',
				'capability' => 'manage_options',
				'menu_slug' => 'acf-options-people',
			] );

			foreach($this->countries as $country){
				acf_add_options_sub_page( [
					'page_title' => 'People - ' . $country['name'],
					'capability' => 'manage_options',
					'post_id' => $country['acf_post'],
					'menu_slug' => 'acf-options-fdm-people-' . $country['lang_code'],
					'parent_slug' => 'acf-options-people',
				]);
			}

		}

		// Setup ACF fields
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			require_once( dirname( __DIR__ ) . '/acf/fdm-people.php' );
		}

		// Cache the people data when updated, to avoid hundreds of database queries
		// Note priority of 20 means the function will run *after* the data are updated
		add_action( 'acf/save_post', function( $post_id ) {
			if ( strpos( $post_id, 'fdm_people' ) === 0 ) {
				$this->update_people_data_cache();
			}
		}, 20);

	}

	// Collect the information for the people and serialize in a single value in the database options table
	public function update_people_data_cache() {
		error_log("Updating FDM people data cache");

		$people = [];
		if ( function_exists( 'get_field' ) ) {
			foreach( $this->countries as $country ) {
	
				$country_people = get_field( 'fdm_people', $country['acf_post'] ) ?: [];
				foreach( $country_people as $person ){
					$person['country'] = $country['name'];
					$person['lang_code'] = $country['lang_code'];
					$person['slug'] = sanitize_title_with_dashes( $person['name'] ) . ( $country['lang_code']=='cn' ? '-cn' : '' ); // some people are duplicated in Chinese, so add suffix to make slugs unique
					$people[] = $person;
				}
			}
		}
		
		delete_option( 'fdm_people_cache' );
		add_option( 'fdm_people_cache', json_encode( $people ) , '', 'no' );
		return $people;
	}
	
	// Get the people data from the database (caching if not already cached)
	public function get_people_data() {
		$json = get_option( 'fdm_people_cache', false );
		if ( $json ) {
			return json_decode( $json, true );
		} else {
			return $this->update_people_data_cache();
		}
	}

	public function base() {
		return 'fdm_our_people';
	}

	public function vc_params() {

		return [
			'name' => 'FDM Our People',
			'description' => "Custom 'Our People' section for FDM site",
			'category' => 'FDM',
			'params' => [
				[
				]
			]
		];

	}

	public function render_shortcode( $atts, $content ) {

		$countries = array_filter( $this->countries, function( $country ) {
			/* Hide China for now - some debate about how it's going to work for them */
			return $country['lang_code'];
		} );
		
		$people = array_filter( $this->get_people_data(), function( $person ) {
			/* Hide China for now - some debate about how it's going to work for them */
			return $person['lang_code'] != 'cn';
		} ); ;

		// Sort the people so that the current country is first, and alphabetical by name after that
		if ( function_exists('pll_current_language') ) {
			$current_lang_code = pll_current_language();
		} else {
			$current_lang_code = false;
		}
		usort( $people, function( $a, $b ) use ( $current_lang_code ) {
			return
				( $b['lang_code'] == $current_lang_code ? 2 : 0 ) - ( $a['lang_code'] == $current_lang_code ? 2 : 0 ) // current country scores 2 'points'
				+ min( 1, max( -1, strnatcmp( $a['name'], $b['name'] ) ) ); // alphabetical order scores 1 'point'
		} );
		// Sort the filter dropdowns alphabetically
		usort( $countries, function( $a, $b ) { return strnatcmp( $a['name'], $b['name'] ); } );
		asort( $this->roles );
		asort( $this->pathways );


		ob_start();
		?>

		<div class="fdm-our-people-component">

			<div class="fdm-people-filters">
				<select name="country">
					<option value="all"><?= __( 'All Locations', 'fdm' ) ?></option>
					<?php foreach( $countries as $country ) { ?>
						<option value="<?= $country['name'] ?>"><?= $country['t_name'] ?></option>
					<?php } ?>
				</select><select name="role">
					<option value="all"><?= __( 'All Roles', 'fdm' ) ?></option>
					<?php foreach( $this->roles as $role => $t_role ) { ?>
						<option value="<?= $role ?>"><?= $t_role ?></option>
					<?php } ?>
				</select><select name="pathway">
					<option value="all"><?= __( 'All Pathways', 'fdm' ) ?></option>
					<?php foreach( $this->pathways as $pathway => $t_pathway ) { ?>
						<option value="<?= $pathway ?>"><?= $t_pathway ?></option>
					<?php } ?>
				</select>
			</div>

			<div class="fdm-people-grid">

				<?php foreach( $people as $i => $person ) { ?>

					<div class="fdm-grid-block">
						<?php
						/* note lists of roles and pathways use '|' as the delimiter, and also start and end with '|'.
						 * eg  |apples|oranges|pears|
						 * this makes it easy to test a particular value in javascript like this indexOf('|'+role+'|');
						 * using spaces as a delimiter doesn't work very well because for example the string 'Consultant' can also be found in 'HR & Consultant Support'
						 * so you get incorrect matches
						 */
						?>
						<div class="fdm-person-teaser" data-person="<?= $person['slug'] ?>" data-pathway="|<?= implode('|',$person['pathway']) ?>|"  data-country="<?= $person['country'] ?>" data-role="|<?= implode('|',$person['role']) ?>|" >
							<div name="image"><img src="<?= $person['image']['sizes']['people-profile'] ?>" alt="" /></div>
							<div name="info">
								<span name="name"><?= $person['name'] ?></span>
								<span name="job-title"><?= $person['job_title'] ?></span>
								<span name="department"><?= $person['department'] ?></span>
								<span name="city"><?= __( 'Location', 'fdm' ) ?>: <?= $person['city'] ?></span>
							</div>
						</div>
					</div>

				<?php } ?>

			</div>

			<div class="fdm-people-overlay" style="display:none;" >


				<?php foreach( $people as $i => $person ) { ?>

					<div class="fdm-person-profile" data-person="<?= $person['slug'] ?>" style="display:none;" >
						<button class="fdm-overlay-close" title="close"><?= __( 'Close', 'fdm' ) ?></button>
						<span name="department"><?= $person['department'] ?></span>
						<div class="inner">
							<img src="<?= $person['image']['sizes']['people-profile']; ?>" alt="<?= $person['name']; ?>" />
							<h3 name="name"><?= $person['name'] ?></h3>
							<span name="job-title"><?= $person['job_title'] ?></span>
							<span name="city"><?= __( 'Location', 'fdm' ) ?>: <?= $person['city'] ?></span>
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
