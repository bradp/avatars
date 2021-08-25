<?php
/**
 * Plugin Name: Avatars
 * Description: Remove avatars from your WordPress site
 * Version:     1.0.0
 * Author:      Brad Parbs
 * Author URI:  https://bradparbs.com/
 * License:     GPLv2
 * Text Domain: no-avatars
 * Domain Path: /lang/
 *
 * @package no-avatars
 */

namespace NoAvatars;

add_action( 'admin_enqueue_scripts', function() {
	wp_add_inline_style( 'admin-bar', ".user-profile-picture { display: none; }" );
});

add_action( 'pre_option_show_avatars', '__return_false' );
