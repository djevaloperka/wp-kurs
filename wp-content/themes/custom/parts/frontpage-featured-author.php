<?php
/**
 * Featured author
 *
 * Template for displaying featured author on home page.
 *
 * @package WordPress
 */
/**
 * Get author id
 * @var integer
 */
$author = 2;
/**
 * Get author' categories
 * @var array
 */
$categories = array(8,9);

$args = array(
	'post_type'        => 'post',
	'posts_per_page'   => 4,
	'order'            => 'DESC',
	'orderby'          => 'post_date',
	'author'           => $author,
	'tax_query'        => array(
		array(
			'taxonomy' => 'category',
			'field'    => 'term_id',
			'terms'    => $categories,
			'operator' => 'AND',
		),
	),
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>

<div class="container author-best-selling">
	<div class="row">

		<div class="col-md-4 author">
			<h2>Author best selling</h2>
			<h3><?php the_author_meta( 'display_name', $author ); ?></h3>
			<p>CATEGORIES:
				<?php
					foreach ( $categories as $category ) : ?>
						<span><?php echo get_the_category_by_ID( $category ); ?></span>
					<?php endforeach;
				?>
			</p>
			<?php echo wpautop( get_the_author_meta( 'description', $author ) ); ?>
		</div>

		<div class="col-md-4 baner">
			<?php
				/**
				 * Home page widget area 2
				 */
				if ( is_active_sidebar( 'frontpage-author' ) ) :
					dynamic_sidebar( 'frontpage-author' );
				endif;
			?>
		</div>

		<div class="col-md-4 books">

			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-md-6">
					<div class="author-news">

						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'frontpage-products' ); ?>
						<?php endif; ?>

						<div class="caption">
							<ul >
								<li> <i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>

							<?php the_title( '<p>', '</p>' ); ?>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>

		</div>
	</div>
</div>

<?php endif; wp_reset_query();
