<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BC_Land_Summit
 */

get_header();
?>

	<main id="primary" class="site-main">
	<?php while (have_posts()) : the_post(); ?>

	<section class="section-history">
            <?php
            if (function_exists('get_field')) {
                $history_heading = get_field('history_section')['history_heading'];
				if ($history_heading) {
					echo '<h2>' . $history_heading . '</h2>';
                }
				$history_subheading = get_field('history_section')['history_subheading'];
				if ($history_subheading) {
					echo '<h3>' . $history_subheading . '</h3>';
                }

				$history_content = get_field('history_section')['history_text'];
				if ($history_content) {
					echo '<div>' . $history_content . '</div>';
				}

            }
            ?>
    </section>

	<section class="section-timeline">
            <?php
            $timeline_section = get_field('timeline_section'); 

			for ($i = 1; $i <= count($timeline_section); $i++) {
				$conference_key = 'conference_' . $i;
				$conference = $timeline_section[$conference_key];
				$conference_name = $conference['conference_name'];
				$conference_dates = $conference['conference_dates'];
				$conference_location = $conference['conference_location'];
				$conference_theme = $conference['conference_theme'];
				$conference_speakers = $conference['conference_speakers'];

			

				if ($conference) {
					echo '<div class="conference">';
			
					echo '<h3>' . $conference_name . '</h3>';
					echo '<p>' . $conference_dates . '</p>';
					echo '<p>' . $conference_location . '</p>';
					echo '<p>' . $conference_theme . '</p>';
					echo '<p>' . $conference_speakers . '</p>';

					echo '</div>';
				}
			}
            ?>
    </section>

	<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->

<?php
get_footer();
