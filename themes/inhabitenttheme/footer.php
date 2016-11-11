<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-info container">
					<div class="footer-item">
						<div class="contact-info">
							<h3>Contact Info</h3>
							<p><i></i>
								<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
							</p>
							<p>
								<i></i>
								<a href="#">778-456-7891</a>
							</p>
							<p>
								<span><i class="fa fa-facebook-square"></i></span>
								<span><i class="fa fa-twitter-square"></i></span>
								<span><i class="fa fa-google-plus-square"></i></span>
							</p>
						</div>
					</div>
					<div class="footer-item">
						<div class="days-working">
							<h3>Business Hours</h3>
							<p>
								<span class="day-of-week">Monday-Friday:</span>
								9am - 5pm
							</p>
							<p>
								<span class="day-of-week">Saturday:</span>
								10am - 2pm
							</p>
							<p>
								<span class="day-of-week">Sunday:</span>
								Closed
							</p>
						</div>
					</div>
					<div class="footer-item">
						<div class="footer-logo">
							<a href="<?php echo esc_url( home_url('/')); ?>">
								<img src="<?php echo get_template_directory_uri(). "/images/inhabitent-logo-text.svg"?>" alt=""/>
							</a>
						</div>
					</div>
				</div><!-- #page -->
				<div class="site-info">
					<p>Copyright &#169; 2016 Inhabitent</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->

		<?php wp_footer(); ?>

	</body>
</html>
