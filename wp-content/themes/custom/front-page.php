<?php
/**
 * Front page template
 *
 * @package WordPress
 */
get_header();

	/**
	 * Hero slider
	 */
	get_template_part( 'parts/slider' );
	/**
	 * Home page widget area 1
	 */
	if ( is_active_sidebar( 'frontpage-products' ) ) :
		dynamic_sidebar( 'frontpage-products' );
	endif;
	/**
	 * Featured posts
	 */
	get_template_part( 'parts/frontpage-featured-products' );
	/**
	 * Home page widget area 2
	 */
	if ( is_active_sidebar( 'frontpage-promo' ) ) :
		dynamic_sidebar( 'frontpage-promo' );
	endif;
	/**
	 * Featured author
	 */
	get_template_part( 'parts/frontpage-featured-author' );
	/**
	 * Latest posts
	 */
	get_template_part( 'parts/frontpage-latest-posts' );

get_footer();