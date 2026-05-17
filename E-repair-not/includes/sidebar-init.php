<?php
function elegance_widgets_init() {


	// Top Header
	// Location: header
	register_sidebar(array(
		'name'					=> 'Top Header Area',
		'id' 						=> 'top-header-area',
		'description'   => __( 'Located in header area.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));


	// Before Slider Area
	// Location: after Left Navigation Block Area
	register_sidebar(array(
		'name'					=> 'Slider Area',
		'id' 						=> 'slider-area',
		'description'   => __( 'Located after header.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));


	// Before Slider Area
	// Location: after slider
	register_sidebar(array(
		'name'					=> 'Carousel Area',
		'id' 						=> 'Carousel-area',
		'description'   => __( 'Located after After-Slider-area.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));


	// Banner Area
	// Location: after slider
	register_sidebar(array(
		'name'					=> 'Banner Area',
		'id' 						=> 'Banner-area',
		'description'   => __( 'Located after After-Slider-area.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));


	// Sidebar Left Widget
	// Location: the sidebar 
	register_sidebar(array(
		'name'					=> 'Sidebar Left',
		'id' 						=> 'left-sidebar',
		'description'   => __( 'Located at the left side of pages.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	// Sidebar Right Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Sidebar Right',
		'id' 						=> 'right-sidebar',
		'description'   => __( 'Located at the right side of pages.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	// Blog Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Blog Sidebar',
		'id' 						=> 'blog-sidebar',
		'description'   => __( 'Located at the right side of pages.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));


	// Footer Area 1 Widget
	// Location: at the footer
	register_sidebar(array(
		'name'					=> 'Footer Area 1',
		'id' 						=> 'footer-area-1',
		'description'   => __( 'Located at the footer of pages.'),
		'before_widget' => '<div id="%1$s" class="span3">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));



}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );
?>