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
	'posts_per_page' => 4,
	'category_name'  => 'featured',
	'order'          => 'DESC',
	'orderby'        => 'post_date'
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>

	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

		<div class="overlay"></div>

		<ol class="carousel-indicators">
		<?php

			// Start loop.
			while ( $query->have_posts() ) : $query->the_post();

				// Add class 'active' for first post.
				if ( $query->current_post == 0 ) {
					$class = 'class="active"';
				} else {
					$class = '';
				}
			?>

				<li data-target="#bs-carousel" data-slide-to="<?php the_ID(); ?>" <?php echo $class; ?>></li>

			<?php endwhile; wp_reset_query(); ?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">

			<?php
				// Start loop again.
				while ( $query->have_posts() ) : $query->the_post();

					// Add class 'active' for first post.
					if ( $query->current_post == 0 ) {
						$class = 'active';
					} else {
						$class = '';
					} ?>

					<div class="item slides <?php echo $class; ?>">
						<div class="slide-image slide-<?php the_ID(); ?>" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>)"></div>
						<div class="hero">
							<hgroup>
								<h3><?php the_excerpt(); ?></h3>
								<?php the_title( '<h1>', '</h1>' ); ?>
							</hgroup>
							<a class="btn btn-hero btn-lg" role="button" href="<?php the_permalink(); ?>">Shop now</a>
						</div>
					</div>
			<?php endwhile; ?>

		</div><!-- carousel-inner -->
	</div><!-- carousel fade-carousel slide -->

<?php endif; wp_reset_query();
