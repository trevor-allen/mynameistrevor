<?php
/**
 * @package mynameistrevor
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mynameistrevor' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mynameistrevor_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
