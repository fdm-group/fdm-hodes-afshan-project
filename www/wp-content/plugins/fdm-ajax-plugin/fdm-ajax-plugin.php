<?php 
/*
   Plugin Name: FDM Ajax Plugin
   Author: Michael Ward
*/


add_action('wp_ajax_filter_posts', 'ajax_filter_get_posts');
add_action('wp_ajax_nopriv_filter_posts', 'ajax_filter_get_posts');


function ajax_filter_get_posts($taxonomy){  


	global $wpdb;
	// Get parameters from URL
	$center_lat = $_POST["lat"];
	$center_lng = $_POST["lng"];
	$radius = $_POST["radius"];

	$xml = new SimpleXMLElement('<root/>');

	// Search the rows in the markers table
	$query = sprintf("SELECT id, name, lat, lng, ( 3959 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance FROM markers  ORDER BY distance LIMIT 0 , 1",
	  $center_lat,
	  $center_lng,
	  $center_lat,
	  $radius);



	$result = $wpdb->get_results($query);


echo json_encode($result);
//			echo $query." here";
die();

}