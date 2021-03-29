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
	wp_enqueue_style( 'pure-min', get_stylesheet_directory_uri() . '/css/pure-min.css', array(), '0.0.1' );
}

/**
 * Function to remove parent theme functions.
 */
function remove_parent_functions() {
	remove_filter( 'walker_nav_menu_start_el', 'twenty_twenty_one_add_sub_menu_toggle' );
}
add_action( 'init', 'remove_parent_functions', 10 );

