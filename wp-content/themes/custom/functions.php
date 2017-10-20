<?php
/**
 * Theme Functions
 *
 * @package WordPress
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function custom_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

}
add_action( 'after_setup_theme', 'custom_setup' );

/**
 * Enqueue sripts and styles
 *
 * This function is attached to 'wp_enqueue_scripts' action hook.
 */
function custom_enqueue_scripts() {

	wp_enqueue_style( 'awesome-fonts', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700' );
	wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/css/bootstrap.min.css' ) );
	wp_enqueue_style( 'custom-style', get_stylesheet_uri(), array( 'awesome-fonts', 'google-fonts', 'bootstrap' ) );

}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );
