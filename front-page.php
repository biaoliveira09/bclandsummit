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
<?php while (have_posts()) : the_post(); ?>

	<main id="primary" class="site-main">

	<section class="section-hero">
		<div class="hero-logo"></div>
            <?php
            if (function_exists('get_field')) {
                $main_heading = get_field('main_heading');
                if ($main_heading) {
                    echo '<h2>' . $main_heading . '</h2>';
                }

                $dates = get_field('dates');
                if ($dates) {
                    echo '<div class="date-location"><span class="date"><p>' . $dates . '</p></span>';
                }

                $location = get_field('location');
                if ($location) {
                    echo '<span class="location"><p>' . $location . '</p></span></div>';
                }

				$register_cta = get_field('register_cta');
                if ($register_cta) {
                    $register_cta_url = $register_cta['url'];
										$register_cta_title = $register_cta['title'];
										?>
										<a href="<?php echo $register_cta_url; ?>" class="cta"><?php echo $register_cta_title; ?></a>
										<?php
                }
            }
            ?>
        </section>
		<section class="section-info">
			<div class="info-text">
			<?php
			if (function_exists('get_field')) {
					$info_heading = get_field('whats_happening_section')['whats_happening_heading'];
					if ($info_heading) {
						echo '<h2>' . $info_heading . '</h2>';
					}

					$whats_happening_secondary_heading = get_field('whats_happening_section')['whats_happening_secondary_heading'];
					if ($whats_happening_secondary_heading) {
						echo '<div class="info-section-text"><h3>' . $whats_happening_secondary_heading . '</h3>';
					}

					$whats_happening_text = get_field('whats_happening_section')['whats_happening_text'];
					if ($whats_happening_text) {
						echo '<div>' . $whats_happening_text . '</div></div>';
					}
				?> </div>
				<div class="venue-pics">
					<?php
					$venue_picture = get_field('whats_happening_section')['venue_picture'];
					if ($venue_picture) {
						echo '<img src="' . $venue_picture['url'] . '" alt="Venue Picture">';
					}
					$venue_picture2 = get_field('whats_happening_section')['venue_picture_2'];
					if ($venue_picture2) {
						echo '<img src="' . $venue_picture2['url'] . '" alt="Venue Picture">';
					}
				}
            ?>
			</div>
        </section>
		<section class="section-attend">
			<?php
			if (function_exists('get_field')) {
					$attend_heading = get_field('who_should_attend_section')['who_should_attend_heading'];
					if ($attend_heading) {
						echo '<div class="attend-text"><h2>' . $attend_heading . '</h2>';
					}

					$who_should_attend_secondary_heading = get_field('who_should_attend_section')['who_should_attend_secondary_heading'];
					if ($who_should_attend_secondary_heading) {
						echo '<div class="attend-section-text"><h3>' . $who_should_attend_secondary_heading . '</h3>';
					}
					$who_should_attend_text = get_field('who_should_attend_section')['who_should_attend_text'];
					if ($who_should_attend_text) {
						echo '<div>' . $who_should_attend_text . '</div></div></div>';
					}
				}


			$professionals_section = get_field('who_should_attend_section')['attendees'];

			echo '<div class="professionals-container">';
			for ($i = 0; $i < count($professionals_section) +1; $i++) {
				$professionals_key = 'professionals_picture_' . ($i);
				$professional = $professionals_section[$professionals_key];

				if ($professional) {
					echo '<img src="' . $professional['url'] . '" alt="' .$professional['title'] .'" />';
				}
			}
			echo '</div>';


            ?>
        </section>
		<section class="section-involved">
			<?php
			if (function_exists('get_field')) {
					$involved_heading = get_field('want_to_get_involved')['want_to_get_involved_heading'];
					if ($involved_heading) {
						echo '<h2>' . $involved_heading . '</h2>';
					}

					$want_to_get_involved_secondary_heading = get_field('want_to_get_involved')['want_to_get_involved_secondary_heading'];
					if ($want_to_get_involved_secondary_heading) {
						echo '<h3>' . $want_to_get_involved_secondary_heading . '</h3>';
					}

					$want_to_get_involved_text = get_field('want_to_get_involved')['want_to_get_involved_text'];
					if ($want_to_get_involved_text) {
						echo '<div>' . $want_to_get_involved_text . '</div>';
					}
					
					$get_involved = get_field('get_involved_cta');
					if ($get_involved) {
						$get_involved_url = $get_involved['url'];
						$get_involved_title = $get_involved['title'];
											?>
											<a href="<?php echo $get_involved_url; ?>"><?php echo $get_involved_title; ?></a>
											<?php
					}
				}
            ?>
        </section>

		<section class="section-staytuned">
			<?php
			if (function_exists('get_field')) {
				$stay_tuned_graphic = get_field('stay_tuned_section')['exclamation_mark'];
				if ($stay_tuned_graphic) {
					echo '<img src="' . $stay_tuned_graphic['url'] . '" alt="Exclamation Mark">';
				}
				
				$stay_tuned_heading = get_field('stay_tuned_section')['stay_tuned_heading'];
					if ($stay_tuned_heading) {
						echo '<div><h2>' . $stay_tuned_heading . '</h2>';
					}

					$stay_tuned_text = get_field('stay_tuned_section')['stay_tuned_text'];
					if ($stay_tuned_text) {
						echo '<div>' . $stay_tuned_text . '</div></div>';
					}
				}
            ?>
        </section>
		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
