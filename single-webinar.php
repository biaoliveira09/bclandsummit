<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BC_Land_Summit
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			echo '<section class="webinar-post">';
			if (function_exists('get_field')) {
				$date = get_field('date');
				if ($date) {
					echo '<p class="webinar-date">'. $date . '</p>';
				}
				$webinar_text = get_field('webinar_text');
				if ($webinar_text) {
					echo '<div>' . $webinar_text . '</div>';
				}
			}
			echo '</section>';

		
			echo '<a href="' . get_post_type_archive_link( 'webinar' ) . '">Back to Webinars</a>';

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
