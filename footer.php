<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medcare
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="footer-logo">
						<?php dynamic_sidebar('site-logo'); ?>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="footer-location-info">
						<?php dynamic_sidebar('location'); ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="footer-contact-info">
						<?php dynamic_sidebar('contact-us'); ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="footer-nav">
						<?php dynamic_sidebar('nav-menu'); ?>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
