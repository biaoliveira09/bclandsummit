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
            <?php
            if (function_exists('get_field')) {
                $main_heading = get_field('main_heading');
                if ($main_heading) {
                    echo '<h1>' . $main_heading . '</h1>';
                }

                $dates = get_field('dates');
                if ($dates) {
                    echo '<p>' . $dates . '</p>';
                }

                $location = get_field('location');
                if ($location) {
                    echo '<p>' . $location . '</p>';
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
			<?php
			if (function_exists('get_field')) {
					$info_heading = get_field('whats_happening_section')['whats_happening_heading'];
					if ($info_heading) {
						echo '<h2>' . $info_heading . '</h2>';
					}

					$whats_happening_secondary_heading = get_field('whats_happening_section')['whats_happening_secondary_heading'];
					if ($whats_happening_secondary_heading) {
						echo '<h3>' . $whats_happening_secondary_heading . '</h3>';
					}

					$whats_happening_text = get_field('whats_happening_section')['whats_happening_text'];
					if ($whats_happening_text) {
						echo '<div>' . $whats_happening_text . '</div>';
					}
				}
            ?>
        </section>
		<section class="section-attend">
			<?php
			if (function_exists('get_field')) {
					$attend_heading = get_field('who_should_attend_section')['who_should_attend_heading'];
					if ($attend_heading) {
						echo '<h2>' . $attend_heading . '</h2>';
					}

					$who_should_attend_secondary_heading = get_field('who_should_attend_section')['who_should_attend_secondary_heading'];
					if ($who_should_attend_secondary_heading) {
						echo '<h3>' . $who_should_attend_secondary_heading . '</h3>';
					}

					$who_should_attend_text = get_field('who_should_attend_section')['who_should_attend_text'];
					if ($who_should_attend_text) {
						echo '<div>' . $who_should_attend_text . '</div>';
					}
				}
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
											<a class="cta" href="<?php echo $get_involved_url; ?>"><?php echo $get_involved_title; ?></a>
											<?php
					}
				}
            ?>
        </section>

		<section class="section-staytuned">
			<?php
			if (function_exists('get_field')) {
					$stay_tuned_heading = get_field('stay_tuned_section')['stay_tuned_heading'];
					if ($stay_tuned_heading) {
						echo '<h2>' . $stay_tuned_heading . '</h2>';
					}

					$stay_tuned_text = get_field('stay_tuned_section')['stay_tuned_text'];
					if ($stay_tuned_text) {
						echo '<div>' . $stay_tuned_text . '</div>';
					}
				}
            ?>
        </section>
		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
