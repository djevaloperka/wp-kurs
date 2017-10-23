<?php
/**
 * Footer
 *
 * Template part for displaying website's <footer>
 * and closing tags for the <body> and <html>
 *
 * @package WordPress
 */
?>
<footer>

   <div class="container footer-elements">
	  <div class="row">

		<div class="col-md-3">
			 <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<?php dynamic_sidebar( 'footer-1' ); ?>
			<?php endif; // is_active_sidebar( 'footer-1' )  ?>
		</div>

		<div class="col-md-3">
			 <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
				<?php dynamic_sidebar( 'footer-2' ); ?>
			<?php endif; // is_active_sidebar( 'footer-2' )  ?>
		</div>

		<div class="col-md-3">
			 <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
				<?php dynamic_sidebar( 'footer-3' ); ?>
			<?php endif; // is_active_sidebar( 'footer-3' )  ?>
		</div>

		<div class="col-md-3">
			 <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
				<?php dynamic_sidebar( 'footer-4' ); ?>
			<?php endif; // is_active_sidebar( 'footer-4' )  ?>
		</div>

	  </div><!-- row -->
   </div><!-- container footer-elements -->

   <div class="container paypal">
	  <div class="row">
		 <div class="col-md-6">
			<p> Your Store Copyright Here. Powered By Milena</p>
		 </div>
		 <div class="col-md-6 text-right"><img src="/wp-content/themes/custom/img/file-tHlBk2a147.png"></div>
	  </div>
   </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>