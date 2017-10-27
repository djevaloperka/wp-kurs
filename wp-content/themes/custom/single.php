<?php
/**
 * Single post template
 *
 * @package WordPress
 */
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="container blog-one">
		<div class="row">
			<div class="col-md-12">

				<?php
					/**
					 * Get post content template part,
					 * shared with archives
					 */
					get_template_part( 'content' );

					/**
					 * Posts pagination
					 */
					the_post_navigation();
				?>
			</div><!-- col-md-12 -->
		</div><!-- row -->
	</div><!-- container blog-one -->

<?php endwhile; endif;

get_footer();
