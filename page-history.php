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

<div class="timeline">
	<div class="container left">
            <?php
				if (function_exists('get_field')) {

            $timeline_section = get_field('timeline_section'); 

			 echo '<div class="content">';
				echo '<h3>' . $timeline_section['conference_1']['conference_name'] . '</h3>';
				echo '<div class="conference-details">';

				echo '<p><span class="timeline-date">' . $timeline_section['conference_1']['conference_dates'] . '</span></p>';
				echo '<p>' . $timeline_section['conference_1']['conference_location'] . '</p>';
				echo '</div>';
				echo '<h4 class="timeline-heading">Theme</h4>';
				echo '<p>' . $timeline_section['conference_1']['conference_theme'] . '</p>';
				echo '<h4 class="timeline-heading">Speakers</h4>';
				echo '<p>' . $timeline_section['conference_1']['conference_speakers'] . '</p>';
			echo '</div>';
			echo '</div>';
			

			echo '<div class="container right">';
				echo '<div class="content">';
				echo '<h3>' . $timeline_section['conference_2']['conference_name'] . '</h3>';
				echo '<div class="conference-details">';
				echo '<p><span class="timeline-date">' . $timeline_section['conference_2']['conference_dates'] . '</span></p>';
				echo '<p>' . $timeline_section['conference_2']['conference_location'] . '</p>';
				echo '</div>';
				echo '<h4 class="timeline-heading">Theme</h4>';
				echo '<p>' . $timeline_section['conference_2']['conference_theme'] . '</p>';
				echo '<h4 class="timeline-heading">Speakers</h4>';
				echo '<p>' . $timeline_section['conference_2']['conference_speakers'] . '</p>';
			echo '</div>';
			echo '</div>';
			echo '<div class="container left">';
			echo '<div class="content">';
				echo '<h3>' . $timeline_section['conference_3']['conference_name'] . '</h3>';
				echo '<div class="conference-details">';
				echo '<p><span class="timeline-date">' . $timeline_section['conference_3']['conference_dates'] . '</span></p>';
				echo '<p>' . $timeline_section['conference_3']['conference_location'] . '</p>';
				echo '</div>';
				echo '<h4 class="timeline-heading">Theme</h4>';
				echo '<p>' . $timeline_section['conference_3']['conference_theme'] . '</p>';
				echo '<h4 class="timeline-heading">Speakers</h4>';
				echo '<p>' . $timeline_section['conference_3']['conference_speakers'] . '</p>';
			echo '</div>';
			echo '</div>';
			echo '<div class="container right">';
			echo '<div class="content">';
				echo '<h3>' . $timeline_section['conference_4']['conference_name'] . '</h3>';
				echo '<div class="conference-details">';
				echo '<p><span class="timeline-date">' . $timeline_section['conference_4']['conference_dates'] . '</span></p>';
				echo '<p>' . $timeline_section['conference_4']['conference_location'] . '</p>';
				echo '</div>';
				echo '<h4 class="timeline-heading">Theme</h4>';
				echo '<p>' . $timeline_section['conference_4']['conference_theme'] . '</p>';
				echo '<h4 class="timeline-heading">Speakers</h4>';
				echo '<p>' . $timeline_section['conference_4']['conference_speakers'] . '</p>';
			echo '</div>';
			echo '</div>';
			echo '<div class="container">';
			echo '</div>';
			
				}
            ?>
			</div>
			<div class="middle">
			<span><h3>2024 BC Land Summit</h3></span>
			<?php 
				if (function_exists('get_field')) {
					$register_cta = get_field('register_cta');
					if ($register_cta) {
					$register_cta_url = $register_cta['url'];
										$register_cta_title = $register_cta['title'];
										?>
										<a href="<?php echo $register_cta_url; ?>" class="button"><?php echo $register_cta_title; ?></a></p>
										<?php
				}}
			
			?>
			</div>
    </section>

	<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->

<?php
get_footer();
