<?php
/**
 * Sidebar widget area
 *
 * @package WordPress
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-md-4 pos-com" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
