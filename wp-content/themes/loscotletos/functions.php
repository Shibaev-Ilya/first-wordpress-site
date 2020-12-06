<?php
/**
 * loscotletos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package loscotletos
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'loscotletos_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function loscotletos_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on loscotletos, use a find and replace
		 * to change 'loscotletos' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'loscotletos', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'header-categories-menu' => esc_html__( 'Header links', 'loscotletos' ),
				'footer-social-networks-menu' => esc_html__( 'Footer social networks', 'loscotletos' ),
				'footer-useful-links-menu' => esc_html__( 'Footer useful links', 'loscotletos' ),
				'lang-menu-header' => esc_html__( 'Header lang menu', 'loscotletos' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'loscotletos_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'loscotletos_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function loscotletos_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'loscotletos_content_width', 640 );
}
add_action( 'after_setup_theme', 'loscotletos_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function loscotletos_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'loscotletos' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'loscotletos' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'loscotletos_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function loscotletos_scripts() {
	wp_enqueue_style( 'loscotletos-style', get_stylesheet_uri(), array(), _S_VERSION );
//	подключаю мой css
	wp_enqueue_style( 'loscotletos-my-style',get_template_directory_uri() . '/css/style.css');

	wp_style_add_data( 'loscotletos-style', 'rtl', 'replace' );
//	подключаю мой js
    wp_enqueue_script( 'jquery'); // подключаем jquery

	wp_enqueue_script( 'loscotletos-js', get_template_directory_uri() . '/js/bundle.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'loscotletos-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'loscotletos_scripts' );

function ale_add_scripts($hook) {
    if( $hook == 'page.php' || $hook == 'new-page.php' || $hook == 'new-post.php' || $hook == 'post.php') {
        wp_enqueue_script('aletheme_metaboxes', get_template_directory_uri() . '/js/metaboxes.js', array('jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox'));
    }
}
add_action( 'admin_enqueue_scripts', 'ale_add_scripts', 10 );

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

/**
 * Мои подключения
 */

/**
 * Register Post Type.
 */
require get_template_directory() . '/inc/post-types.php';

/**
 * Framework Redux options file.
 */
require get_template_directory() . '/inc/redux-config.php';

/**
 * Breadcrumbs function (хлебные крошки)
 */
require get_template_directory() . '/inc/breadcrumbs.php';

/**
 * Metaboxes
 */
require get_template_directory() . '/inc/metaboxes.php';
require get_template_directory() . '/inc/metaboxes-my.php';
