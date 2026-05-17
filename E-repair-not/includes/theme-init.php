<?php

add_action( 'after_setup_theme', 'my_setup' );

if ( ! function_exists( 'my_setup' ) ):

function my_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 700, 405, true ); // Normal post thumbnails
		add_image_size( 'slider-post-thumbnail', 1626, 569, true ); // Slider Thumbnail
	}

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// custom menu support
	add_theme_support( 'menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  	register_nav_menus(
	  		array(
	  		  'header_menu' => 'Header Menu',
	  		  'footer_menu' => 'Footer Menu'
	  		)
	  	);
	}
}
endif;

/****************/


/* Testimonial */
function my_post_type_testi() {
	register_post_type( 'testi',
                array( 
				'label' => __('Testimonial'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'menu_position' => 5,
				'rewrite' => array(
					/*'slug' => 'testimonial-view',*/
					'with_front' => true,
				),
				'supports' => array(
						'title',
						'custom-fields',
						'thumbnail',
						'editor')
					) 
				);
}

add_action('init', 'my_post_type_testi');





/* Portfolio */
function my_post_type_portfolio() {
	register_post_type( 'portfolio',
                array( 
				'label' => __('Portfolio'), 
				'singular_label' => __('Porfolio Item', 'e_repair'),
				'_builtin' => false,
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'hierarchical' => true,
				'capability_type' => 'page',
				'menu_icon' => get_template_directory_uri() . '/includes/images/icon_portfolio.png',
				'rewrite' => array(
					//'slug' => 'portfolio-view',
					'with_front' => true,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments')
					) 
				);
	register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => 'Portfolio Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
}

add_action('init', 'my_post_type_portfolio');



// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Offers', 'Post Type General Name', 'e_repair' ),
		'singular_name'       => _x( 'offer', 'Post Type Singular Name', 'e_repair' ),
		'menu_name'           => __( 'Offers Group', 'e_repair' ),
		'parent_item_colon'   => __( 'Parent Item:', 'e_repair' ),
		'all_items'           => __( 'All Items', 'e_repair' ),
		'view_item'           => __( 'View Item', 'e_repair' ),
		'add_new_item'        => __( 'Add New Item', 'e_repair' ),
		'add_new'             => __( 'Add New', 'e_repair' ),
		'edit_item'           => __( 'Edit Item', 'e_repair' ),
		'update_item'         => __( 'Update Item', 'e_repair' ),
		'search_items'        => __( 'Search Item', 'e_repair' ),
		'not_found'           => __( 'Not found', 'e_repair' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'e_repair' ),
	);
	$args = array(
		'label'               => __( 'Offer', 'e_repair' ),
		'description'         => __( 'Offer group', 'e_repair' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'menu_icon' => get_template_directory_uri() . '/includes/images/icon_offer.png',
		'rewrite' => array(
					'slug' => 'offers',
					'with_front' => FALSE,
				)
	);
	register_post_type( 'offers', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );



// Register Custom Post Type
function custom_post_type_news() {

	$labels = array(
		'name'                => _x( 'events', 'Post Type General Name', 'e_repair' ),
		'singular_name'       => _x( 'events', 'Post Type Singular Name', 'e_repair' ),
		'menu_name'           => __( 'Events', 'e_repair' ),
		'parent_item_colon'   => __( 'Parent Item:', 'e_repair' ),
		'all_items'           => __( 'All Items', 'e_repair' ),
		'view_item'           => __( 'View Item', 'e_repair' ),
		'add_new_item'        => __( 'Add New Item', 'e_repair' ),
		'add_new'             => __( 'Add New', 'e_repair' ),
		'edit_item'           => __( 'Edit Item', 'e_repair' ),
		'update_item'         => __( 'Update Item', 'e_repair' ),
		'search_items'        => __( 'Search Item', 'e_repair' ),
		'not_found'           => __( 'Not found', 'e_repair' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'e_repair' ),
	);
	$args = array(
		'label'               => __( 'events', 'e_repair' ),
		'description'         => __( 'events of company', 'e_repair' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'rewrite' => array(
					'slug' => 'events',
					'with_front' => FALSE,
				)
	);
	register_post_type( 'events', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type_news', 0 );




?>