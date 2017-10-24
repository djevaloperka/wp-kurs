<?php
/**
 * Content
 *
 * Template part for displaying post content
 *
 * @package WordPress
 */
?>
<div class="blog-dva">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'full' ); ?>
	<?php endif; ?>

	<?php the_title( '<h3>', '</h3>' ); ?>
	<p>By <span><?php the_author(); ?></span> / <?php comments_number(); ?></p>
	<?php the_excerpt(); ?>
</div><!-- blog-dva -->