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
					while ( have_posts() ) : the_post(); ?>

						<div class="blog-dva">
							<?php the_title( '<h3>', '</h3>' ); ?>
							<p>By <span><?php the_author(); ?></span> / <?php comments_number(); ?></p>
							<?php the_excerpt(); ?>
						</div><!-- blog-dva -->

					<?php endwhile;
				endif;
			?>
		</div><!-- col-md-8 -->

		<?php get_sidebar(); ?>
	</div><!-- row -->
</div><!-- container blog-one -->


<?php get_footer();