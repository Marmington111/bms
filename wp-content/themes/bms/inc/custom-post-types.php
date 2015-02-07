<?php
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
		'singular_name'      => __( 'Highlight', 'bms' ),
		'add_new'            => __( 'Add New', 'bms' ),
		'add_new_item'       => __( 'Add New ', 'bms' ),
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

	register_post_type( 'highlights', apply_filters( 'bms_register_post_type_highlights', $args ) );

} 
add_action('init', 'bms_register_post_type_highlights');