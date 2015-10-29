<?php
/**
 * functions and definitions
 *
 * @package mynameistrevor
 */

/**
 * Theme Updater
 */

/**
 * Set the content width based on the theme's design and stylesheet. 
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'mynameistrevor_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mynameistrevor_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mynameistrevor, use a find and replace
	 * to change 'mynameistrevor' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mynameistrevor', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'client-thumb', 250 );
	add_image_size( 'project-thumb', 450, 450, array( 'center', 'center' ) );
	add_image_size( 'team-thumb', 300, 300, array( 'center', 'center' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'mynameistrevor' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mynameistrevor_custom_background_args', array(
		'default-color' => 'f1f1f1', 
		'default-image' => '',
	) ) );
}
endif; // mynameistrevor_setup
add_action( 'after_setup_theme', 'mynameistrevor_setup' );


/*-----------------------------------------------------------------------------------------------------//
	Register Widgets
	
	@link http://codex.wordpress.org/Function_Reference/register_sidebar
-------------------------------------------------------------------------------------------------------*/


function mynameistrevor_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mynameistrevor' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) ); 
	register_sidebar( array(
		'name'          => esc_html__( 'Social Widget Area', 'mynameistrevor' ), 
		'id'            => 'social-widget-area', 
		'description'   => esc_html__( 'Drag the MT - Social Icons widget here.', 'mynameistrevor' ),
		'before_widget' => '',
		'after_widget'  => '', 
		'before_title'  => '<h3>',
		'after_title'   => '</h3>', 
	) );
	
	//Register the sidebar widgets   
	register_widget( 'mynameistrevor_Video_Widget' ); 
	register_widget( 'mynameistrevor_Contact_Info' );
	register_widget( 'mynameistrevor_social' );
	
}
add_action( 'widgets_init', 'mynameistrevor_widgets_init' );


/*-----------------------------------------------------------------------------------------------------//
	Scripts
-------------------------------------------------------------------------------------------------------*/


function mynameistrevor_scripts() {
	//wp_enqueue_style( 'mynameistrevor-style', get_stylesheet_uri() );
	wp_enqueue_style('mynameistrevor-style', get_stylesheet_uri(), false, filemtime(get_stylesheet_directory()));
	$headings_font = esc_html(get_theme_mod('headings_fonts'));
	$body_font = esc_html(get_theme_mod('body_fonts'));

	if( $headings_font ) {
		wp_enqueue_style( 'mynameistrevor-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );
	} else {
		wp_enqueue_style( 'mynameistrevor-open-headings', '//fonts.googleapis.com/css?family=Montserrat:700');
	}
	if( $body_font ) {
		wp_enqueue_style( 'mynameistrevor-body-fonts', '//fonts.googleapis.com/css?family='. $body_font );
	} else {
		wp_enqueue_style( 'mynameistrevor-open-body', '//fonts.googleapis.com/css?family=Montserrat:700');
	}

	if ( get_theme_mod('mynameistrevor_animate') != 1 ) { 

	wp_enqueue_style( 'mynameistrevor-animate', get_template_directory_uri() . '/css/animate.css' ); 
	
	}

	wp_enqueue_style( 'mynameistrevor-menu', get_template_directory_uri() . '/css/menu.css' );
	
	wp_enqueue_style( 'mynameistrevor-font-awesome', get_template_directory_uri() . '/fonts/font-awesome.css' );  
	
	wp_enqueue_style( 'mynameistrevor-column-clear', get_template_directory_uri() . '/css/mt-column-clear.css' ); 

	wp_enqueue_script( 'mynameistrevor-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'mynameistrevor-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	if ( is_page_template( 'template-home.php' ) && get_theme_mod( 'mynameistrevor_home_bg_image' ) ) {  

	wp_enqueue_script( 'mynameistrevor-backstretch', get_template_directory_uri() . '/js/jquery.backstretch.min.js', array('jquery'), false, true );

	wp_enqueue_script( 'mynameistrevor-backstretch-scripts', get_template_directory_uri() . '/js/backstretch.script.js', array(), false, true );
	
	}

	wp_enqueue_script( 'mynameistrevor-menu', get_template_directory_uri() . '/js/jPushMenu.js', array('jquery'), false, true );

	wp_enqueue_script( 'mynameistrevor-scripts', get_template_directory_uri() . '/js/mynameistrevor.scripts.js', array(), false, true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mynameistrevor_scripts' );

/**
 * Load html5shiv
 */
function mynameistrevor_html5shiv() {
    echo '<!--[if lt IE 9]>' . "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/html5shiv.js' ) . '"></script>' . "\n";
    echo '<![endif]-->' . "\n";
}
add_action( 'wp_head', 'mynameistrevor_html5shiv' ); 


/*-----------------------------------------------------------------------------------------------------//
	Includes
-------------------------------------------------------------------------------------------------------*/


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Include additional custom admin panel features. 
 */
require get_template_directory() . '/panel/functions-admin.php';
require get_template_directory() . '/panel/theme-admin-page.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/mynameistrevor-sanitize.php';
require get_template_directory() . '/inc/mynameistrevor-styles.php'; 

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/gfonts.php';  

/**
 * Sidebar widget columns
 */
require get_template_directory() . '/inc/mynameistrevor-sidebar-columns.php'; 

/**
 * register your custom widgets
 */ 
require get_template_directory() . "/widgets/contact-info.php"; 
require get_template_directory() . "/widgets/video-widget.php";
require get_template_directory() . "/widgets/widget-mt-social.php"; 
