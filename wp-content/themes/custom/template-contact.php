<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 */
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div id="map"></div>

	<section id="contact">
		<div class="container">
			<div class="row form-form">

				<div class="col-md-10">
					<?php
						if ( is_active_sidebar( 'contact-intro' ) ) :
							dynamic_sidebar( 'contact-intro' );
						endif;

						the_content();
					?>
				</div><!-- col-md-10 -->

				<?php
					if ( is_active_sidebar( 'contact-info' ) ) :
						dynamic_sidebar( 'contact-info' );
					endif;
				?>

			</div><!-- row form-form -->
		</div><!-- container -->
	</section><!-- #contact -->

<?php endwhile; endif;

get_footer();
