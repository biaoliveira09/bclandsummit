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

	<footer id="colophon" class="site-footer">
	<div class="footer-container">
			<img src="http://localhost:8888/bclandsummit/wp-content/uploads/2023/08/white-logo.png" alt="BC Land Summit Logo" class="footer-logo">
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
			<p>Website by <a href="">WireDaze Studio</a></p>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
