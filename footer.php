<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BC_Land_Summit
 */

?>
</div> 
	<footer id="colophon" class="site-footer">
	<div class="footer-container">
			<img src="https://raw.githubusercontent.com/biaoliveira09/bclandsummit/1565f8f23b7ef877043e3ec4cc06d9089f3abd60/assets/white-main-logo.webp" alt="BC Land Summit Logo" class="footer-logo">
			<?php 
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'footer-menu',
					)
				);
				?>
				</div>
		<div class="footer-social-menu">
		
		<?php	
			wp_nav_menu(
				array(
					'theme_location' => 'social-media-menu',
					'menu_id'        => 'social-media-menu',
				)
			);

			?>
		</div>


		<div class="site-info">
			<p>Copyright © 2023 BC Land Summit Society</a>
			<p>Website by <a href="https://www.wiredaze.com/">WireDaze Studio</a></p>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
