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
		
	<section class="section-pag">
            <?php
            if (function_exists('get_field')) {
                $pag_heading = get_field('program_advisory_heading');
				if ($pag_heading) {
					echo '<h2>' . $pag_heading . '</h2>';
                }

				$pag_content = get_field('program_advisory_text');
				if ($pag_content) {
					echo '<div>' . $pag_content . '</div>';
				}

				$tofr = get_field('terms_of_reference');
                if ($tofr) {
                    $tofr_url = $tofr['url'];
										$tofr_title = $tofr['title'];
										?>
										<a href="<?php echo $tofr_url; ?>"><?php echo $tofr_title; ?></a>
										<?php
                }

            }
            ?>
    </section>

	<?php endwhile; // End of the loop. ?>


	</main><!-- #main -->

<?php
get_footer();
