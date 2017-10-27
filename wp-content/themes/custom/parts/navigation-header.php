<?php
/**
 * Navigation header
 *
 * Template for displaying main menu.
 *
 * @package WordPress
 */

wp_nav_menu( array(
	'theme_location'  => 'header',
	'container_id'    => 'navbar',
	'container_class' => 'collapse navbar-collapse',
	'menu_class'      => 'nav navbar-nav navbar-right'
) );

