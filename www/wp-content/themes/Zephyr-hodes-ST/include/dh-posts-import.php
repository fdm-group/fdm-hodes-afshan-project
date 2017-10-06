<?php

namespace Hodes\FDM;

if ($_SERVER['REMOTE_ADDR'] == '62.30.196.60' && $_SERVER['REQUEST_URI'] == '/dh-posts-import' ) { add_action( 'init', function() {

require_once( ABSPATH . "wp-load.php" );
require_once( ABSPATH . "wp-admin/includes/image.php" );
require_once( ABSPATH . "wp-admin/includes/file.php" );
require_once( ABSPATH . "wp-admin/includes/media.php" );


function map_category( $category_name ) {

	switch( $category_name ) {
		case 'Tech Industry':
			return 112;
		case 'Career Advice':
			return 6;
		case 'Life at FDM':
			return 5;
		case 'Women in Tech':
			return 12;
		case 'Returner to Work':
			return 118;
		case 'Ex-Forces/Veterans':
			return 120;
	}
	if ( ! empty( $category_name ) ) {
		throw new \Exception("Unexpected category {$category_name}");
	}
	return null;

}

function check_region( $region ) {
	if ( $region == 'FDM' ) { $region = 'Global'; }
	if ( ! in_array( $region, [ 'Global', 'North America', 'Europe', 'APAC' ] ) ) {
		throw new \Exception( "Unexpected region {$region}" );
	}
	return $region;
}

function filter_content( $content ) {

	//if ( preg_match( '/(.{0,100})<img(.{0,100})/i', $content, $matches ) ) {
	//	print_r( $matches );
	//}
	return $content;

}


function upload_image_to_media_library( $url ) {

	if ( ! preg_match( '/[^\?]+\.(jpg|jpe|jpeg|gif|png)/i', $url, $matches ) ) {
		throw new \Exception( "Unexpected url {$url}" );
	}
	$filename = basename( $matches[0] );

	$tmp = download_url( $url );
	if ( is_wp_error( $tmp ) ) {
		throw new \Exception( "Failed to download file from {$url}" );
	}	
	
	$file_array = [
		'name' => $filename,
		'tmp_name' => $tmp,
	];

	// do the validation and storage stuff
	$id = media_handle_sideload( $file_array, 0 );
	
	// If error storing permanently, unlink
	if ( is_wp_error( $id ) ) {
		@unlink( $tmp );
		print_r( $id );
		return false;		
	}

	@unlink( $tmp );
	return $id;
}



function scrape_image( $url ) {

	static $scraped = [];
	
	if ( ! isset( $scraped[ $url ] ) ) {
		$scraped[ $url ] = upload_image_to_media_library( $url );
	}
	return $scraped[ $url ];

}


function create_post_from_csv_data( $data ) {

	if ( ! preg_match( '#^www\.fdmgroup\.com/([-\w\d]+)/$#', $data[0], $matches ) ) {
		throw new \Exception( "Unexpected URL {$data[0]}" );
	}
	$slug = $matches[1];

	$post_data = [
		'post_name' => $slug,
		'post_title' => $data[1],
		'post_category' => array_filter( [ map_category( $data[2] ), map_category( $data[3] ) ] ),
		'post_date' => date( "Y-m-d H:i:s", strtotime( $data[5] ) ),
		'post_content' => filter_content( $data[8] ),
		'post_status' => 'publish',
		'post_type' => 'post',
	];
	
	$acf = [
		'field_59d728d1e39fe' => $data[4], // author
		'field_59cbc6edebe1e' => check_region( $data[6] ), // region
	];
	
	$result = wp_insert_post( $post_data, true );

	if ( is_wp_error( $result ) ) {
		print_r( $result );
		return false;
	} else {
		$post_id = $result;
	}
	
	foreach( $acf as $key => $value ) {
		update_field( $key, $value, $post_id );
	}
	
	if ( $data[7] != 'n/a' ) {
		if ( $thumbnail_id = scrape_image( $data[7] ) ) {
			set_post_thumbnail( $post_id, $thumbnail_id );
		}
	}
	
	pll_set_post_language( $post_id, 'en' );
	
	echo "Inserted post {$post_id} " . get_permalink( $post_id ) . "\n\n";
	
	return true;

}


header('Content-Type: text/plain');

if ( ( $handle = fopen( __DIR__ . "/blog-posts.csv", "r" ) ) !== false ) {
	while ( ( $data = fgetcsv( $handle ) ) !== false ) {
		create_post_from_csv_data( $data );
	}
	fclose($handle);
}

exit;

} ); }
