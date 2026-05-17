<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

if(!function_exists('optionsframework_option_name')) {
	function optionsframework_option_name() {
		// This gets the theme name from the stylesheet (lowercase and without spaces)
		$themename = 'e_repair';
		
		$optionsframework_settings = get_option('optionsframework');
		$optionsframework_settings['id'] = $themename;
		update_option('optionsframework', $optionsframework_settings);
		
	}
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

 
if(!function_exists('optionsframework_options')) {

	function optionsframework_options() {
	
		// Logo type
		$logo_type = array(
			"image_logo" => __("Image Logo", 'options_framework_theme'),
			"text_logo" => __("Text Logo", 'options_framework_theme')
		);
		
		// Search box in the header
		$g_search_box = array(
			"no" => "No",
			"yes" => "Yes"
		);
		
		// Remove lightboxes and/or rollovers from galleries
		$g_gallery_lightbox = array(
			"yes" => "Yes",
			"no" => "No"
		);
		
		// Background Defaults
		$background_defaults = array(
			'color' => '', 
			'image' => '', 
			'repeat' => 'repeat',
			'position' => 'top center',
			'attachment'=>'scroll'
		);
		
		// Superfish fade-in animation
		$sf_f_animation_array = array(
			"show" => "Enable fade-in animation",
			"false" => "Disable fade-in animation"
		);
		
		// Superfish slide-down animation
		$sf_sl_animation_array = array(
			"show" => "Enable slide-down animation",
			"false" => "Disable slide-down animation"
		);
		
		// Superfish animation speed
		$sf_speed_array = array(
			"slow" => "Slow","normal" => "Normal",
			"fast" => "Fast"
		);
		
		// Superfish arrows markup
		$sf_arrows_array = array(
			"true" => "Yes",
			"false" => "No"
		);
		
		// Fonts
		$typography_mixed_fonts = array_merge( options_typography_get_os_fonts() , options_typography_get_google_fonts() );
		asort($typography_mixed_fonts);
		
		
		// Slider effects
	$sl_effect_array = array('random' => 'Random', 
							 'simpleFade' => 'SimpleFade', 
							 'curtainTopLeft' => "CurtainTopLeft", 
							 'curtainTopRight' => "CurtainTopRight", 
							 'curtainBottomLeft' => "CurtainBottomLeft", 
							 'curtainBottomRight' => "CurtainBottomRight", 
							 'curtainSliceLeft' => "CurtainSliceLeft", 
							 'curtainSliceRight' => "CurtainSliceRight", 
							 'blindCurtainTopLeft' => "BlindCurtainTopLeft", 
							 'blindCurtainTopRight' => "BlindCurtainTopRight", 
							 'blindCurtainBottomLeft' => "BlindCurtainBottomLeft", 
							 'blindCurtainBottomRight' => "BlindCurtainBottomRight", 
							 'blindCurtainSliceBottom' => "BlindCurtainSliceBottom", 
							 'blindCurtainSliceTop' => "BlindCurtainSliceTop", 
							 'stampede' => "Stampede", 
							 'mosaic' => "Mosaic", 
							 'mosaicReverse' => "MosaicReverse", 
							 'mosaicRandom' => "MosaicRandom", 
							 'mosaicSpiral' => "MosaicSpiral", 
							 'mosaicSpiralReverse' => "MosaicSpiralReverse", 
							 'topLeftBottomRight' => "TopLeftBottomRight", 
							 'bottomRightTopLeft' => "BottomRightTopLeft", 
							 'bottomLeftTopRight' => "BottomLeftTopRight", 
							 'bottomLeftTopRight' => "BottomLeftTopRight"
							 );
	
	// Slider Easing
	$sl_easing_array = array(  "jswing" => "jswing",
								"easeInQuad" => "easeInQuad",
								"easeOutQuad" => "easeOutQuad",
								"easeInOutQuad" => "easeInOutQuad",
								"easeInCubic" => "easeInCubic",
								"easeOutCubic" => "easeOutCubic",
								"easeInOutCubic" => "easeInOutCubic",
								"easeInQuart" => "easeInQuart",
								"easeOutQuart" => "easeOutQuart",
								"easeInOutQuart" => "easeInOutQuart",
								"easeInSine" => "easeInSine",
								"easeOutSine" => "easeOutSine",
								"easeInOutSine" => "easeInOutSine",
								"easeInExpo" => "easeInExpo",
								"easeOutExpo" => "easeOutExpo",
								"easeInOutExpo" => "easeInOutExpo",
								"easeInQuint" => "easeInQuint",
								"easeOutQuint" => "easeOutQuint",
								"easeInOutQuint" => "easeInOutQuint",
								"easeInCirc" => "easeInCirc",
								"easeOutCirc" => "easeOutCirc",
								"easeInOutCirc" => "easeInOutCirc",
								"easeInElastic" => "easeInElastic",
								"easeOutElastic" => "easeOutElastic",
								"easeInOutElastic" => "easeInOutElastic",
								"easeInBack" => "easeInBack",
								"easeOutBack" => "easeOutBack",
								"easeInOutBack" => "easeInOutBack",
								"easeInBounce" => "easeInBounce",
								"easeOutBounce" => "easeOutBounce",
								"easeInOutBounce" => "easeInOutBounce");

	// Caption Effect
	$sl_caption_array =array(
								"moveFromLeft" => "moveFromLeft",
								"moveFomRight" => "moveFomRight",
								"moveFromTop" => "moveFromTop",
								"moveFromBottom" => "moveFromBottom",
								"fadeIn" => "fadeIn",
								"fadeFromLeft" => "fadeFromLeft",
								"fadeFromRight" => "fadeFromRight",
								"fadeFromTop" => "fadeFromTop",
								"fadeFromBottom" => "fadeFromBottom"
							);
	
	// Slideshow
	$sl_slideshow_array = array("true" => "Yes","false" => "No");

	// Slider keyboard nav
	$sl_keyboard_array = array("true" => "Yes","false" => "No");
	
	// Slider mousewheel
	$sl_mousewheel_array = array("true" => "Yes","false" => "No");
	
	// Slider direct navigation
	$sl_dir_nav_array = array('true' => 'Yes','false' => 'No');
	
	// Slider control navigation
	$sl_control_nav_array = array("true" => "Yes","false" => "No");

	// Play/pause button
	$sl_play_pause_array = array("true" => "Yes", "false" => "No");


	
		// Footer menu
		$footer_menu_array = array("true" => "Yes","false" => "No");
		
		// Featured image size on the blog.
		$post_image_size_array = array("normal" => "Normal size","large" => "Large size");
		
		// Featured image size on the single page.
		$single_image_size_array = array("normal" => "Normal size","large" => "Large size");
		
		// Meta for blog
		$post_meta_array = array("true" => "Yes","false" => "No");
		
		// Meta for blog
		$post_excerpt_array = array(
			"true" => "Yes",
			"false" => "No"
		);
		
		
		
		
		
		// Pull all the categories into an array
		$options_categories = array();  
		$options_categories_obj = get_categories();
		foreach ($options_categories_obj as $category) {
				$options_categories[$category->cat_ID] = $category->cat_name;
		}
		
		// Pull all the pages into an array
		$options_pages = array();  
		$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
		$options_pages[''] = 'Select a page:';
		foreach ($options_pages_obj as $page) {
				$options_pages[$page->ID] = $page->post_title;
		}
			
		// If using image radio buttons, define a directory path
		$imagepath =  get_bloginfo('template_directory') . '/includes/images/';
			
		$options = array();
		
		$options[] = array( "name" => "General",
							"type" => "heading");
		
		$options['body_background'] = array( 
							"name" =>  "Body styling",
							"desc" => "Change the background style.",
							"id" => "body_background",
							"std" => $background_defaults, 
							"type" => "background");
		
		$options['header_color'] = array( "name" => "Header background color",
							"desc" => "Change the header background color.",
							"id" => "header_color",
							"std" => "",
							"type" => "color");

		
		$options['links_color'] = array( "name" => "Buttons and links color",
							"desc" => "Change the color of buttons and links.",
							"id" => "links_color",
							"std" => "",
							"type" => "color");

		
		$options['google_mixed_3'] = array( 'name' => 'Body Text',
							'desc' => 'Choose your prefered font for body text. <em>Note: fonts marked with <strong>*</strong> symbol are uploaded from the <a href="http://www.google.com/webfonts">Google Web Fonts</a> library.</em>',
							'id' => 'google_mixed_3',
							'std' => array( 'size' => '12px', 'lineheight' => '18px', 'face' => 'Arial', 'color' => '#333'),
							'type' => 'typography',
							'options' => array(
									'faces' => $typography_mixed_fonts )
							);
							
		$options['h1_heading'] = array( 'name' => 'H1 Heading',
							'desc' => 'Choose your prefered font for H1 heading and titles. <em>Note: fonts marked with <strong>*</strong> symbol are uploaded from the <a href="http://www.google.com/webfonts">Google Web Fonts</a> library.</em>',
							'id' => 'h1_heading',
							'std' => array( 'size' => '32px', 'lineheight' => '32px', 'face' => 'Arial', 'color' => '#222'),
							'type' => 'typography',
							'options' => array(
									'faces' => $typography_mixed_fonts )
							);
		
		$options['h2_heading'] = array( 'name' => 'H2 Heading',
							'desc' => 'Choose your prefered font for H2 heading and titles. <em>Note: fonts marked with <strong>*</strong> symbol are uploaded from the <a href="http://www.google.com/webfonts">Google Web Fonts</a> library.</em>',
							'id' => 'h2_heading',
							'std' => array( 'size' => '24px', 'lineheight' => '24px', 'face' => 'Arial', 'color' => '#222'),
							'type' => 'typography',
							'options' => array(
									'faces' => $typography_mixed_fonts )
							);
							
		$options['h3_heading'] = array( 'name' => 'H3 Heading',
							'desc' => 'Choose your prefered font for H3 heading and titles. <em>Note: fonts marked with <strong>*</strong> symbol are uploaded from the <a href="http://www.google.com/webfonts">Google Web Fonts</a> library.</em>',
							'id' => 'h3_heading',
							'std' => array( 'size' => '18px', 'lineheight' => '18px', 'face' => 'Arial', 'color' => '#222'),
							'type' => 'typography',
							'options' => array(
									'faces' => $typography_mixed_fonts )
							);
		
		$options['h4_heading'] = array( 'name' => 'H4 Heading',
							'desc' => 'Choose your prefered font for H4 heading and titles. <em>Note: fonts marked with <strong>*</strong> symbol are uploaded from the <a href="http://www.google.com/webfonts">Google Web Fonts</a> library.</em>',
							'id' => 'h4_heading',
							'std' => array( 'size' => '14px', 'lineheight' => '18px', 'face' => 'Arial', 'color' => '#222'),
							'type' => 'typography',
							'options' => array(
									'faces' => $typography_mixed_fonts )
							);
							
		$options['h5_heading'] = array( 'name' => 'H5 Heading',
							'desc' => 'Choose your prefered font for H5 heading and titles. <em>Note: fonts marked with <strong>*</strong> symbol are uploaded from the <a href="http://www.google.com/webfonts">Google Web Fonts</a> library.</em>',
							'id' => 'h5_heading',
							'std' => array( 'size' => '12px', 'lineheight' => '18px', 'face' => 'Arial', 'color' => '#222'),
							'type' => 'typography',
							'options' => array(
									'faces' => $typography_mixed_fonts )
							);
							
		$options['h6_heading'] = array( 'name' => 'H6 Heading',
							'desc' => 'Choose your prefered font for H6 heading and titles. <em>Note: fonts marked with <strong>*</strong> symbol are uploaded from the <a href="http://www.google.com/webfonts">Google Web Fonts</a> library.</em>',
							'id' => 'h6_heading',
							'std' => array( 'size' => '10px', 'lineheight' => '18px', 'face' => 'Arial', 'color' => '#222'),
							'type' => 'typography',
							'options' => array(
									'faces' => $typography_mixed_fonts )
							);
		



		
		$options['g_search_box_id'] = array( "name" => "Display search box?",
							"desc" => "Display search box in the header?",
							"id" => "g_search_box_id",
							"type" => "radio",
							"std" => "yes",
							"options" => $g_search_box);
		
		$options['g_gallery_lightbox_id'] = array( "name" => "Remove lightboxes and/or rollovers?",
							"desc" => "Remove lightboxes and/or rollovers from galleries?",
							"id" => "g_gallery_lightbox_id",
							"type" => "radio",
							"std" => "no",
							"options" => $g_gallery_lightbox);
		
		$options[] = array( "name" => "Custom CSS",
							"desc" => "Want to add any custom CSS code? Put in here, and the rest is taken care of. This overrides any other stylesheets. eg: a.button{color:green}",
							"id" => "custom_css",
							"std" => "",
							"type" => "textarea");
		
		
		
		
		
		$options[] = array( "name" => "Logo & Favicon",
							"type" => "heading");
		
		$options['logo_type'] = array( "name" => "What kind of logo?",
							"desc" => "Select whether you want your main logo to be an image or text. If you select 'image' you can put in the image url in the next option, and if you select 'text' your Site Title will show instead.",
							"id" => "logo_type",
							"std" => "image_logo",
							"type" => "radio",
							"options" => $logo_type);
		
		$options['logo_url'] = array( "name" => "Logo Image Path",
							"desc" => "Enter the direct path to your <strong>logo image</strong>. For example <em>http://your_website_url_here/wp-content/themes/themeXXXX/images/logo.png</em>",
							"id" => "logo_url",
							"type" => "upload");
							
		$options['favicon'] = array( "name" => "Favicon",
							"desc" => "Enter the direct path to your <strong>favicon</strong>. For example <em>http://your_website_url_here/wp-content/themes/themeXXXX/images/logo.png</em>",
							"id" => "favicon",
							"type" => "upload");
							
		
		
		$options[] = array( "name" => "Navigation",
							"type" => "heading");
		
		$options[] = array( "name" => "Delay",
							"desc" => "miliseconds delay on mouseout.",
							"id" => "sf_delay",
							"std" => "1000",
							"class" => "mini",
							"type" => "text");
		
		$options[] = array( "name" => "Fade-in animation",
							"desc" => "Fade-in animation.",
							"id" => "sf_f_animation",
							"std" => "show",
							"type" => "radio",
							"options" => $sf_f_animation_array);
		
		$options[] = array( "name" => "Slide-down animation",
							"desc" => "Slide-down animation.",
							"id" => "sf_sl_animation",
							"std" => "show",
							"type" => "radio",
							"options" => $sf_sl_animation_array);
		
		$options[] = array( "name" => "Speed",
							"desc" => "Animation speed.",
							"id" => "sf_speed",
							"type" => "select",
							"std" => "normal",
							"class" => "tiny", //mini, tiny, small
							"options" => $sf_speed_array);
		
		$options[] = array( "name" => "Arrows markup",
							"desc" => "Do you want to generate arrow mark-up?",
							"id" => "sf_arrows",
							"std" => "false",
							"type" => "radio",
							"options" => $sf_arrows_array);
		
		
		
		
		$options[] = array( "name" => "Blog",
							"type" => "heading");
		
		$options[] = array( "name" => "Blog Title",
							"desc" => "Enter Your Blog Title used on Blog page.",
							"id" => "blog_text",
							"std" => "Blog",
							"type" => "text");
		
		$options[] = array( "name" => "Related Posts Title",
							"desc" => "Enter Your Title used on Single Post page for related posts.",
							"id" => "blog_related",
							"std" => "Related Posts",
							"type" => "text");
		
		$options['blog_sidebar_pos'] = array( "name" => "Sidebar position",
							"desc" => "Choose sidebar position.",
							"id" => "blog_sidebar_pos",
							"std" => "right",
							"type" => "images",
							"options" => array(
								'left' => $imagepath . '2cl.png',
								'right' => $imagepath . '2cr.png',)
							);
		
		$options['post_image_size'] = array( "name" => "Blog image size",
							"desc" => "Featured image size on the blog.",
							"id" => "post_image_size",
							"type" => "select",
							"std" => "normal",
							"class" => "small", //mini, tiny, small
							"options" => $post_image_size_array);
		
		$options['single_image_size'] = array( "name" => "Single post image size",
							"desc" => "Featured image size on the single page.",
							"id" => "single_image_size",
							"type" => "select",
							"std" => "normal",
							"class" => "small", //mini, tiny, small
							"options" => $single_image_size_array);
		
		$options['post_meta'] = array( "name" => "Enable Meta for blog posts?",
							"desc" => "Enable or Disable meta information for blog posts.",
							"id" => "post_meta",
							"std" => "true",
							"type" => "radio",
							"options" => $post_meta_array);
		
		$options['post_excerpt'] = array( "name" => "Enable excerpt for blog posts?",
							"desc" => "Enable or Disable excerpt for blog posts.",
							"id" => "post_excerpt",
							"std" => "true",
							"type" => "radio",
							"options" => $post_excerpt_array);
		
		
		
		
		$options[] = array( "name" => "Footer",
							"type" => "heading");
		
		$options['footer_text'] = array( "name" => "Footer copyright text",
							"desc" => "Enter text used in the right side of the footer. HTML tags are allowed.",
							"id" => "footer_text",
							"std" => "",
							"type" => "textarea");
		
		$options[] = array( "name" => "Google Analytics Code",
							"desc" => "You can paste your Google Analytics or other tracking code in this box. This will be automatically added to the footer.",
							"id" => "ga_code",
							"std" => "",
							"type" => "textarea");
		
		$options['feed_url'] = array( "name" => "Feedburner URL",
							"desc" => "Feedburner is a Google service that takes care of your RSS feed. Paste your Feedburner URL here to let readers see it in your website.",
							"id" => "feed_url",
							"std" => "",
							"type" => "text");
		
		$options['footer_menu'] = array( "name" => "Display Footer menu?",
							"desc" => "Do you want to display footer menu?",
							"id" => "footer_menu",
							"std" => "true",
							"type" => "radio",
							"options" => $footer_menu_array);
		
		return $options;
	}
	
}

/* 
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');


if(!function_exists('optionsframework_custom_scripts')) {

	function optionsframework_custom_scripts() { ?>

		<script type="text/javascript">
		jQuery(document).ready(function($) {

			$('#example_showhidden').click(function() {
					$('#section-example_text_hidden').fadeToggle(400);
			});
			
			if ($('#example_showhidden:checked').val() !== undefined) {
				$('#section-example_text_hidden').show();
			}
		
		});
		</script>

		<?php
		}

}



