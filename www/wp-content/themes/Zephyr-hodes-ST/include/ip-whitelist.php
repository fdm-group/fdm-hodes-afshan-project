<?php

namespace Hodes\FDM;

// Is this the login page?
function is_login_page() {
    return in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) );
}

/**
 * Determine whether the given IP address is on the given access list
 *
 * @param string $ip The IP address to test, in dotted decimal format eg '192.168.0.1'
 * @param array $acl List of subnets to test against, given as an array of strings, where each entry is a subnet in CIDR format eg '172.16.0.0/12'
 * @return boolean true if the ip address is in any of the subnets, false if not
 * @throws Exception if the ip address or any entry in the acl is malformed
 */
function ip_matches( $ip, $acl ) {

	// End user's IP address as an integer
	$ip_long = ip2long( $ip );
	if ( $ip_long === false ) {
		error_log("Malformed ip address $ip");
		return false;
	}
	
	foreach ( $acl as $entry ) {
	
		// check entries are valid first
		if ( ! preg_match( '/^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])(\/([0-9]|[1-2][0-9]|3[0-2]))$/', $entry ) ) {
			throw new \Exception( "Malformed entry in access list $entry" );
		}
	
		// separate subnet address and mask bits
		list( $subnet, $mask_bits ) = explode( '/', $entry );
		$subnet = ip2long( $subnet );
		$mask_bits = (int) $mask_bits;
		
		// convert mask bits to binary mask
		$mask = ~( ( 1 << ( 32 - $mask_bits ) ) - 1 );
				
		if ( ( $ip_long & $mask ) == ( $subnet & $mask ) ) {
			// found a match - ip is within the subnet
			return true;
		}
	}
	
	// no match found
	return false;
	
}


/**
 * Implement IP whitelist for wp-admin and login page
 */
add_action('init', function() {
	if (is_admin() || is_login_page()) {
		
		$whitelist = array(
		
			// Hodes Dan
			'62.30.196.60/32',
			'212.159.22.203/32',

			// Madison Solutions
			'164.39.204.54/32',
			'109.169.33.25/32',

			// Hodes Office
			'81.130.151.48/32',
			
			// FDM
			'213.133.139.36/32',
			'213.133.139.37/32',
			'213.133.139.58/32',
			'213.133.139.59/32',
			'185.64.160.34/32',
			'14.136.208.68/32',
			'122.11.148.52/32',
			'79.173.145.156/32',
			'38.122.11.162/32',
			
			// Pen tester
			'31.221.29.210/32',
		
		);
		
		if ( ! ip_matches( $_SERVER['REMOTE_ADDR'], $whitelist ) ) {
			error_log( "Disallowed access to management for {$_SERVER['REMOTE_ADDR']}" );
			header( "HTTP/1.0 403 Forbidden" );
			exit;
		}
	}
});

