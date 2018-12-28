<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Schouwenburg
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			//the_post_navigation();

			?>
			<nav class="navigation post-navigation" role="navigation">
				<h2 class="screen-reader-text">Post navigation</h2>
				<div class="nav-links">
					<div class="nav-previous"><?php previous_post_link('%link', '< PREVIOUS POST'); ?></div>
					<div class="nav-next"><?php next_post_link('%link', 'NEXT POST >'); ?></div>
				</div>
			</nav>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
