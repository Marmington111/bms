<?php
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
                'class' => 'custom-class'
            ),
            array(
                'name'  => 'Occupation',
                'desc'  => 'Job title of the testimonials author',
                'id'    => $prefix . 'job',
                'type'  => 'text',
                'class' => 'custom-class'
            )
        )
    );

    // Highlights
    $meta_boxes[] = array(
        'id'        => 'testimonialmeta',
        'title'     => 'Highlight Items',
        'pages'     => array( 'highlights' ),
        'context'   => 'normal',
        'priority'  => 'high',

        'fields' => array(
            // IMAGE ADVANCED (WP 3.5+)
            array(
                'name' => 'Image Upload',
                'id'   => $prefix . 'highimg',
                'type' => 'image'
            ),
            array(
                'name'  => 'Highlight Item',
                'desc'  => 'Name of the person that gave the testimonial',
                'id'    => $prefix . 'hitem',
                'type'  => 'text',
                'class' => 'custom-class',
                'clone' => true
            )
        )
    );



    return $meta_boxes;
}