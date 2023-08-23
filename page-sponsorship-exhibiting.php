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
		
	<section class="section-sponsorship">
            <?php
            if (function_exists('get_field')) {
                $sande_heading = get_field('s&e_heading');
				if ($sande_heading) {
					echo '<h2>' . $sande_heading . '</h2>';
                }

				$sponsorship_heading = get_field('sponsorship_heading');
				if ($sponsorship_heading) {
					echo '<h3>' . $sponsorship_heading . '</h3>';
                }

				$sponsorship_content = get_field('sponsorship_text');
				if ($sponsorship_content) {
					echo '<div>' . $sponsorship_content . '</div>';
				}

				$contact_us_cta = get_field('contact_us_cta');
                if ($contact_us_cta) {
                    $contact_us_cta_url = $contact_us_cta['url'];
										$contact_us_cta_title = $contact_us_cta['title'];
										?>
										<a href="<?php echo $contact_us_cta_url; ?>"><?php echo $contact_us_cta_title; ?></a>
										<?php
                }

            }
            ?>
    </section>

	<?php endwhile; // End of the loop. ?>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
