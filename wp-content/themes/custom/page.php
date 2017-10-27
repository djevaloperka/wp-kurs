<?php
/**
 * Page template
 *
 * @package WordPress
 */
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="container banner">
		<div class="row">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'full' ); ?>
			<?php endif; ?>
		</div>
	</div>

	<div class="container our">
		<?php the_title( '<h1>', '</h1>' ); ?>
		<?php the_content(); ?>
	</div><!-- container our -->

<?php endwhile; endif;

get_footer();
