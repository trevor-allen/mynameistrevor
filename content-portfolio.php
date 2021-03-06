<?php
/**
 * @package mynameistrevor
 */
?>

<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?> class="masonry-post">
	<header class="entry-header">
		<a href="<?php the_permalink(); ?>">
    		<?php
		if( has_post_thumbnail() ) {
			the_post_thumbnail('project-thumb');
		}
		?>
		</a>
	</header><!-- .entry-header -->

	<div class="entry-content">
    	<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<p><?php esc_html_e( 'Posted on', 'mynameistrevor' ); ?>&nbsp;<?php the_time('F j, Y'); ?>&nbsp;<?php esc_html_e( 'in', 'mynameistrevor' ); ?>&nbsp;<?php the_category(', ') ?></p>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<a href="<?php the_permalink(); ?>">

        		<button>
        			<?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_blog_read_more', esc_html__( 'Read More', 'mynameistrevor' ) ));  ?> 
				</button>

        </a>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
