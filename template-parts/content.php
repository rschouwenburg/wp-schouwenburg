<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Schouwenburg
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_subtitle( '<h2 class="entry-subtitle">', '</h2>');
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_subtitle( '<h2 class="entry-subtitle">', '</h2>');
			the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<div class="entry-tags">
					<?php
					$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'schouwenburg' ) );
					if ( $tags_list ) {
						/* translators: 1: list of tags. */
						printf( '<span class="tags-links">' . esc_html__( '%1$s >', 'schouwenburg' ) . '</span>', $tags_list ); // WPCS: XSS OK.
					} else {
						$categories_list = get_the_category_list( esc_html__( ', ', 'schouwenburg' ) );
						if ( $categories_list ) {
							/* translators: 1: list of categories. */
							printf( '<span class="cat-links">' . esc_html__( '%1$s >', 'schouwenburg' ) . '</span>', $categories_list ); // WPCS: XSS OK.
						}
					}
					?>
				</div>
				<div class="entry-meta-other">
				<?php
				schouwenburg_posted_on();
				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
					echo ' | <span class="comments-link">';
					comments_popup_link(
						sprintf(
							wp_kses(
								/* translators: %s: post title */
								__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'schouwenburg' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						)
					);
					echo '</span>';
				}
				?>
				</div><!-- .entry-meta-other -->
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php schouwenburg_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'schouwenburg' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'schouwenburg' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
