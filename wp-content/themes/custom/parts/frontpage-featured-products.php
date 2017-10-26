<?php
/**
 * Hero Slider
 *
 * Template for displaying slider on home page.
 *
 * @package WordPress
 */
$args = array(
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'category_name'  => 'products',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>

<div class="index-content">
	<div class="container blog">

		<?php while ( $query->have_posts() ) : $query->the_post(); ?>

			<a href="<?php the_permalink(); ?>">
				<div class="col-lg-4">
					<div class="card">

						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'frontpage-products' ); ?>
						<?php endif; ?>

						<?php the_content(); ?>
					</div>
				</div>
			</a>
		<?php endwhile; ?>

	</div><!-- container blog -->
</div><!-- index-content -->

<?php endif; wp_reset_query();
