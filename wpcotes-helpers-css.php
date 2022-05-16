<?php
/**
 * Plugin Name: WPCotes - Helpers CSS
 */

add_action( 'wp_enqueue_scripts', 'wpcotes_helpers_css', 10, 1 );

if ( ! function_exists( 'wpcotes_helpers_css') ) {
	function wpcotes_helpers_css() {
		wp_enqueue_style( 'wpcotes-helpers', __DIR__ . '/css/helpers.css', array(), true, '1.0.0' );
	}
}
