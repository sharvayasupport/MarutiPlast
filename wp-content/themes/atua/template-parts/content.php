<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Atua
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class('dt_post_wrap dt-mb-4'); ?>>
	<div class="dt__post-entry">
		<?php
			if ( is_single() ) {
				the_title( '<h5 class="dt_post_title">', '</h5>' );
			} else {
				the_title( '<h5 class="dt_post_title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
			}
		?>
		
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'atua' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'atua' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</div><!-- #post-## -->
