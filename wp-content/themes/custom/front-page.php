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
	 * Latest posts
	 */
	get_template_part( 'parts/frontpage-latest-posts' );

get_footer();