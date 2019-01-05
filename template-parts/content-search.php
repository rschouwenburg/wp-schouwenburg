<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Schouwenburg
 */

?>

<?php printf('<a href="%s">', esc_url( get_permalink() )); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php schouwenburg_post_thumbnail(); ?>

	<header class="entry-header">
		<?php	the_subtitle( '<h3 class="entry-subtitle">', '</h3>'); ?>
		<?php the_title( sprintf( '<h2 class="entry-title"><img href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</img></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php
		if ( get_the_post_thumbnail() ) {
			print strip_tags(get_the_excerpt_max_charlength(120), "<b><strong><i>");
		} else {
			print strip_tags(get_the_excerpt(), "<b><strong><i>");
		}
		?>
	</div><!-- .entry-summary -->
</article><!-- #post-<?php the_ID(); ?> -->
</a>
