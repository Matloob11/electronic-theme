<?php
/*	Register and load javascript
/*-----------------------------------------------------------------------------------*/
function my_script() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.7.2.min.js', false, '1.7.2');
		wp_enqueue_script('jquery');
	
		wp_enqueue_script('modernizr', get_bloginfo('template_url').'/js/modernizr.js', array('jquery'), '2.0.6');
		wp_enqueue_script('superfish', get_bloginfo('template_url').'/js/superfish.js', array('jquery'), '1.4.8');
		wp_enqueue_script('easing', get_bloginfo('template_url').'/js/jquery.easing.1.3.js', array('jquery'), '1.3');
		wp_enqueue_script('prettyPhoto', get_bloginfo('template_url').'/js/jquery.prettyPhoto.js', array('jquery'), '3.1.3');
		wp_enqueue_script('tools', get_bloginfo('template_url').'/js/jquery.tools.min.js', array('jquery'), '1.2.8');
		wp_enqueue_script('loader', get_bloginfo('template_url').'/js/jquery.loader.js', array('jquery'), '1.0');
		//wp_enqueue_script('elastislide', get_bloginfo('template_url').'/js/jquery.elastislide.js', array('jquery'), '1.0');
		wp_enqueue_script('swfobject', get_bloginfo('url').'/wp-includes/js/swfobject.js', array('jquery'), '2.2');
		wp_enqueue_script('cycleAll', get_bloginfo('template_url').'/js/jquery.cycle.all.js', array('jquery'), '2.99');
		wp_enqueue_script('twitter', get_bloginfo('template_url').'/js/jquery.twitter.js', array('jquery'), '1.0');
		wp_enqueue_script('flickr', get_bloginfo('template_url').'/js/jquery.flickrush.js', array('jquery'), '1.0');
		wp_enqueue_script('si_files', get_bloginfo('template_url').'/js/si.files.js', array('jquery'), '1.0');
		wp_enqueue_script('audiojs', get_bloginfo('template_url').'/js/audiojs/audio.js', array('jquery'), '1.0');

		wp_enqueue_script('flexie', get_bloginfo('template_url').'/js/flexie.js', array('jquery'), '1.0.3');

     	wp_enqueue_script('caroufredsel', get_bloginfo('template_url').'/js/jquery.carouFredSel-6.2.1-packed.js', array('jquery'), '6.2.1', true);
     	wp_enqueue_script('touchSwipe', get_bloginfo('template_url').'/js/jquery.touchSwipe.min.js', array('jquery'), '6.2.1', true);
     	wp_enqueue_script('jtransit', get_bloginfo('template_url').'/js/jquery.transit.min.js', array('jquery'), '6.2.1', true);
     	wp_enqueue_script('jmousewheel', get_bloginfo('template_url').'/js/jquery.mousewheel.min.js', array('jquery'), '6.2.1', true);
     	wp_enqueue_script('bootstrap', get_bloginfo('template_url').'/js/bootstrap.js', array('jquery'), '2.3', true);
     	wp_enqueue_script('isotope', get_bloginfo('template_url').'/js/jquery.isotope.min.js', array('jquery'), '2.0.0', true);

     	wp_enqueue_script('spritely', get_bloginfo('template_url').'/js/jquery.spritely.js', array('jquery'), '0.6.8', true);

     	wp_enqueue_script('custom', get_bloginfo('template_url').'/js/custom.js', array('jquery'), '1.0');
	}
}
add_action('init', 'my_script');


/*	Register and load admin javascript
/*-----------------------------------------------------------------------------------*/

function tz_admin_js($hook) {
	if ($hook == 'post.php' || $hook == 'post-new.php') {
		wp_register_script('tz-admin', get_template_directory_uri() . '/js/jquery.custom.admin.js', 'jquery');
		wp_enqueue_script('tz-admin');
	}
}
add_action('admin_enqueue_scripts','tz_admin_js',10,1);
?>