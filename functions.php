<?php
if ( ! function_exists( 'cruv_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function cruv_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on cruv, use a find and replace
	 * to change 'cruv' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cruv', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded  tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Main Menu', 'cruv' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'gallery', 'audio'
	) );

}
endif; // cruv_setup
add_action( 'after_setup_theme', 'cruv_setup' );


// cruv css and js configuration
function add_theme_scripts() {

    // CSS Configuration
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.2.0', 'all' );

    wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css', array(), '2.0.7', 'all' );

    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '8.4.5', 'all' );

    wp_enqueue_style( 'fontawesome-pro', get_template_directory_uri() . '/assets/css/fontawesome-pro.css', array(), '6.0.0', 'all' );

    wp_enqueue_style( 'odometer', get_template_directory_uri() . '/assets/css/odometer.min.css', array(), '0.4.8', 'all' );

    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '0.4.8', 'all' );

    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // JS Configuration
	wp_enqueue_script( 'backToTop', get_template_directory_uri() . '/assets/js/backToTop.js', array( 'jquery' ), '1.0.0', true );

    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.2.0', true );

    wp_enqueue_script( 'gsap-min', get_template_directory_uri() . '/assets/js/gsap.min.js', array( 'jquery' ), '3.11.4', true );

    wp_enqueue_script( 'image-reveal-hover', get_template_directory_uri() . '/assets/js/image-reveal-hover.js', array( 'jquery' ), '1.0.0', true );

    wp_enqueue_script( 'jquery-meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array( 'jquery' ), '1.0.0', true );

    wp_enqueue_script( 'magiccursor', get_template_directory_uri() . '/assets/js/magiccursor.js', array( 'jquery' ), '1.0.0', true );

    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array( 'jquery' ), '1.1.0', true );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );

    wp_enqueue_script( 'odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array( 'jquery' ), '0.4.8', true );

    wp_enqueue_script( 'ScrollSmoother', get_template_directory_uri() . '/assets/js/ScrollSmoother.min.js', array( 'jquery' ), '3.11.4', true );

    wp_enqueue_script( 'ScrollTrigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array( 'jquery' ), '3.11.4', true );

    wp_enqueue_script( 'SplitText', get_template_directory_uri() . '/assets/js/SplitText.min.js', array( 'jquery' ), '3.11.2', true );

    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array( 'jquery' ), '8.4.5', true );

    wp_enqueue_script( 'TextPlugin', get_template_directory_uri() . '/assets/js/TextPlugin.js', array( 'jquery' ), '1.0.0', true );

    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array( 'jquery' ), '4.0.1', true );

    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), '1.3.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );