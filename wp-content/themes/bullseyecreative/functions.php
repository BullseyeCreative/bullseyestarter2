<?php
/**
 * Custom WP: By Bullseye Creative functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Custom_WP:_By_Bullseye_Creative
 */

if ( ! function_exists( 'bc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Custom WP: By Bullseye Creative, use a find and replace
		 * to change 'bc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bc', get_template_directory() . '/languages' );

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
		// Uncomment to add default post thumbnail functionality
		add_theme_support( 'post-thumbnails' );

		// Register Custom Navigation Walker
		require_once get_template_directory() . '/util/navwalker.php';

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'bc' ),
			'footer' => __( 'Footer Menu', 'bc' ),
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

		// // Set up the WordPress core custom background feature.
		// add_theme_support( 'custom-background', apply_filters( 'bc_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// ) ) );

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
add_action( 'after_setup_theme', 'bc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bc_content_width', 640 );
}
add_action( 'after_setup_theme', 'bc_content_width', 0 );

/**
 *  Uncomment to register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function bc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Copyright', 'bc' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bc_widgets_init' );
// Uncomment to add the sidebar

/**
 * Enqueue scripts and styles.
 */
function bc_scripts() {

	wp_enqueue_style( 'foundation-icons', 'https://cdn.jsdelivr.net/foundation-icons/3.0/foundation-icons.min.css' );

	wp_enqueue_style( 'bc-style', get_template_directory_uri() . '/dist/css/style.css' );

	wp_enqueue_script( 'modernizr-build-js', get_template_directory_uri() . '/dist/js/modernizr.js', [], '1.0.0', true );

	wp_enqueue_script( 'foundation-js', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js', ['jquery'], '6.4.3', true );

	wp_enqueue_script( 'foundation-init-js', get_template_directory_uri() . '/dist/js/foundation.js', ['jquery'], '1.0.0', true );

	wp_enqueue_script('mixitup-js', get_template_directory_uri() . '/dist/js/mixitup.min.js', ['jquery'], null, true);

	wp_enqueue_script('mixitup-settings-js', get_template_directory_uri() . '/dist/js/mixitup-settings.js', ['jquery'], null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bc_scripts' );

// Include the theme's Customizer controls
$custom = glob(get_template_directory() . "/inc/customizer/*.php");

foreach($custom as $file){
	require $file;
}

/**
 * Register widget areas this theme.
 */
require get_template_directory() . '/inc/widgets.php';

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

/**
 * Uncomment to Load WooCommerce compatibility file.
 */
//if ( class_exists( 'WooCommerce' ) ) {
//	require get_template_directory() . '/inc/woocommerce.php';
//}
