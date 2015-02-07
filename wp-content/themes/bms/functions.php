<?php
/**
 * bms functions and definitions
 *
 * @package bms
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1170; /* pixels */
}

if ( ! function_exists( 'bms_setup' ) ) :

// include( get_template_directory() . '/inc/demo/demo.php' );
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bms_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bms, use a find and replace
	 * to change 'bms' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'bms', get_template_directory() . '/languages' );

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
	add_image_size('large-thumb', 1060, 650, true);
	add_image_size('index_thumb', 780, 250, true);

	// This theme uses wp_nav_menu() in two location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'bms' ),
		'social'	=> __( 'Social Menu', 'bms' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'bms_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // bms_setup
add_action( 'after_setup_theme', 'bms_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function bms_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bms' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	// Intro Widget
	register_sidebar( array(
		'name'          => __( 'Intro Widget', 'bms' ),
		'description'   => __( 'Intro Widget area appears on the home page just under the header.', 'bms' ),
		'id'            => 'intro-blurb',
		'before_widget' => '<h2 id="%1$s" class="section-content %2$s">',
		'after_widget'  => '</h2>',
		'before_title'  => '<h1 class="section-title star"><span>',
		'after_title'   => '<i></i></span></h1>',
	) );

	// Intro Icons Widget
	register_sidebar( array(
		'name'          => __( 'Intro Icons Widget', 'bms' ),
		'description'   => __( 'Footer widgets area appears in the footer of the site.', 'bms' ),
		'id'            => 'intro_icons',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	// Call to Action Widget
	register_sidebar( array(
		'name'          => __( 'Call to Action Widget', 'bms' ),
		'description'   => __( 'Homepage widget for presenting a call to action.', 'bms' ),
		'id'            => 'cta',
		'before_widget' => '<p class="cta-content">',
		'after_widget'  => '</p>',
		'before_title'  => '<h1 class="cta-title">',
		'after_title'   => '</h1>',
	) );

	// Footer Widget
	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'bms' ),
		'description'   => __( 'Footer widgets area appears in the footer of the site.', 'bms' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'bms_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bms_scripts() {
	wp_enqueue_style( 'bms-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bms-content-sidebar', get_template_directory_uri() . '/layouts/content-sidebar.css' );

	wp_enqueue_style( 'bms-google-fonts', 'http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' );
    
    wp_enqueue_style( 'bms-font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );

    // wp_enqueue_style( 'bms-jquery-ui-css', 'http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css' );

    wp_enqueue_style( 'bms-flexslider-style', get_template_directory_uri() . '/css/flexslider.css' );

    wp_enqueue_script( 'bms-jquery-ui-js', 'http://code.jquery.com/ui/1.11.2/jquery-ui.js', true );

    wp_enqueue_script( 'bms-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20150115', true );

    wp_enqueue_script( 'bms-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('bms-superfish'), '20150115', true );

    wp_enqueue_script( 'bms-hide-search', get_template_directory_uri() . '/js/hide-search.js', array('jquery'), '20150115', true );

	wp_enqueue_script( 'bms-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'bms-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'bms-flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '20150122', true );

	wp_enqueue_script( 'bms-flexslider-settings', get_template_directory_uri() . '/js/flexslider-settings.js', array('bms-flexslider'), '20150122', true );

	wp_enqueue_script( 'bms-accordion-settings', get_template_directory_uri() . '/js/accordion-settings.js', array('jquery'), '20150128', true );

	wp_enqueue_script( 'bms-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array('masonry'), '20110116', true );
                

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bms_scripts' );

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

/**
 * Register Custom Post Type: 'Testimonials'
 */
function bms_register_post_type_testimonail() {

	$labels = array(
		'name'               => __( 'Testimonials', 'bms' ),
		'singular_name'      => __( 'Testimonail', 'bms' ),
		'add_new'            => __( 'Add New', 'bms' ),
		'add_new_item'       => __( 'Add New Testimonials', 'bms' ),
		'edit_item'          => __( 'Edit Testimonials', 'bms' ),
		'new_item'           => __( 'New Testimonials', 'bms' ),
		'view_item'          => __( 'View Testimonials', 'bms' ),
		'search_items'       => __( 'Search Testimonials', 'bms' ),
		'not_found'          => __( 'No Testimonials found', 'bms' ),
		'not_found_in_trash' => __( 'No Testimonials found in Trash', 'bms' ),
		'parent_item_colon'  => __( 'Parent Testimonials:', 'bms' ),
		'menu_name'          => __( 'Testimonials', 'bms' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', ),
		'taxonomies'          => array( 'Testimonail-categories' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array( 'slug' => 'Testimonail-item' ),
		'capability_type'     => 'post',
		'menu_position'       => null
	);

	register_post_type( 'testimonials', apply_filters( 'bms_register_post_type_testimonail', $args ) );

} 
add_action('init', 'bms_register_post_type_testimonail');

/**
 * Register Custom Post Type: 'Highlights'
 */
function bms_register_post_type_highlights() {

	$labels = array(
		'name'               => __( 'Highlights', 'bms' ),
		'singular_name'      => __( 'Testimonail', 'bms' ),
		'add_new'            => __( 'Add New', 'bms' ),
		'add_new_item'       => __( 'Add New Highlight', 'bms' ),
		'edit_item'          => __( 'Edit Highlight', 'bms' ),
		'new_item'           => __( 'New Highlight', 'bms' ),
		'view_item'          => __( 'View Highlights', 'bms' ),
		'search_items'       => __( 'Search Highlights', 'bms' ),
		'not_found'          => __( 'No Highlights found', 'bms' ),
		'not_found_in_trash' => __( 'No Highlights found in Trash', 'bms' ),
		'parent_item_colon'  => __( 'Parent Highlight:', 'bms' ),
		'menu_name'          => __( 'Highlights', 'bms' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', ),
		'taxonomies'          => array( 'Highlight-categories' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array( 'slug' => 'Highlights-item' ),
		'capability_type'     => 'post',
		'menu_position'       => null
	);

	register_post_type( 'highlights', apply_filters( 'bms_register_post_type_highlights', $args ) );

} 
add_action( 'init', 'bms_register_post_type_highlights' );

/**
 * Include demo.php for meta-box
 */

add_filter( 'rwmb_meta_boxes', 'bms_register_meta_boxes' );

function bms_register_meta_boxes( $meta_boxes )
{
    $prefix = 'rw_';

    // Testimonials
    $meta_boxes[] = array(
        'id'       => 'testimonialmeta',
        'title'    => 'Testimonial Meta',
        'pages'    => array( 'testimonials' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            array(
                'name'  => 'Author Name',
                'desc'  => 'Name of the person that gave the testimonial',
                'id'    => $prefix . 'author',
                'type'  => 'text',
                'class' => 'custom-class',
            ),
        )
    );
     // Highlights
    $meta_boxes[] = array(
        'id'       => 'highlightmeta',
        'title'    => 'Highlights',
        'pages'    => array( 'highlights' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            array(
                'name'  => 'Highlight',
                'desc'  => 'List of highlights for each section',
                'id'    => $prefix . 'highlight_item',
                'type'  => 'text',
                'class' => 'custom-class',
                'clone' => true,
            ),
        )
    );


    return $meta_boxes;
}

/**
 * disable the wpautop filter
 */
// remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );
