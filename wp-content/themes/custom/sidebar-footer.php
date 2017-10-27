<?php
/**
 * Footer widget area
 *
 * @package WordPress
 */
if ( ! is_active_sidebar( 'footer-1' ) &&
	! is_active_sidebar( 'footer-2' ) &&
	! is_active_sidebar( 'footer-3' ) &&
	! is_active_sidebar( 'footer-4' ) ) {
	return;
} ?>

<div class="container footer-elements" role="complementary">
	<div class="row">

		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<div class="col-md-3">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
		<?php endif; // is_active_sidebar( 'footer-1' )  ?>

		<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
			<div class="col-md-3">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
		<?php endif; // is_active_sidebar( 'footer-2' )  ?>

		<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
			<div class="col-md-3">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
		<?php endif; // is_active_sidebar( 'footer-3' )  ?>

		<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
			<div class="col-md-3">
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</div>
		<?php endif; // is_active_sidebar( 'footer-4' )  ?>

	</div><!-- row -->
</div><!-- container footer-elements -->
