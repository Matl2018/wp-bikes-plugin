<?php

/*
 * Plugin Name: products - bikes
 * Version:     1.0
 * Author:      Islam Dudaev
 * Author URI:  https://islamdudaev.ru
 */

function create_post_type() {
	register_post_type( 'bike_product',
		array(
			'labels' => array(
				'name' => __( 'Products' ),
				'singular_name' => __( 'Product' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'products'),
			'menu_icon'   => 'dashicons-feedback',
		)
	);
}
add_action( 'init', 'create_post_type' );
