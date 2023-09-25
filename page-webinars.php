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

		<section class="section-webinars">
		<h2>Webinars</h2>
		<?php
		/*Template Name: Webinar Template*/
		get_header();
		$args = array(
			'post_type' => 'webinar',
			'posts_per_page' => -1
		);
		$webinarQuery = new WP_Query($args);
		if($webinarQuery->have_posts()) : 
			while($webinarQuery->have_posts()) : 
				$webinarQuery->the_post();
		?>
		<article class="webinar">
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<p><?php the_excerpt(); ?></p>
		<p><a href="<?php the_permalink() ?>" class="button">Read More</a></p>
			</article>
		<?php 
			endwhile;
		endif;
		echo '</section>';
		?>

	</main><!-- #main -->

<?php
get_footer();
