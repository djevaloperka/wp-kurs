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
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * If parent theme has priority set for this action hook, then child theme
 * should have any higher number. Otherwise, any number higher than 10 will
 * ensure proper priority for child theme.
 */
function twentyseventeen_child_setup_theme() {

	/**
	 * Enable support for Post Formats.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'image',
		'video',
		'gallery',
	) );

	// Remove theme support for Custom Logo.
	remove_theme_support( 'custom-logo' );

	// Remove parent's filter on body class
	remove_filter( 'body_class', 'twentyseventeen_body_classes' );
}
add_action( 'after_setup_theme', 'twentyseventeen_child_setup_theme', 11 );

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

/**
 * Filter header image size
 *
 * This function is attached to 'twentyseventeen_custom_header_args' filter hook,
 * which is defined in parent theme. @see twentyseventeen/inc/custom-header.php
 *
 * @param  array $args   Array of header image arguments
 * @return array         Returns modified values for header image
 */
function twentyseventeen_child_header_image_size( $args ) {
	$args['width'] = 1000;
	$args['height'] = 600;

	return $args;
}
add_filter( 'twentyseventeen_custom_header_args', 'twentyseventeen_child_header_image_size' );

