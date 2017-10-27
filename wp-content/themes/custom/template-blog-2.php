<?php
/**
 * Template Name: Blog 2
 *
 * @package WordPress
 */
get_header(); ?>

<div class="container blog-one">
	<div class="row">

		<?php
			/**
			 * Custom query args
			 * @var array
			 */
			$args = array(
				'post_type'      => 'post',
				'posts_per_page' => -1
			);

			$query = new WP_Query( $args );

			if ( $query->have_posts() ) :

				while ( $query->have_posts() ) : $query->the_post(); ?>

					<div class="col-md-6">
						<?php get_template_part( 'content' ); ?>
					</div>

				<?php endwhile; // have_posts()

			endif; // have_posts()
			wp_reset_query();
		?>
	</div><!-- row -->
</div><!-- container blog-one -->

<?php get_footer();