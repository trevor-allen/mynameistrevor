<?php 


function mynameistrevor_admin_page_styles() {  
    wp_enqueue_style( 'mynameistrevor-font-awesome-admin', get_template_directory_uri() . '/fonts/font-awesome.css' ); 
	wp_enqueue_style( 'mynameistrevor-style-admin', get_template_directory_uri() . '/panel/css/theme-admin-style.css' ); 
}
add_action( 'admin_enqueue_scripts', 'mynameistrevor_admin_page_styles' );

     
    add_action('admin_menu', 'mynameistrevor_setup_menu');   
     
    function mynameistrevor_setup_menu(){
    	add_theme_page( esc_html__('mynameistrevor Documentation', 'mynameistrevor' ), esc_html__('mynameistrevor Documentation', 'mynameistrevor' ), 'edit_theme_options', 'mynameistrevor-setup', 'mynameistrevor_init' ); 
    }  
     
 	function mynameistrevor_init(){ 
	 	echo '<div class="grid grid-pad"><div class="col-1-1"><h1 style="text-align: center;">'; 
		printf(esc_html__('Thank you for using mynameistrevor!', 'mynameistrevor' )); 
        echo "</h1></div></div>";
			
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 40px; margin-bottom: 30px;" ><div class="col-1-1"><h2>'; 
		printf(esc_html__('Documentation', 'mynameistrevor' )); 
        echo '</h2>';  
		
		echo '<p>';
		printf(esc_html__('Check out our mynameistrevor Documentation to learn how to use mynameistrevor and for tutorials on theme functions. ', 'mynameistrevor' ));  
		echo '</p>'; 
		
		echo '<a href="https://modernthemes.net/documentation/hired-theme-documentation/" target="_blank"><button>';
		printf(esc_html__('Documentation', 'mynameistrevor' ));
		echo '</button></a></div></div>'; 
		
		
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h2>';   
		printf( esc_html__( 'Changelog' , 'mynameistrevor' ) );
        echo "</h2>";
		
		echo '<p style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px; text-align: center;">';  
		printf( esc_html__('1.0.0 - New Theme!', 'mynameistrevor' ));  
		echo '</p></div></div>'; 
		
		
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( esc_html__('Get the Premium Experience.', 'mynameistrevor' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>';
		printf( esc_html__('Plugin Compatibility', 'mynameistrevor' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Use our new free plugins with this theme to add functionality for things like Details Spinner, Animated Skill Bars, Past Employers, Testimonials and Projects.', 'mynameistrevor' ));
		echo '</p></div>';
		
		echo '<div class="col-1-4"><i class="fa fa-home"></i><h4>';
        printf( esc_html__('About Me Page', 'mynameistrevor' ));
		echo '</h4>';
		
        echo '<div class="col-1-4"><i class="fa fa-image"></i><h4>';
        printf( esc_html__('Video Background', 'mynameistrevor' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Make your Home Page a little more modern with a video background. The best looking websites give the best first impressions.', 'mynameistrevor' ));
		echo '</p></div>'; 
		
		echo '<div class="col-1-4"><i class="fa fa-th"></i><h4>';
        printf( esc_html__('Masonry Blog', 'mynameistrevor' ));
		echo '</h4>';
		
		echo '</div></div>'; 
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-4"><i class="fa fa-th-list"></i><h4>';
		printf( esc_html__( 'More Sidebars', 'mynameistrevor' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Sometimes you need different sidebars for different pages. We got you covered, offering up to 5 different sidebars.', 'mynameistrevor' ));
		echo '</p></div>';
		
       	echo '<div class="col-1-4"><i class="fa fa-font"></i><h4>More Google Fonts</h4><p>';
		printf( esc_html__( 'Access an additional 65 Google fonts with mynameistrevor right in the WordPress customizer.', 'mynameistrevor' ));
		echo '</p></div>'; 
		
       	echo '<div class="col-1-4"><i class="fa fa-file-image-o"></i><h4>';
		printf( esc_html__( 'PSD Files', 'mynameistrevor' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Premium versions include PSD files. Preview your own content or showcase a customized version for your clients.', 'mynameistrevor' ));
		echo '</p></div>';
            
        echo '<div class="col-1-4"><i class="fa fa-support"></i><h4>';
		printf( esc_html__( 'Free Support', 'mynameistrevor' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Call on us to help you out. Premium themes come with free support that goes directly to our support staff.', 'mynameistrevor' ));
		echo '</p></div></div>';
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="https://modernthemes.net/wordpress-themes/hired/hired-premium/" target="_blank"><button class="pro">'; 
		printf( esc_html__( 'View Premium Version', 'mynameistrevor' )); 
		echo '</button></a></div></div>'; 
		 
		 
		echo '<div class="grid grid-pad"><div class="col-1-1"><h2 style="text-align: center;">';
		printf( esc_html__( 'Changelog' , 'mynameistrevor' ) );
        echo "</h2>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.13 - minor updates to links and a readme.txt file added.', 'mynameistrevor' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.0 - New Theme!', 'mynameistrevor' ));
		echo '</p></div></div>';
		
		
		
    }
?>
