<?php
/**
Template Name: Home Page
 *
 * @package mynameistrevor
 */

get_header('home'); ?>


	<?php if ( get_theme_mod( 'mynameistrevor_home_bg_image' ) ) : ?>

        <div hidden id="home-background"><?php echo esc_url( get_theme_mod( 'mynameistrevor_home_bg_image' )); ?></div>

	<?php endif; ?>


<section id="home-content" class="animated slideInLeft delay-2">
	<div class="content-container animated fadeIn delay-3">
    	<div>

        	<?php if ( get_theme_mod( 'mynameistrevor_home_title' ) ) : ?>
             	<h1><?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_home_title' )); ?></h1>
            <?php endif; ?>
			<?php if ( get_theme_mod( 'mynameistrevor_home_subtitle' ) ) : ?>
				<h4><?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_home_subtitle' )); ?></h4>
			<?php endif; ?>

            <ul class="home-details">
            	<li>
                	<?php if ( get_theme_mod( 'mynameistrevor_home_address_icon' ) ) : ?>
                		<i class="fa <?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_home_address_icon' )); ?>"></i>
                    <?php endif; ?>

                    <?php if ( get_theme_mod( 'mynameistrevor_home_address' ) ) : ?>
                		<?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_home_address' )); ?>
                    <?php endif; ?>
                </li>

                <li>
                	<?php if ( get_theme_mod( 'mynameistrevor_home_email_icon' ) ) : ?>
                		<i class="fa <?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_home_email_icon' )); ?>"></i>
                    <?php endif; ?>

                    <?php if ( get_theme_mod( 'mynameistrevor_home_email' ) ) : ?>
                		<a href="mailto:<?php echo is_email( get_theme_mod( 'mynameistrevor_home_email' )); ?>" target="_blank"><?php echo esc_html( get_theme_mod( 'mynameistrevor_home_email' )); ?></a>
                    <?php endif; ?>
                </li>

                <li>
                	<?php if ( get_theme_mod( 'mynameistrevor_home_phone_icon' ) ) : ?>
                		<i class="fa <?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_home_phone_icon' )); ?>"></i>
                    <?php endif; ?>

                    <?php if ( get_theme_mod( 'mynameistrevor_home_phone' ) ) : ?>
                		<?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_home_phone' )); ?>
                    <?php endif; ?>
                </li>

            </ul>

            <?php

			$mynameistrevor_button_two_url = esc_url( get_page_link( get_theme_mod('mynameistrevor_button_two_url')));
			$mynameistrevor_home_button_two_url_text = esc_url( get_theme_mod ( 'mynameistrevor_home_button_two_url_text' ));

			?>

            <?php if ( get_theme_mod( 'mynameistrevor_home_button_text_one' ) ) : ?>
            	<button class="toggle-menu menu-right push-body"><?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_home_button_text_one' )); ?></button>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'mynameistrevor_button_two_url' ) ) : ?>
            	<a href="<?php echo esc_url( $mynameistrevor_button_two_url ); ?>">
                	<?php if ( get_theme_mod( 'mynameistrevor_home_button_text_two' ) ) : ?>
            			<button class="resume"><?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_home_button_text_two' )); ?></button>
                    <?php endif; ?>
                </a>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'mynameistrevor_home_button_two_url_text' ) ) : ?>
            	<a href="<?php echo esc_url( $mynameistrevor_home_button_two_url_text ); ?>" target="_blank">
                	<?php if ( get_theme_mod( 'mynameistrevor_home_button_text_two' ) ) : ?>
            			<button class="resume"><?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_home_button_text_two' )); ?></button>
                    <?php endif; ?>
                </a>
            <?php endif; ?>

     	</div>
   	</div>
</section>



<!-- Right menu element-->
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
	<div class="bio-image">
    	<?php if ( get_theme_mod( 'mynameistrevor_home_about_bg_image' ) ) : ?>
    		<img src="<?php echo esc_url( get_theme_mod( 'mynameistrevor_home_about_bg_image' )); ?>">
        <?php endif; ?>
    </div>
    <div class="bio-content">

			<?php if ( get_theme_mod( 'mynameistrevor_about_me_title' ) ) : ?>
             	<h3><?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_about_me_title' )); ?></h3>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'mynameistrevor_about_me_text' ) ) : ?>
            	<p><?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_about_me_text' )); ?></p>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'mynameistrevor_about_me_button_url' ) ) : ?>
            	<a href="<?php echo esc_url( get_page_link( get_theme_mod('mynameistrevor_about_me_button_url'))); ?>">
                	<?php if ( get_theme_mod( 'mynameistrevor_about_me_button_text' ) ) : ?>
            			<button class="mynameistrevor-about-button"><?php echo wp_kses_post( get_theme_mod( 'mynameistrevor_about_me_button_text' )); ?></button>
                    <?php endif; ?>
                </a>
            <?php endif; ?>

    </div>
    <div class="under-bio-content"></div>
</nav>

<div class="bio-overlay"></div>

<?php get_footer('home'); ?>
