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
                'name'  => 'Excerpt',
                'desc'  => 'Small excerpt from the testimonial.',
                'id'    => $prefix . 'excerpt',
                'type'  => 'textarea',
                'class' => 'custom-class'
            ),
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
        'id'        => 'high-item',
        'title'     => 'Highlights',
        'pages'     => array( 'highlights' ),
        'context'   => 'normal',
        'priority'  => 'high',

        'fields' => array(
            array(
                'name'  => 'Highlights',
                'desc'  => 'A list of highlight for each section',
                'id'    => $prefix . 'hitem',
                'type'  => 'text',
                'class' => 'custom-class',
                'clone' => true
            ),
        )
    );

    // Bio
    $meta_boxes[] = array(
        'id'        => 'biometa',
        'title'     => 'Biography',
        'pages'     => array( 'bio' ),
        'context'   => 'normal',
        'priority'  => 'high',

        'fields' => array(
            array(
                'name'  => 'Position',
                'id'    => $prefix . 'position',
                'type'  => 'text',
                'class' => 'custom-class'
            ),
            array(
                'name'  => 'Experience',
                'id'    => $prefix . 'experience',
                'type'  => 'text',
                'class' => 'custom-class'
            ),
            array(
                'name'  => 'Qualifications',
                'id'    => $prefix . 'qualify',
                'type'  => 'text',
                'class' => 'custom-class'
            ),

            array(
                'name'  => 'Bio',
                'id'    => $prefix . 'biography',
                'type'  => 'wysiwyg',
                'class' => 'custom-class'
            )
        )
    );

     // Bio
    $meta_boxes[] = array(
        'id'        => 'servicesmeta',
        'title'     => 'Services',
        'pages'     => array( 'services' ),
        'context'   => 'normal',
        'priority'  => 'high',

        'fields' => array(
            array(
                'name'  => 'Position',
                'id'    => $prefix . 'position',
                'type'  => 'text',
                'class' => 'custom-class'
            )
        )
    );

    return $meta_boxes;
}