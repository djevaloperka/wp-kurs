<?php
/**
 * Content
 *
 * Template part for displaying post content
 *
 * @package WordPress
 */
if ( is_front_page() ) :
	$class = 'col-md-4';
	$size = 'frontpage-thumb';
elseif ( is_page_template( 'template-blog-2.php' ) ) :
	$class = 'blog-dva';
	$size = 'archive-grid';
else :
	$class = 'blog-dva';
	$size = 'full';
endif; ?>

<div class="<?php echo $class; ?>">

	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( $size ); ?>
	<?php endif; ?>

	<?php the_title( '<h3>', '</h3>' ); ?>
	<p>By <span><?php the_author(); ?></span> / <?php comments_number(); ?></p>

	<?php
		if ( is_single() ) :
			the_content();
		else : // index.php, arcive.php, category.php, tag.php, date.php
			the_excerpt();
		endif;
	?>
</div>
