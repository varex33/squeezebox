<?php
/**
 * portfolio functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package squeezebox
 */

if ( ! function_exists( 'squeezebox_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function squeezebox_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on portfolio, use a find and replace
	 * to change 'portfolio' to the name of your theme in all the template files.
	 */
	//load_theme_textdomain( 'squeezebox', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'squeezebox' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		/*'video',
		'quote',
		'link',*/
	) );

	// Set up the WordPress core custom background feature.
	//add_theme_support( 'custom-background', apply_filters( 'portfolio_custom_background_args', array(
		//'default-color' => 'ffffff',
		//'default-image' => '',
	//) ) );
}
endif; // portfolio_setup
add_action( 'after_setup_theme', 'squeezebox_setup' );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function squeezebox_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'squeezebox' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'squeezebox_widgets_init' );


function squeezebox_styles() { 
        wp_enqueue_script('main', get_template_directory_uri() .'/js/main.js',array( 'jquery' ), ' ', true);
        wp_enqueue_script('mobile', get_template_directory_uri() .'/js/jquery.mobile.custom.min.js', array( 'jquery' ), ' ', true);
        //wp_enqueue_script('modernizer', get_template_directory_uri() .'/js/modernizr.js', true, ' ', false);

  // FontAwesome
        wp_enqueue_style('squeezebox_fontawesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
        wp_enqueue_style('squeezebox-style', get_stylesheet_uri()); 
    }
add_action( 'wp_enqueue_scripts', 'squeezebox_styles', 99);

 



