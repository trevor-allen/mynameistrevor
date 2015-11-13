<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
Template Name: Portfolio
 * @package mynameistrevor
 */

get_header(); ?>

<section id="page-content-container" class="blog-archive-container animated fadeIn delay">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="tabs">

			<input type="radio" name="tabs" id="tab1" checked >
			<label for="tab1">
				<i class="fa fa-code"></i><span>WEBSITES</span>
			</label>

	<input type="radio" name="tabs" id="tab2">
		<label for="tab2">
			<i class="fa fa-magic"></i><span>DESIGN</span>
		</label>
        <input type="radio" name="tabs" id="tab3">
                <label for="tab3">
                        <i class="fa fa-github"></i><span>ACTIVITY</span>
                </label>

	<div id="tab-content1" class="tab-content">
		<div id="masonry-container">

		<?php

		// The Query
		$the_query = new WP_Query(array(
			'post_type' => 'portfolio',
			'category_name' => 'Website'
		));

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				get_template_part( 'content', 'portfolio' );
			}
		} else {
		// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		wp_reset_query();
		?>
		</div>
	</div> <!-- #tab-content1 -->

	<div id="tab-content2" class="tab-content">
		<div id="masonry-container">
		<?php

		// The Query
		$the_query = new WP_Query(array(
			'post_type' => 'portfolio',
			'category_name' => 'design'
		));

		// The Loop
		if ( $the_query->have_posts() ) {
		        while ( $the_query->have_posts() ) {
                		$the_query->the_post();
		                get_template_part( 'content', 'portfolio' );
	        }
		} else {
	        // no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		wp_reset_query();
		?>
		</div>
	</div> <!-- #tab-content2 -->
        <div id="tab-content3" class="tab-content">
                <div id="masonry-container">
<?php echo do_shortcode("[wp-rss-aggregator]"); ?>
</div>
</div>
</div> <!-- .tabs -->
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

</section>

<?php get_footer(); ?>
