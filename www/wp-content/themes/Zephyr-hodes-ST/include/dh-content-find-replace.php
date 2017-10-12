<?php if ($_SERVER['REMOTE_ADDR'] == '62.30.196.60' && $_SERVER['REQUEST_URI'] == '/dh' ) { add_action( 'init', function() {
	
	$query = new WP_Query( [
		'post_type' => 'any',
		'post_status' => [ 'publish', 'pending', 'draft', 'future', 'private' ],
		'posts_per_page' => -1,
	] );
	
	function post_find( $post, $search ) {
			
		$search_r = preg_quote( $search );
	
		preg_match_all( '#(.{0,100})(' . $search_r . ')(.{0,100})#i', $post->post_content, $all_matches, PREG_SET_ORDER );
		foreach( $all_matches as $matches ) {
			echo '<p>' . htmlspecialchars( $matches[1] ) . '<strong>' . htmlspecialchars( $matches[2] ) . '</strong>' . htmlspecialchars( $matches[3] ) . '</p>';
		}
		
	}
	
	function carousel_remove_style( $post, $save ) {
	
		/* css_ad_caraousel=".vc_custom_1505291695498{padding-right: 20px !important;padding-left: 20px !important;}" */
		
		$content = preg_replace_callback( '/(.{0,100})css_ad_caraousel="(.*?)"(.{0,100})/', function( $matches ) {
		
			echo '<p>' . htmlspecialchars( $matches[1] ) . '<strong>css_ad_caraousel="' . htmlspecialchars( $matches[2] ) . '"</strong>' . htmlspecialchars( $matches[3] ) . '</p>';
			
			$replace = $matches[1].$matches[3];
			echo '<p>' . htmlspecialchars( $replace ) . '</p>';
			
			return $replace;
		
		}, $post->post_content, -1, $count );

		if ( $save && $count > 0 ) {
			$result = wp_update_post( [ 'ID' => $post->ID, 'post_content' => $content ], true );
			if ( is_wp_error( $result ) ) {
				echo '<p style="color:red">Error: updating ' . $post->ID . ': ' . htmlspecialchars( implode( ', ', $result->get_error_messages() ) ) . '</p>';
			} else {
				echo '<p style="color:green">Updated ' . $post->ID . '</p>';
			}
		}
	
	}
	
	function carousel_slides_on_tab( $post, $save ) {
	
		/* This is what we want, if there's 3 on desktop, there should be 2 on tabs and 1 on mobile
		[ultimate_carousel ... slides_on_desk="3" slides_on_tabs="2" slides_on_mob="1" ... ] */
	
		$updates = 0;
	
		$content = preg_replace_callback('/\[ultimate_carousel (.*?)\]/', function ( $matches ) use ( &$updates ) {
		
			$orig = $matches[0];
			$atts = $matches[1];
			if ( preg_match('/slides_on_desk="(\d+)"/', $atts, $matches ) ) {
				$desk = (int) $matches[1];	
				if ($desk == 3) {
					$atts = preg_replace('/slides_on_tabs="(\d+)"/', 'slides_on_tabs="2"', $atts, -1, $count);
					if ( $count == 0 ) {
						$atts .= ' slides_on_tabs="2" ';
					}
					$atts = preg_replace('/slides_on_mob="(\d+)"/', 'slides_on_mob="1"', $atts, -1, $count);
					if ( $count == 0 ) {
						$atts .= ' slides_on_mob="1" ';
					}				
				}		
			}
			
			$replace = "[ultimate_carousel {$atts}]";
			
			if ( $orig != $replace ) {
				echo "<p>".htmlspecialchars($orig).' --- '.htmlspecialchars($replace).'</p>';
				$updates++;
			}
			
			return $replace;	
		
		}, $post->post_content, -1 );
		
		if ( $save && $updates > 0 ) {
			$result = wp_update_post( [ 'ID' => $post->ID, 'post_content' => $content ], true );
			if ( is_wp_error( $result ) ) {
				echo '<p style="color:red">Error: updating ' . $post->ID . ': ' . htmlspecialchars( implode( ', ', $result->get_error_messages() ) ) . '</p>';
			} else {
				echo '<p style="color:green">Updated ' . $post->ID . '</p>';
			}
		}
	
	}
	
	function buttons_remove_titles( $post, $save ) {

		/*
		[mpc_button preset="default" url="url:%2Fde%2Fde-culture%2Fde-diversity-inclusion%2F|title:Diversity||" font_preset="default" title="VIELFALT UND INTEGRATION" icon="fa fa-angle-right" icon_color="#ffffff" icon_size="14" icon_effect="stay-right" background_color="#0a0a09" border_divider="true" border_css="border-top:0px;border-radius:3px;" padding_divider="true" padding_css="padding-top:20px;padding-right:15px;padding-bottom:20px;padding-left:15px;" margin_divider="true" hover_font_color="#ffffff" hover_icon_color="#ffffff" hover_background_color="#1daded" hover_background_effect="slide-left" hover_border_divider="true" hover_border_css="border-radius:3px;"]
		*/
		
		$total = 0;
		$content = preg_replace_callback( '/\[mpc_button (.*?)\]/', function( $matches ) use ( &$total ) {

			$atts = $matches[1];
			
			$atts = preg_replace_callback( '/url="(.*?)"/', function( $matches ) use ( &$total ) {
			
				$url = $matches[1];
				$url = preg_replace( '/\|title:(.*?)\|/', '||', $url, -1, $count );
				$total += $count;

				if ( $count ) {
					echo "<p>{$matches[1]} --- {$url}</p>";
				}
				
				return 'url="' . $url . '"';
			
			}, $atts );
			
			$new_button = '[mpc_button ' . $atts . ']';
			
			if ( $total ) {
				echo "<p>Old {$matches[0]}</p>";
				echo "<p>New {$new_button}</p>";
			}
			
			return $new_button;		
		
		}, $post->post_content );

		if ( $save && $total > 0 ) {
			$result = wp_update_post( [ 'ID' => $post->ID, 'post_content' => $content ], true );
			if ( is_wp_error( $result ) ) {
				echo '<p style="color:red">Error: updating ' . $post->ID . ': ' . htmlspecialchars( implode( ', ', $result->get_error_messages() ) ) . '</p>';
			} else {
				echo '<p style="color:green">Updated ' . $post->ID . '</p>';
			}
		}
	
	}
	
	function faq_remove_h3( $post, $save ) {
	
		// We don't want h3s round the titles, we should style using the stylesheet [vc_tta_section title="<h3>Getting Back to Business Programme</h3>"]
		
		$updates = 0;
	
		$content = preg_replace_callback('/\[vc_tta_section (.*?)\]/s', function ( $matches ) use ( &$updates ) {
		
			$orig = $matches[0];
			$atts = $matches[1];
			//echo "<p>{$orig}</p>";
			
			$atts = preg_replace( '#title="\s*<h3>(.*?)</h3>\s*"#s', 'title="$1"', $atts );
			$replace = "[vc_tta_section {$atts}]";
			
			if ( $replace != $orig ) {
				$updates++;
				echo "<p>".htmlspecialchars($orig).' --- '.htmlspecialchars($replace).'</p>';
			}
			
			return $replace;
		
		}, $post->post_content );
		
		if ( $save && $updates > 0 ) {
			$result = wp_update_post( [ 'ID' => $post->ID, 'post_content' => $content ], true );
			if ( is_wp_error( $result ) ) {
				echo '<p style="color:red">Error: updating ' . $post->ID . ': ' . htmlspecialchars( implode( ', ', $result->get_error_messages() ) ) . '</p>';
			} else {
				echo '<p style="color:green">Updated ' . $post->ID . '</p>';
			}
		}
	
	}

	
	function post_replace( $post, $search, $replace, $save = false ) {
		
		$search_r = preg_quote( $search );
	
		$content = preg_replace_callback( '#(.{0,100})(' . $search_r . ')(.{0,100})#i', function( $matches ) use ( $replace ) {
			$outer_replace = $matches[1] . $replace . $matches[3];
			echo '<p>' . htmlspecialchars( $matches[1] ) . '<strong>' . htmlspecialchars( $matches[2] ) . '</strong>' . htmlspecialchars( $matches[3] ) . htmlspecialchars( ' --> ' . $outer_replace ) . '</p>';
			return $outer_replace;
		}, $post->post_content, -1, $count );	
	
		if ( $save && $count > 0 ) {
			$result = wp_update_post( [ 'ID' => $post->ID, 'post_content' => $content ], true );
			if ( is_wp_error( $result ) ) {
				echo '<p style="color:red">Error: updating ' . $post->ID . ': ' . htmlspecialchars( implode( ', ', $result->get_error_messages() ) ) . '</p>';
			} else {
				echo '<p style="color:green">Updated ' . $post->ID . '</p>';
			}
		}
	
	}
	
	function update_german_urls( $post, $save ) {
	
		// IMPORTANT - make sure the child pages come before the parent pages!
		$updates = [
			'/de/de-culture/de-diversity-inclusion/' => '/de/unternehmenskultur/vielfalt-und-integration/',
			'/de/de-culture/de-women-in-it/' => '/de/unternehmenskultur/gleichberechtigung/',
			'/de/de-services/de-business-services/' => '/de/dienstleistungen/business/',
			'/de/de-services/de-technical-services/' => '/de/dienstleistungen/technik/',
			'/de/de-services/de-tailored-services/' => '/de/dienstleistungen/individuelle-programme/',
			'/de/de-services/de-case-studies/' => '/de/dienstleistungen/beispiele/',
			'/de/de-careers/de-internships-placements/' => '/de/karriere/praktika-werkstudenten/',
			'/de/de-careers/de-graduates/' => '/de/karriere/traineeprogramm/',
			'/de/de-careers/apprentices/' => '/de/karriere/ausbildung/',
			'/de/de-culture/' => '/de/unternehmenskultur/',
			'/de/de-our-people/' => '/de/unsere-mitarbeiter/',
			'/de/de-social-hub/' => '/de/social-media/',
			'/de/de-our-work/' => '/de/das-fdm-modell/',
			'/de/de-clients/' => '/de/kunden/',
			'/de/de-universities/' => '/de/universitaeten/',
			'/de/de-awards/' => '/de/auszeichnungen/',
			'/de/de-services/' => '/de/dienstleistungen/',
			'/de/de-careers/' => '/de/karriere/',
			'/de/de-investors/' => '/de/investoren/',
			'/de/de-contact/' => '/de/kontakt/',
			'/de/de-accessibility/' => '/de/zugaenglichkeit/',
			'/de/de-press/' => '/de/presse/',
		];
		
		$content = $post->post_content;
		$total = 0;
		
		foreach( $updates as $old => $new ) {
		
			$old = trim( $old, '/' );
			$new = trim( $new, '/' );
			
			while( strpos( $content, $old ) !== false ) {
				$content = preg_replace_callback( '#(.{0,100})(' . preg_quote($old) . ')(.{0,100})#i', function( $matches ) use ( $new, &$total ) {
					$outer_replace = $matches[1] . $new . $matches[3];
					echo '<p>' . htmlspecialchars( $matches[1] ) . '<strong>' . htmlspecialchars( $matches[2] ) . '</strong>' . htmlspecialchars( $matches[3] ) . htmlspecialchars( ' --> ' . $outer_replace ) . '</p>';
					$total++;
					return $outer_replace;
				}, $content, 1 );
			}
			
			// same for links which are encoded
			
			$old = str_replace('/', '%2F', $old);
			$new = str_replace('/', '%2F', $new);

			while( strpos( $content, $old ) !== false ) {
				$content = preg_replace_callback( '#(.{0,100})(' . preg_quote($old) . ')(.{0,100})#i', function( $matches ) use ( $new, &$total ) {
					$outer_replace = $matches[1] . $new . $matches[3];
					echo '<p>' . htmlspecialchars( $matches[1] ) . '<strong>' . htmlspecialchars( $matches[2] ) . '</strong>' . htmlspecialchars( $matches[3] ) . htmlspecialchars( ' --> ' . $outer_replace ) . '</p>';
					$total++;
					return $outer_replace;
				}, $content, 1 );
			}
		
		}

		if ( $save && $total > 0 ) {
			$result = wp_update_post( [ 'ID' => $post->ID, 'post_content' => $content ], true );
			if ( is_wp_error( $result ) ) {
				echo '<p style="color:red">Error: updating ' . $post->ID . ': ' . htmlspecialchars( implode( ', ', $result->get_error_messages() ) ) . '</p>';
			} else {
				echo '<p style="color:green">Updated ' . $post->ID . '</p>';
			}
		}
		
		$cta_change_count = 0;
		$ctas = (array) get_field('fdm_hdr_call_to_actions', $post->ID);
		foreach( $ctas as &$cta ) {
			$new = @ $updates[$cta['link']];
			if ( $new ) {
				echo "<p>{$cta['link']} --- {$new}</p>";
				$cta['link'] = $new;
				$cta_change_count++;
			}
		}
		if ( $cta_change_count > 0  ) {
			print_r( $ctas );
		}
		if ( $save && $cta_change_count > 0 ) {
			update_field( 'field_59db35e477729', $ctas, $post->ID );
			echo '<p style="color:green">Updated ACF for ' . $post->ID . '</p>';
		}
	
	}
	
	echo '<h1>Findings</h1>';
	
	while( $query->have_posts() ) {
	
		$query->the_post();
		$post = $query->post;
		
		ob_start();
		
		//post_find( $post, 'hodes' );
		
		//post_find( $post, 'findly' );
		//post_replace( $post, 'https%3A%2F%2Fcdn-static.findly.com%2Fwp-content%2Fuploads%2Fsites%2F404%2F', '%2Fwp-content%2Fuploads%2F', false );
		//post_replace( $query->post, 'https://cdn-static.findly.com/wp-content/uploads/sites/404/', '/wp-content/uploads/', false );
		
		//post_replace( $post, '/wp-content/uploads/2017/08/large-diverse-business-grou.mp4', '/wp-content/uploads/2017/10/home-header-10sec.mp4', false );
		
		//buttons_remove_titles( $post, false );
		//carousel_remove_style( $post, false );
		//carousel_slides_on_tab( $post, false );
		//faq_remove_h3( $post, false );
		//update_german_urls( $post, false );
		
		$findings = ob_get_clean();
		
		if ( ! empty( $findings ) ) {
			echo "<h3>{$post->post_title}</h3>";
			$link = get_permalink( $post->ID );
			echo "<p><a href='{$link}'>{$link}</a></p>";
			echo $findings;
		}
	
	}
	
	
	exit;

} ); }