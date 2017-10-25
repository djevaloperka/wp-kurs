<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 */
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div id="map"></div>


<!--contact-->
<section id="contact">
<div class="container">
<div class="row form-form">

<div class="col-md-10">

<div class="about_our_company text-center" >
<h1 >Write Your Message</h1>
<p >Lorem Ipsum is simply dummy text of the printing and typesetting </p>
</div>

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

</div>
<div class="col-md-2 adress">
<p >
<strong><i class="fa fa-map-marker"></i> Address</strong><br>
78 Carpenter Street Huntington,New York 11743
</p>
<p ><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
(329) 1833-2302, (485) 9127-6014
</p>
<p >
<strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
contact@example.com
</p>
</div>
</div>
</div>
</section>

<?php endwhile; endif;

get_footer();
