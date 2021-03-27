<?php
/**
 * Functions file for the child theme.
 *
 * @package diadempress
 */

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );
/**
 * Function to enqueue child theme CSS after the parent theme.
 */
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri(), array(), '0.0.1' );
	wp_enqueue_style( 'ddp-stle', get_stylesheet_directory_uri() . '/css/ddp-style.css', array(), '0.0.1' );
}
