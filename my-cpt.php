<?php

/**
 * Plugin Name: My CPT
 * Author: Cédric
 * Author URI: https://oxyprops.com
 * Description: My awesome custom post type
 * Version: 1.0.0
 */

 add_action( 'init', 'my_custom_post_type' );

function my_custom_post_type() {

	register_post_type(
		'testimonial',
		array(
			'show_in_rest'    => true,
			'capability_type' => 'post',
			'supports'        => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
			'rewrite'         => array(
				'slug' => 'testimonials',
			),
			'has_archive'     => true,
			'public'          => true,
			'labels'          => array(
				'name'          => 'Testimonials',
				'add_new_item'  => 'Add New Testimonial',
				'edit_item'     => 'Edit Testimonial',
				'all_items'     => 'All Testimonials',
				'singular_name' => 'Testimonial',
			),
			'menu_icon'       => 'dashicons-awards',
		)
	);
}
