<?php
/*
  Plugin Name: Voce Performance Tools
  Plugin URI: http://voceconnect.com
  Description: Provides numerous performance tools and functionalities to assist in developing high performance WordPress themes
  Version: 1.2.1
  Author: Kevin Langley, Voce Platforms
  License: GPL2
*/

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) )
	require_once __DIR__ . '/vendor/autoload.php';

/**
 * Helper functions to cache queries and update in background
 * Uses TLC-Transients to cache and update queries
 * @param array $query_args Query arguments
 * @param int $expires_in number of seconds to cache the query
 * @param bool $transient_key optional key name used to cache the query, helpful when even driven expiration is needed
 * @return WP_Query
 */
function vpt_get_cached_query( $query_args, $expires_in = 180, $transient_key = false ) {
	if ( !$transient_key )
		$transient_key = 'vpt_query_' . substr( md5( serialize( func_get_args() ) ), 0, 25 );

	$query = tlc_transient( $transient_key )
			->updates_with( 'vpt_get_wp_query', array($query_args) )
			->expires_in( $expires_in )
			->get();

	if(!is_a( $query, 'WP_Query' )) {
		return new WP_Query($query_args);
	}

	return $query;
}

function vpt_get_wp_query( $query_args ) {
	return new WP_Query( $query_args );
}