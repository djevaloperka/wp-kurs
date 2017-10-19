<?php
/**
 * Twenty Seventeen Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @since 1.0
 */
/**
 * Enqueue sripts and styles
 *
 * This function is attached to 'wp_enqueue_scripts' action hook.
 */
function twentyseventeen_child_enqueue_styles() {
	// Parent style
	wp_enqueue_style( 'twentyseventeen-parent',
		get_parent_theme_file_uri( 'style.css' ),
		array( 'twentyseventeen-fonts' )
	);
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_child_enqueue_styles' );
