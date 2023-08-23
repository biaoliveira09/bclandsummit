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

	<section class="section-register">
            <?php
            if (function_exists('get_field')) {
                $register_heading = get_field('register_heading');
				if ($register_heading) {
					echo '<h2>' . $register_heading . '</h2>';
                }

				$register_subheading = get_field('register_subheading');
				if ($register_subheading) {
					echo '<h3>' . $register_subheading . '</h3>';
                }

            }
            ?>
    </section>

	<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->

<?php
get_footer();
