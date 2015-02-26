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
	// Contact Sidebar
	register_sidebar( array(
		'name'          => __( 'Contact Sidebar', 'bms' ),
		'description'   => __( 'Sidebar widget area appears on the contact page of the site.', 'bms' ),
		'id'            => 'sidebar-3',
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

	// Icon Widget
	register_sidebar( array(
		'name'          => __( 'Icon Widget', 'bms' ),
		'description'   => __( 'Icon Widget area appears on the home page just under the Intro Section.', 'bms' ),
		'id'            => 'intro-icons',
		'before_widget' => '<div id="%1$s" class="intro-icon %2$s span-four">',
		'after_widget'  => '</div>',
		// 'before_title'  => '<h1 class="section-title star"><span>',
		// 'after_title'   => '<i></i></span></h1>',
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

    wp_enqueue_style( 'bms-flexslider-style', get_template_directory_uri() . '/css/flexslider.css' );

    wp_enqueue_script( 'bms-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20150115', true );

    wp_enqueue_script( 'bms-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('bms-superfish'), '20150115', true );

    wp_enqueue_script( 'bms-hide-search', get_template_directory_uri() . '/js/hide-search.js', array('jquery'), '20150115', true );

	wp_enqueue_script( 'bms-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'bms-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'bms-flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '20150122', true );

	wp_enqueue_script( 'bms-flexslider-settings', get_template_directory_uri() . '/js/flexslider-settings.js', array('bms-flexslider'), '20150122', true );

	// wp_enqueue_script( 'bms-accordion-settings', get_template_directory_uri() . '/js/accordion-settings.js', array('jquery'), '20150128', true );

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
 * Custom post types
 */
include get_template_directory() . '/inc/custom-post-types.php';

/**
 * Custom meta boxes
 */
 include get_template_directory() . '/inc/meta-box.php';

/**
 * disable the wpautop filter
 */
// remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );

/**
* Customizer - Logo Upload
*/

/**
* Example Widget Class
*/

class bms_example_widget extends WP_Widget {
	// all of our widget code will go here
	function bms_example_widget () {
		parent::WP_Widget(false, $name = 'Contact Info');
	}

	function widget( $args, $instance ) {
		extract ( $args );

		// these are our widget options
		$title = apply_filters( 'widget_title', $instance[ 'title' ] );
		$text = $instance[ 'text' ];
		$checkbox = $instance[ 'checkbox' ];
		$textarea = $instance[ 'textarea' ];
		$select = $instance[ 'select' ];

		echo $before_widget;

		// if the title is set
		if ( $title ) {
		echo $before_title . $title . $after_title;
		}
		// if the text field is set
		if ( $text ) {
		echo '<div class="widget-text">' . $text . '</div>';
		}
		// if the checkbox is checked
		if ( $checkbox == true ) {
		echo 'This message is displayed if our checkbox is ckecked.';
		}
		// if text is entered in the textarea
		if ( $textarea ) {
		echo '<div class="widget-textarea">' . $textarea . '</div>';
		}
		// output text depended on wich option is picked
		if ( $select == 'one' ) {
		echo 'Option One is Selected';
		} else if ( $select == 'two' ) {
		echo 'Option Two is Selected';
		} else {
		echo 'Option Three is Selected';
		}

		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance[ 'title' ]	= strip_tags($new_instance[ 'title' ] );
		$instance[ 'text' ]		= strip_tags($new_isntance[ 'text' ] );
		$instance[ 'checkbox' ]	= strip_tags($new_instance[ 'checkbox' ] );
		$instance[ 'textarea' ]	= strip_tags($new_instance[ 'textarea' ] );
		$instance[ 'select' ]	= strip_tags($new_instance[ 'select' ] );

		return $instance;
	}

	function form( $instance ) {
		$title    = esc_attr($instance[ 'title' ] );
		$text     = esc_attr($instance[ 'text' ] );
		$checkbox = esc_attr($instance[ 'checkbox' ] );
		$textarea = esc_attr($instance[ 'textarea' ] );
		$select   = esc_attr($instance[ 'select' ] );

		?>

		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('text_field'); ?>"><?php _e('This is a single line text field:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('text_field'); ?>" name="<?php echo $this->get_field_name('text_field'); ?>" type="text" value="<?php echo $text_field; ?>" />
		</p>
		<p>
	        <input id="<?php echo $this->get_field_id('checkbox'); ?>" name="<?php echo $this->get_field_name('checkbox'); ?>" type="checkbox" value="1" <?php checked( '1', $checkbox ); ?>/>
	        <label for="<?php echo $this->get_field_id('checkbox'); ?>"><?php _e('This is a checkbox'); ?></label>
	    </p>
	    <p>
	        <label for="<?php echo $this->get_field_id('textarea'); ?>"><?php _e('This is a textarea:'); ?></label>
	        <textarea class="widefat" id="<?php echo $this->get_field_id('textarea'); ?>" name="<?php echo $this->get_field_name('textarea'); ?>"><?php echo $textarea; ?></textarea>
	    </p>
	    <p>
	        <label for="<?php echo $this->get_field_id('select'); ?>"><?php _e('This is a select menu'); ?></label>
	        <select name="<?php echo $this->get_field_name('select'); ?>" id="<?php echo $this->get_field_id('select'); ?>" class="widefat">

	            <?php
	            $options = array('one', 'two', 'three');

	            foreach ($options as $option) {
	                echo '<option value="' . $option . '" id="' . $option . '"', $select == $option ? ' selected="selected"' : '', '>', $option, '</option>';
	            }
	            ?>

	        </select>
	    </p> 

    <?php

	}

}
add_action('widgets_init', create_function('', 'return register_widget("bms_example_widget");'));




















