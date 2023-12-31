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



	<section class="section-about">
            <?php
            if (function_exists('get_field')) {
                $about_heading = get_field('about_section')['about_section_title'];
				if ($about_heading) {
					echo '<h2>' . $about_heading . '</h2>';
                }
				echo '	<div class="about-container">
				<div class="decorative-vertical">
					<span class="green"></span>
					<span class="purple"></span>
					<span class="violet"></span>
					<span class="red"></span>
					<span class="orange"></span>
					<span class="yellow"></span>
				</div>';

				$about_content = get_field('about_section')['about_section_text'];
				if ($about_content) {
					echo '<div>' . $about_content . '</div></div>';
				}

				$history_link = get_field('about_section')['our_history_button'];
				if ($history_link) {
					$history_link_url = $history_link['url'];
					$history_link_title = $history_link['title'];
					?>
					<p class="cta-wrap"><a class="button" href="<?php echo $history_link_url; ?>"><?php echo $history_link_title; ?></a></p>
					<?php
				}}
            ?>
    </section>
		
		<section class="section-mission">
            <?php
            if (function_exists('get_field')) {
                $mission_heading = get_field('mission_section')['mission_title'];
				if ($mission_heading) {
					echo '<h2>' . $mission_heading . '</h2>';
                }

				$mission_content = get_field('mission_section')['mission_text'];
				if ($mission_content) {
					echo '<div>' . $mission_content . '</div>';
				}

            }
            ?>
        </section>
		<div class="decorative-line">
		<span class="green"></span>
		<span class="purple"></span>
		<span class="violet"></span>
		<span class="red"></span>
		<span class="orange"></span>
		<span class="yellow"></span>
	</div>
		<section class="section-board">
            <?php
            if (function_exists('get_field')) {
                $board_heading = get_field('board_of_directors_section')['board_of_directors'];
				if ($board_heading) {
					echo '<h2>' . $board_heading . '</h2>';
                }

				$board_content = get_field('board_of_directors_section')['board_of_governors_text'];
				if ($board_content) {
					echo '<div>' . $board_content . '</div>';
				}

				$board_of_directors_section = get_field('board_of_directors_section'); 
				echo '<div class="board-container">';
				for ($i = 1; $i <= count($board_of_directors_section); $i++) {
					$director_key = 'director_' . $i;
					$director = $board_of_directors_section[$director_key];
					$director_title = $director['director_title'];
					$director_name = $director['director_name'];
					 $director_picture = $director['director_picture'];

					if ($director) {
						echo '<div class="director-container">';
				
					if ($director_picture) {
						echo '<img src="' . $director_picture['url'] . '" alt="' . $director_name . '" />';
					}
					echo '<p>' . $director_name . ', <br /><span class="dir-title">' . $director_title . '</span></p>';
				
					echo '</div>';
					}
				}
				echo '</div>';

            }
            ?>
        </section>
		<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->

<?php
get_footer();
