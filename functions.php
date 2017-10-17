<?php
/**
 * theme-jobtest functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme-jobtest
 */

if ( ! function_exists( 'theme_jobtest_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function theme_jobtest_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on theme-jobtest, use a find and replace
		 * to change 'theme-jobtest' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'theme-jobtest', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size('slides', 900,400);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'theme-jobtest' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'theme_jobtest_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'theme_jobtest_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_jobtest_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'theme_jobtest_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_jobtest_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_jobtest_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme-jobtest' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme-jobtest' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_jobtest_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 *
 */
function theme_jobtest_style_bootstrap(){
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array() );

}
add_action( 'wp_enqueue_style', ' heme_jobtest_style_bootstrap' );

function theme_jobtest_styles() {
	wp_enqueue_style( 'light-box', get_template_directory_uri() . '/css/bootstrap-lightbox.min.css', array(), '0.6.1' );

}
add_action( 'wp_enqueue_style', 'theme_jobtest_styles' );



function my_theme_jquery(){
	wp_enqueue_script( 'jquery-min-js', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '3.2.1', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_jquery' );

function my_theme_bootstrap(){
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(),  true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_bootstrap' );
/*
function my_theme_scripts() {
	wp_enqueue_script( 'my-great-script', get_template_directory_uri() . '/js/bootstrap-lightbox.min.js', array( 'bootstrap' ), '0.6.1', true );

}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
*/



function my_theme_global_scripts() {
	wp_enqueue_script( 'global-js', get_template_directory_uri() . '/js/global.js', array(), '',  true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_global_scripts' );

function my_owl_carousel_script(){
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '2.2.1', true );
}
add_action( 'wp_enqueue_scripts', 'my_owl_carousel_script' );


function my_theme_script_funcy(){
	wp_enqueue_script( 'my-great-script', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), '3.1.25', true );

}

add_action( 'wp_enqueue_scripts', 'my_theme_script_funcy' );




///add_action( 'wp_enqueue_styles', 'theme_jobtest_styles' );

function theme_jobtest_scripts() {
	wp_enqueue_style( 'theme-jobtest-style', get_stylesheet_uri() );


	//wp_enqueue_script( 'light-box', get_template_directory_uri() . '/js/bootstrap-lightbox.min.js', array(), '0.6.1',  true );

	//wp_enqueue_script( 'jquery-min-js', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '3.2.1', true );

	//wp_enqueue_script( 'global-js', get_template_directory_uri() . '/js/global.js', array('jquery'), '3.2.1',  true );




	//wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '22.2.0', true );

	wp_enqueue_script( 'theme-jobtest-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'theme-jobtest-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );



	



	//wp_enqueue_script('jquery-min-js');

	///wp_enqueue_script('owl-carousel');


	//wp_enqueue_script('global-js');




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_jobtest_scripts' );



function theme_jobtest_style_funcybox(){
	wp_enqueue_style( 'funcybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', array() );

}
add_action( 'wp_enqueue_style', 'theme_jobtest_style_funcybox' );



function my_owl_carousel_style(){
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '2.2.1' );

}
add_action( 'wp_enqueue_style', 'my_owl_carousel_style' );


function my_owl_carousel_default_style(){
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '2.2.1' );

}
add_action( 'wp_enqueue_style', 'my_owl_carousel_default_style' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function register_additional_menu() {

	register_nav_menu( 'third-menu' ,__( 'Third Navigation Menu' ));
}
add_action( 'init', 'register_additional_menu' );



function res_fromemail($email) { return 'noreply@site.name'; }
function res_fromname($email){ return 'Name'; }
add_filter('wp_mail_from', 'res_fromemail');
add_filter('wp_mail_from_name', 'res_fromname');