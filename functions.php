<?php
/**
 * knoxweb functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package knoxweb
 */

if ( ! function_exists( 'knoxweb_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function knoxweb_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on knoxweb, use a find and replace
	 * to change 'knoxweb' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'knoxweb', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'knoxweb' ),
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
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'knoxweb_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // knoxweb_setup
add_action( 'after_setup_theme', 'knoxweb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function knoxweb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'knoxweb_content_width', 640 );
}
add_action( 'after_setup_theme', 'knoxweb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function knoxweb_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'knoxweb' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'knoxweb' ),
		'id'            => 'footer',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'knoxweb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function knoxweb_scripts() {
	wp_enqueue_style( 'knoxweb-style', get_stylesheet_uri() );

// 	// Fix for CSS minify & Theme Detection
// if ( is_user_logged_in() ) {
//     wp_register_style(
//         'my-style',
//         get_bloginfo( 'stylesheet_directory' ) . '/sass/site.css',
//         false,
//         0.1
//     );
//     wp_enqueue_style( 'my-style' );}

	// wp_enqueue_script( 'jquery' );

	// wp_enqueue_script( 'knoxweb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'knoxweb-js', get_template_directory_uri() . '/main.js#asyncload', array(), '20150926', true );

	// wp_enqueue_script( 'knoxweb-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'knoxweb_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// /**
//  * Add font awesome
// */
// add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
// function enqueue_font_awesome() {

// 	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
// }

// disable emoji's
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// Async loads
function async_scripts($url)
{
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async='async";
    }
add_filter( 'clean_url', 'async_scripts', 11, 1 );

// Contact Form 7
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );


// Custom Post Type
add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => "Portfolio",
		"singular_name" => "Portfolio",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "portfolio", "with_front" => true ),
		"query_var" => true,

	);
	register_post_type( "portfolio", $args );

// End of cptui_register_my_cpts()
}
// Custom Fields
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_portfolio',
		'title' => 'Portfolio',
		'fields' => array (
			array (
				'key' => 'field_5625322e96fd0',
				'label' => 'Image',
				'name' => 'image',
				'type' => 'image',
				'instructions' => 'Upload the image for the portfolio',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_5625327096fd1',
				'label' => 'Description',
				'name' => 'description',
				'type' => 'textarea',
				'instructions' => 'Enter in a description of the image',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5625329c96fd2',
				'label' => 'Client',
				'name' => 'client',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'portfolio',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}
