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
	<section>
		<?php
		 if (function_exists('get_field')) {
                $call_for_speakers_heading = get_field('call_for_speakers_heading');
                if ($call_for_speakers_heading) {
                    echo '<h1>' . $call_for_speakers_heading . '</h1>';
                }

                $call_for_speakers_text = get_field('call_for_speakers_text');
                if ($call_for_speakers_text) {
                    echo '<div>' . $call_for_speakers_text . '</div>';
                }
			}
				?>
	</section>
	<?php endwhile; ?>



	</main><!-- #main -->

<?php
get_footer();
