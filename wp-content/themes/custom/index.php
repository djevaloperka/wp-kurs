<?php
/**
 * Main template
 *
 * @package WordPress
 */
get_header(); ?>

<div class="container blog-one">
	<div class="row">

		<div class="col-md-8">
			<?php
				if ( have_posts() ) :

					while ( have_posts() ) : the_post();

						get_template_part( 'content' );

					endwhile; // have_posts()

					/**
					 * Posts pagination
					 */
					the_posts_pagination();

				endif; // have_posts()
			?>
		</div><!-- col-md-8 -->

		<?php get_sidebar(); ?>
	</div><!-- row -->
</div><!-- container blog-one -->

<?php get_footer();