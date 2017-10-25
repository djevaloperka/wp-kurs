<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 */
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div id="map"></div>

<section id="contact">
	<div class="container">
		<div class="row form-form">

			<div class="col-md-10">

				<?php
					if ( is_active_sidebar( 'contact-intro' ) ) :
						dynamic_sidebar( 'contact-intro' );
					endif;
				?>

				<form name="sentMessage" id="contactForm" novalidate="">
					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>

							<div class="form-group">
								<input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>

							<div class="form-group">
								<input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>

						<div class="col-lg-12 text-center button-message">
							<div id="success"></div>
							<button type="submit" class="btn btn-xl get">Send Message</button>
						</div>
					</div>
				</form>

			</div><!-- col-md-10 -->

			<?php
				if ( is_active_sidebar( 'contact-info' ) ) :
					dynamic_sidebar( 'contact-info' );
				endif;
			?>

		</div><!-- row form-form -->
	</div><!-- container -->
</section><!-- #contact -->

<?php endwhile; endif;

get_footer();
