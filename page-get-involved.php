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
    
    <section class="section-involved-page">
		<h2>Get Involved</h2>
        <article class="pawg-involved">
            <?php
            if (function_exists('get_field')) {
                $program_advisory_heading = get_field('program_advisory_heading');
                if ($program_advisory_heading) {
                    echo '<h3>' . $program_advisory_heading . '</h3>';
                }

                $program_advisory_text = get_field('program_advisory_text');
                if ($program_advisory_text) {
                    echo '<p>' . $program_advisory_text . '</p>';
                }

                $pawg_link = get_field('pawg_link');
                if ($pawg_link) {
                    ?>
                   <a class="button" href="<?php echo $pawg_link; ?>">Learn More</a>
                    <?php
                }
            }
            ?>
        </article>
		<article class="cs-involved">
            <?php
            if (function_exists('get_field')) {
                $call_for_speakers_heading = get_field('call_for_speakers_heading');
                if ($call_for_speakers_heading) {
                    echo '<h3>' . $call_for_speakers_heading . '</h3>';
                }

                $call_for_speakers_text = get_field('call_for_speakers_text');
                if ($call_for_speakers_text) {
                    echo '<p>' . $call_for_speakers_text . '</p>';
                }

                $cs_link = get_field('cs_link');
                if ($cs_link) {
                    ?>
                   <a class="button" href="<?php echo $cs_link; ?>">Learn More</a>
                    <?php
                }
            }
            ?>
        </article>
        <article class="cv-involved">
            <?php
            if (function_exists('get_field')) {
                $call_for_volunteers_heading = get_field('call_for_volunteers_heading');
                if ($call_for_volunteers_heading) {
                    echo '<h3>' . $call_for_volunteers_heading . '</h3>';
                }

                $call_for_volunteers_text = get_field('call_for_volunteers_text');
                if ($call_for_volunteers_text) {
                    echo '<p>' . $call_for_volunteers_text . '</p>';
                }

                $cv_link = get_field('cv_link');
                if ($cv_link) {
                    ?>
                   <a class="button" href="<?php echo $cv_link; ?>">Learn More</a>
                    <?php
                }
            }
            ?>
        </article>
		<article class="se-involved">
            <?php
            if (function_exists('get_field')) {
                $sponsorships_exhibitions_heading = get_field('sponsorships_exhibitions_heading');
                if ($sponsorships_exhibitions_heading) {
                    echo '<h3>' . $sponsorships_exhibitions_heading . '</h3>';
                }

                $sponsorships_and_exhibitions_text = get_field('sponsorships_and_exhibitions_text');
                if ($sponsorships_and_exhibitions_text) {
                    echo '<p>' . $sponsorships_and_exhibitions_text . '</p>';
                }

                $se_link = get_field('se_link');
                if ($se_link) {
                    ?>
                   <a class="button" href="<?php echo $se_link; ?>">Learn More</a>
                    <?php
                }
            }
            ?>
        </article>
    </section>

<?php endwhile; ?>

</main><!-- #main -->

<?php
get_footer();

