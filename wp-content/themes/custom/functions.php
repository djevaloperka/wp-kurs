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
	/**
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'custom' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'frontpage-thumb', 370, 219, true );
	add_image_size( 'frontpage-products', 200, 257, true );
	add_image_size( 'archive-grid', 555, 330, true );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 306,
		'height'      => 165,
		'flex-width'  => true,
	) );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'header' => __( 'Header Menu', 'custom' ),
	) );

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

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/js/bootstrap.min.js' ), array( 'jquery' ), '', true );

	// Load Google map js only on Contact page template
	if ( is_page_template( 'template-contact.php' ) ) :
		wp_enqueue_script( 'map', get_theme_file_uri( '/js/map.js' ), array(), '', true );
		wp_enqueue_script( 'maps.googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD246KCYpyAgurZZBJ9vkPZi77LjGiysHc&callback=initMap', array(), '', true );

		wp_localize_script( 'map', 'custom_map', array(
			'lat'  => 40.6538813,
			'lng'  => -74.0991328,
			'zoom' => 14
		) );
	endif; // is_page_template( 'template-contact.php' )

	wp_enqueue_script( 'custom', get_theme_file_uri( '/js/custom.js' ), array( 'bootstrap' ), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );

/**
 * Register widget areas
 */
function custom_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'custom' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main widget area, displayed on blog archive page.', 'custom' ),
		'before_widget' => '<aside id="%1$s" class="posts widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Contact intro', 'custom' ),
		'id'            => 'contact-intro',
		'description'   => __( 'Displayed on contact page template, before contact form.', 'custom' ),
		'before_widget' => '<div id="%1$s" class="about_our_company text-center widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Contact info', 'custom' ),
		'id'            => 'contact-info',
		'description'   => __( 'Displayed on contact page template, next to contact form.', 'custom' ),
		'before_widget' => '<div id="%1$s" class="col-md-2 adress widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Frontpage Products Intro', 'custom' ),
		'id'            => 'frontpage-products',
		'description'   => __( 'Widget area above featured products on home page.', 'custom' ),
		'before_widget' => '<aside id="%1$s" class="frontpage-widget widget %2$s text-center">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Frontpage Promo', 'custom' ),
		'id'            => 'frontpage-promo',
		'description'   => __( 'Widget area below featured products on home page.', 'custom' ),
		'before_widget' => '<aside id="%1$s" class="frontpage-widget widget %2$s container banner">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Frontpage Featured Author', 'custom' ),
		'id'            => 'frontpage-author',
		'description'   => __( 'Widget area for featured author section on home page.', 'custom' ),
		'before_widget' => '<aside id="%1$s" class="frontpage-widget widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'custom' ),
		'id'            => 'footer-1',
		'description'   => __( 'Footer column 1 widget area.', 'custom' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'custom' ),
		'id'            => 'footer-2',
		'description'   => __( 'Footer column 2 widget area.', 'custom' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'custom' ),
		'id'            => 'footer-3',
		'description'   => __( 'Footer column 3 widget area.', 'custom' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'custom' ),
		'id'            => 'footer-4',
		'description'   => __( 'Footer column 4 widget area.', 'custom' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'custom_widgets_init' );
/**
 * Filter excerpt in order to hange the number of returned words.
 * This function is attached to 'excerpt_length' filter hook.
 *
 * @param  int $length Number of words
 * @return int         Returns new number of words
 */
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
/**
 * Filter excerpt more in order to change string appended
 * to excerpt. This function is attached to 'exerpt_more'
 * filter hook.
 *
 * @param  string $more String appended to excerpt
 * @return string       Returns modified string appended to excerpt
 */
function custom_excerpt_more( $more ) {
	$link = '<a href="' . get_permalink() . '">Read more</a>';

	if ( is_front_page() ) :
		return '... <span>' . $link . '</span>';
	else :
		return '...' . $link;
	endif;
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );
