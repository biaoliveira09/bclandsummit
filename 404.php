<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BC_Land_Summit
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bclandsummit' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p>Woops! Looks like you've stumbled upon a page that doesn't exist. Please use the navigation above to find what you're looking for.</p>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
