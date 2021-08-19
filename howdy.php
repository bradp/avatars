<?php
/**
 * Plugin Name: Howdy
 * Description: Remove "Howdy" from the admin bar.
 * Version:     1.0.0
 * Author:      Brad Parbs
 * Author URI:  https://bradparbs.com/
 * License:     GPLv2
 * Text Domain: howdy
 * Domain Path: /lang/
 *
 * @package howdy
 */

namespace Howdy;

add_filter( 'admin_bar_menu', function( $bar ) {
	if ( is_admin_bar_showing() && is_user_logged_in() ) {
		$bar->add_node( [
			'id' => 'my-account',
			'title' => wp_get_current_user()->display_name
		]);
	}

	return $bar;
}, 999);
