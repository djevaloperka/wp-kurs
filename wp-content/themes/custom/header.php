<?php
/**
 * Header
 *
 * Template file for displaying <head> of the dokument and header of the website.
 *
 * @package WordPress
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Open-graph-protocol-type-->
	<meta property="og:title" content="wp-kurs" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="Wp kurs"/>
	<!--/Open-graph-protocol-type-->

	<!--where-is-open-graph-protocol-->
	<meta property="og:url" content="<?php echo home_url( '/' ); ?>" />
	<!--/where-is-open-graph-protocol-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="mainheader" class="mainheader" role="banner">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'custom' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">
						<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

							if ( has_custom_logo() ) {
									echo '<img src="'. esc_url( $logo[0] ) .'">';
							} else {
									echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
							}
						?>
					</a>
				</div><!-- navbar-header -->

				<?php get_template_part( 'parts/navigation-header' ); ?>

			</div>
		</nav>
	</header>
