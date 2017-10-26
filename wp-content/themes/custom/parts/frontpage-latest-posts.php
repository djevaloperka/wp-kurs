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
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>

	<div class="container text-center front-page-feed">
		<h1>Latest From Our Blog</h1>
	</div>

	<div class="container blogpostt">
		<div class="row">

			<?php
				while ( $query->have_posts() ) : $query->the_post();
					get_template_part( 'content' );
				endwhile;
			?>

		</div><!-- row -->
	</div><!-- container blogpostt -->

<?php endif; wp_reset_query();
