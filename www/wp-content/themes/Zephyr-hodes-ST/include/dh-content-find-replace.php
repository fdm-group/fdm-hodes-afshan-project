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