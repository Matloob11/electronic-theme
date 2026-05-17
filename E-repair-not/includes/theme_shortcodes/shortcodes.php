<?php

// Row
function row_shortcode($atts, $content=null) {

	// add divs to the content	
	$output = '<div class="row">';
	$output .= do_shortcode($content);
	$output .= '</div> <!-- .row (end) -->';
   
	return $output;
}
add_shortcode('row', 'row_shortcode');


// Row Inner
function row_inner_shortcode($atts, $content=null) {

    // add divs to the content  
    $output = '<div class="row">';
    $output .= do_shortcode($content);
    $output .= '</div> <!-- .row (end) -->';
   
    return $output;
}
add_shortcode('row_in', 'row_inner_shortcode');


// Row Fluid
function row_fluid_shortcode($atts, $content=null) {

    // add divs to the content  
    $output = '<div class="row-fluid">';
    $output .= do_shortcode($content);
    $output .= '</div> <!-- .row-fluid (end) -->';
   
    return $output;
}
add_shortcode('row_fluid', 'row_fluid_shortcode');

// Clear
function clear_shortcode($atts, $content = null) {

    $output = '<div class="clear"></div>';

    return $output;
}
add_shortcode('clear', 'clear_shortcode');


// Grid Columns
function grid_column($atts, $content=null, $shortcodename ="")
{		
	//remove wrong nested <p>
	$content = remove_invalid_tags($content, array('p'));

	// add divs to the content
	$return = '<div class="'.$shortcodename.'">';
	$return .= do_shortcode($content);
	$return .= '</div>';

	return $return;
}
add_shortcode('span1', 'grid_column');
add_shortcode('span2', 'grid_column');
add_shortcode('span3', 'grid_column');
add_shortcode('span4', 'grid_column');
add_shortcode('span5', 'grid_column');
add_shortcode('span6', 'grid_column');
add_shortcode('span7', 'grid_column');
add_shortcode('span8', 'grid_column');
add_shortcode('span9', 'grid_column');
add_shortcode('span10', 'grid_column');
add_shortcode('span11', 'grid_column');
add_shortcode('span12', 'grid_column');


// Fluid Columns
// one_half
function one_half_column($atts, $content=null)
{		
	//remove wrong nested <p>
	$content = remove_invalid_tags($content, array('p'));

	// add divs to the content
	$return = '<div class="span6">';
	$return .= do_shortcode($content);
	$return .= '</div>';

	return $return;
}
add_shortcode('one_half', 'one_half_column');

// one_third
function one_third_column($atts, $content=null)
{		
	//remove wrong nested <p>
	$content = remove_invalid_tags($content, array('p'));

	// add divs to the content
	$return = '<div class="one_third">';
	$return .= do_shortcode($content);
	$return .= '</div>';

	return $return;
}
add_shortcode('one_third', 'one_third_column');

// two_third
function two_third_column($atts, $content=null)
{		
	//remove wrong nested <p>
	$content = remove_invalid_tags($content, array('p'));

	// add divs to the content
	$return = '<div class="two_third">';
	$return .= do_shortcode($content);
	$return .= '</div>';

	return $return;
}
add_shortcode('two_third', 'two_third_column');

// one_fourth
function one_fourth_column($atts, $content=null)
{		
	//remove wrong nested <p>
	$content = remove_invalid_tags($content, array('p'));

	// add divs to the content
	$return = '<div class="span3">';
	$return .= do_shortcode($content);
	$return .= '</div>';

	return $return;
}
add_shortcode('one_fourth', 'one_fourth_column');

// three_fourth
function three_fourth_column($atts, $content=null)
{		
	//remove wrong nested <p>
	$content = remove_invalid_tags($content, array('p'));

	// add divs to the content
	$return = '<div class="span9">';
	$return .= do_shortcode($content);
	$return .= '</div>';

	return $return;
}
add_shortcode('three_fourth', 'three_fourth_column');

// one_sixth
function one_sixth_column($atts, $content=null)
{		
	//remove wrong nested <p>
	$content = remove_invalid_tags($content, array('p'));

	// add divs to the content
	$return = '<div class="span2">';
	$return .= do_shortcode($content);
	$return .= '</div>';

	return $return;
}
add_shortcode('one_sixth', 'one_sixth_column');

// five_sixth
function five_sixth_column($atts, $content=null)
{		
	//remove wrong nested <p>
	$content = remove_invalid_tags($content, array('p'));

	// add divs to the content
	$return = '<div class="span10">';
	$return .= do_shortcode($content);
	$return .= '</div>';

	return $return;
}
add_shortcode('five_sixth', 'five_sixth_column');


// 50% box
function fiftyBox_column($atts, $content=null)
{		
	//remove wrong nested <p>
	$content = remove_invalid_tags($content, array('p'));

	// add divs to the content
	$return = '<div class="fluid_W50">';
	$return .= '<div class="fluid_W50Inner">';
	$return .= do_shortcode($content);
	$return .= '</div>';
	$return .= '</div>';

	return $return;
}
add_shortcode('fluidFiftyBox', 'fiftyBox_column');

// bdRight
function bdRight_column($atts, $content=null)
{		
	//remove wrong nested <p>
	$content = remove_invalid_tags($content, array('p'));

	// add divs to the content
	$return = '<div class="bdright">';
	$return .= do_shortcode($content);
	$return .= '</div>';

	return $return;
}
add_shortcode('borderRightBox', 'bdRight_column');


// display table
function dt_column($atts, $content=null)
{		
	//remove wrong nested <p>
	$content = remove_invalid_tags($content, array('p'));

	// add divs to the content
	$return = '<div class="dispayTableBox">';
	$return .= do_shortcode($content);
	$return .= '</div>';

	return $return;
}
add_shortcode('dispayTableBox', 'dt_column');


// palaroid boxs
function palaroidBox_shortcode($atts, $content=null)
{		
	//remove wrong nested <p>
	$content = remove_invalid_tags($content, array('p'));

	// add divs to the content
	$return = '<div class="palaroidBox span2">';
	$return .= do_shortcode($content);
	$return .= '</div>';

	return $return;
}
add_shortcode('palaroidBox', 'palaroidBox_shortcode');

// Lists



// Check List
function check_list_shortcode($atts, $content = null) {
    $output = '<div class="list check-list">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
}
add_shortcode('check_list', 'check_list_shortcode');

// Numeric list
function numeric_list_shortcode($atts, $content = null) {
    $output = '<div class="list numeric_list">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
}
add_shortcode('numeric_list', 'numeric_list_shortcode');

// Arrow List
function arrow_list_shortcode($atts, $content = null) {
    $output = '<div class="list arrow-list">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
}
add_shortcode('arrow_list', 'arrow_list_shortcode');

// Link Class "Read"
function ReadLink_shortcode($atts, $content = null) {

	extract(shortcode_atts(array(
				'href' => '#'											 
		), $atts));

    $output = '<a class="read" href="'. $href .'">';
    $output .= do_shortcode($content);
    $output .= '</a>';
    return $output;
}
add_shortcode('link_READ', 'ReadLink_shortcode');

// "Clearfix" container
function Clearfix_shortcode($atts, $content = null) {

    $output = '<div class="clearfix box">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
}
add_shortcode('clearfixBox', 'Clearfix_shortcode');


// block block95perc
function block95perc_shortcode($atts, $content = null) {

    $output = '<div class="block95perc">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
}
add_shortcode('block95perc', 'block95perc_shortcode');


// block block95perc
function spacer2_shortcode($atts, $content = null) {

    $output = '<div class="spacer2">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
}
add_shortcode('spacer2', 'spacer2_shortcode');



/******************************************/	
	
	
//Recent Posts
function shortcode_recent_posts($atts, $content = null) {
		
		extract(shortcode_atts(array(
				'type' => 'post',											 
				'category' => '',
				'custom_category' => '',
				'post_format' => 'standard',
				'num' => '5',
				'meta' => 'true',
				'thumb' => 'true',
				'thumb_width' => '120',
				'thumb_height' => '120',
				'more_text_single' => '',
				'excerpt_count' => '0',
				'custom_class' => ''
		), $atts));

		$output = '<ul class="recent-posts '.$custom_class.'">';
		$output .= '<div class="recentInner clearfix">';

		global $post;
		global $my_string_limit_words;
		
		if($post_format == 'standard') { 
						
			$args = array(
						'post_type' => $type,
						'category_name' => $category,
						$type . '_category' => $custom_category,
						'numberposts' => $num,
						'orderby' => 'post_date',
						'order' => 'DESC',
						'tax_query' => array(
						 'relation' => 'AND',
							array(
								'taxonomy' => 'post_format',
								'field' => 'slug',
								'terms' => array('post-format-aside', 'post-format-gallery', 'post-format-link', 'post-format-image', 'post-format-quote', 'post-format-audio', 'post-format-video'),
								'operator' => 'NOT IN'
							)
						)
						);
		
		} else { 
		
			$args = array(
				'post_type' => $type,
				'category_name' => $category,
				$type . '_category' => $custom_category,
				'numberposts' => $num,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'tax_query' => array(
				 'relation' => 'AND',
					array(
						'taxonomy' => 'post_format',
						'field' => 'slug',
						'terms' => array('post-format-' . $post_format)
					)
				)
				);
		
		}

		$latest = get_posts($args);
		
		foreach($latest as $post) {
				setup_postdata($post);
				$excerpt = get_the_excerpt($post->ID);
				$attachment_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				$url = $attachment_url['0'];
				$image = aq_resize($url, $thumb_width, $thumb_height, true);
				
				
				$post_classes = get_post_class();
				foreach ($post_classes as $key => $value) {
					$pos = strripos($value, 'tag-');
					if ($pos !== false) {
						unset($post_classes[$i]);
					}
				}
				$post_classes= implode(' ', $post_classes);
				

				$output .= '<li class="' . $post_classes . '">';
				
				
				//Aside
				if($post_format == "aside") {
					
					$output .= the_content($post->ID);
				
				} elseif ($post_format == "link") {
				
					$url =  get_post_meta(get_the_ID(), 'tz_link_url', true);
				
					$output .= '<a target="_blank" href="'. $url . '">';
					$output .= get_the_title($post->ID);
					$output .= '</a>';
				
				
				//Quote
				} elseif ($post_format == "quote") {
				
					$quote =  get_post_meta(get_the_ID(), 'tz_quote', true);
					
					$output .= '<div class="quote-wrap clearfix">';
							
							$output .= '<blockquote>';
								$output .= $quote;
							$output .= '</blockquote>';
							
					$output .= '</div>';
					
				
				//Image
				} elseif ($post_format == "image") {
				
				if (has_post_thumbnail() ):
				
				$lightbox = get_post_meta(get_the_ID(), 'tz_image_lightbox', TRUE);
				
				$src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), array( '9999','9999' ), false, '' );
				
				$thumb = get_post_thumbnail_id();
				$img_url = wp_get_attachment_url( $thumb,'full'); //get img URL
				$image = aq_resize( $img_url, 200, 120, true ); //resize & crop img
				
				
				$output .= '<figure class="featured-thumbnail large">';
					$output .= '<a class="image-wrap" rel="prettyPhoto[gallery]" title="' . get_the_title($post->ID) . '" href="' . $src[0] . '">';
					$output .= '<img src="' . $image . '" alt="' . get_the_title($post->ID) .'" />';
					$output .= '<span class="zoom-icon"></span></a>';
				$output .= '</figure>';
				
				endif;
				
				
				//Audio
				} elseif ($post_format == "audio") {
				
				$audio =  get_post_meta(get_the_ID(), 'tz_audio_mp3', true);
				
				$output .= '<div class="audio-wrapper">';
					$output .= '<audio src="' . stripslashes(htmlspecialchars_decode($audio)) .'" preload="none"></audio>';
				$output .= '</div>';
				$output .= '<div class="entry-content">';
					$output .= get_the_content($post->ID);
				$output .= '</div>';
				
				//Video
				} elseif ($post_format == "video") {
				
				$embed = get_post_meta(get_the_ID(), 'tz_video_embed', TRUE);
				
				
				$output .= '<figure class="video-holder">';
					$output .= stripslashes(htmlspecialchars_decode($embed));
				$output .= '</figure>';
				if($excerpt_count >= 1){
					$output .= '<div class="excerpt">';
						$output .= my_string_limit_words($excerpt,$excerpt_count);
					$output .= '</div>';
				}
				
				//Standard
				} else {
					
					if ($thumb == 'true') {
					
						if ( has_post_thumbnail($post->ID) ){
								$output .= '<figure class="featured-thumbnail"><a href="'.get_permalink($post->ID).'" title="'.get_the_title($post->ID).'">';
								$output .= '<img  src="'.$image.'"/>';
								$output .= '</a></figure>';
						}
					}

					$output .= '<h5><a href="'.get_permalink($post->ID).'" title="'.get_the_title($post->ID).'">';
							$output .= get_the_title($post->ID);
					$output .= '</a></h5>';

					if($excerpt_count >= 1){
						$output .= '<div class="excerpt">';
							$output .= my_string_limit_words($excerpt,$excerpt_count);
						$output .= '</div>';
					}

					if($more_text_single!=""){
						$output .= '<a href="'.get_permalink($post->ID).'" class="button" title="'.get_the_title($post->ID).'">';
						$output .= $more_text_single;
						$output .= '</a>';
					}

					if($meta == 'true'){
							$output .= '<span class="meta">';
									$output .= '<span class="post-date">';
										$output .= '<span>'. get_the_time('d').'</span><span>'.get_the_time('M').'</span><span class="meta_year">'.get_the_time('Y').'</span>' ;
									$output .= '</span>';
							$output .= '</span>';
					}

					$output .= '<a class="boxCover" href="'.get_permalink($post->ID).'"></a>';
				}
				
				
				
				$output .= '<div class="clear"></div>';
				$output .= '</li><!-- .entry (end) -->';

		}
		$output .= '</div><!-- .recentInner (end) -->';
		$output .= '</ul><!-- .recent-posts (end) -->';
		return $output;
		
}

add_shortcode('recent_posts', 'shortcode_recent_posts');
	
	
	

// Recent Comments

function shortcode_recent_comments($atts, $content = null) {

    extract(shortcode_atts(array(
        'num' => '5'
    ), $atts));

    global $wpdb;
    $sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID,
    comment_post_ID, comment_author, comment_author_email, comment_date_gmt, comment_approved,
    comment_type,comment_author_url,
    SUBSTRING(comment_content,1,50) AS com_excerpt
    FROM $wpdb->comments
    LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID =
    $wpdb->posts.ID)
    WHERE comment_approved = '1' AND comment_type = '' AND
    post_password = ''
    ORDER BY comment_date_gmt DESC LIMIT ".$num;

    $comments = $wpdb->get_results($sql);

    $output = '<ul class="recent-comments">';

    foreach ($comments as $comment) {

        $output .= '<li>';
            $output .= '<a href="'.get_permalink($comment->ID).'#comment-'.$comment->comment_ID.'" title="on '.$comment->post_title.'">';
                 $output .= strip_tags($comment->comment_author).' : '.strip_tags($comment->com_excerpt).'...';
            $output .= '</a>';
        $output .= '</li>';

    }

    $output .= '</ul>';

    return $output;

}

add_shortcode('recent_comments', 'shortcode_recent_comments');
	
	
	
	
	
//Popular Posts

function shortcode_popular_posts($atts, $content = null) {

		extract(shortcode_atts(array(
				'num' => '5'
		), $atts));
		
		$args = array(
			'numberposts' => $num,
			'orderby' => 'comment_count',
			'order' => 'DESC',
			'tax_query' => array(
			 'relation' => 'AND',
				array(
					'taxonomy' => 'post_format',
					'field' => 'slug',
					'terms' => array('post-format-aside', 'post-format-gallery', 'post-format-link', 'post-format-image', 'post-format-quote', 'post-format-audio', 'post-format-video'),
					'operator' => 'NOT IN'
				)
			)
		);
		
		$popular = get_posts($args);

		$output = '<ul class="popular_posts">';

		foreach($popular as $post){
		
			setup_postdata($post);
			$excerpt = get_the_excerpt($post->ID);
			$attachment_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
			$url = $attachment_url['0'];
			$image = aq_resize($url, 138, 138, true);

				$output .= '<li>';
						
						if ( has_post_thumbnail($post->ID) ){
							$output .= '<figure class="featured-thumbnail"><a href="'.get_permalink($post->ID).'" title="'.get_the_title($post->ID).'">';
							$output .= '<img  src="'.$image.'"/>';
							$output .= '</a></figure>';
						}
						
						$output .= '<h5><a href="'.get_permalink($post->ID).'" title="'.get_the_title($post->ID).'">';
								$output .= get_the_title($post->ID);
						$output .= '</a></h5>';
						
						$output .= '<div class="excerpt">';
							$output .= my_string_limit_words($excerpt,20);
						$output .= '</div>';
				$output .= '</li>';

		}

		$output .= '</ul>';

		return $output;

}

add_shortcode('popular_posts', 'shortcode_popular_posts');



//Recent Testimonials

function shortcode_recenttesti($atts, $content = null) {

		extract(shortcode_atts(array(
				'num' => '5',
				'thumb' => 'true',
				'excerpt_count' => '30'
		), $atts));

		$testi = get_posts('post_type=testi&orderby=post_date&numberposts='.$num);

		$output = '<div class="tes">';
		
		global $post;
		global $my_string_limit_words;

		foreach($testi as $post){
				setup_postdata($post);
				$excerpt = get_the_excerpt($post->ID);
				$custom = get_post_custom($post->ID);
				$testiname = $custom["my_testi_caption"][0];
				$testiurl = $custom["my_testi_url"][0];
				$testiinfo = $custom["my_testi_info"][0];
				$attachment_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				$url = $attachment_url['0'];
				$image = aq_resize($url, 70, 92, true);

				$output .= '<div class="tes_item">';
						$output .= '<blockquote>';
							if ($thumb == 'true') {
								if ( has_post_thumbnail($post->ID) ){
									$output .= '<figure class="featured-thumbnail">';
									$output .= '<img  src="'.$image.'"/>';
									$output .= '</figure>';
								}
							}
							$output .= '<div class="testiTitle">'. get_the_title($post->ID).'</div>';	
							$output .= '<a href="'.get_permalink($post->ID).'">';
								$output .= my_string_limit_words($excerpt,$excerpt_count);
							$output .= '</a><div class="clear"></div>';
						$output .= '</blockquote>';
						
						$output .= '<div class="tes-name">';
						
							if($testiname) { 
								$output .= '<span class="user">';
									$output .= $testiname;
								$output .= '</span><br>';
							}
							
						$output .= '</div>';
						
				$output .= '</div>';

		}

		$output .= '</div>';

		return $output;

}

add_shortcode('recenttesti', 'shortcode_recenttesti');
	

//Categories

function shortcode_list_categories($atts, $content = null) {

	extract(shortcode_atts(array(
			'title'			=> '',
			'orderby'		=> '',
			'order'			=> '',
			'exclude'		=> '',
			'include'		=> '',
			'number'		=> '',
			'hide_empty'	=> '',
			'custom_class'	=> ''
	), $atts));

	$categories = get_categories('exclude=' . $exclude . '&include=' . $include . '&number=' . $number . '&orderby=' . $orderby . '&order=' . $order . '&hide_empty=' . $hide_empty);

	$output = '';
	
	if( !empty($title) || $title != ''){
		$output .= '<h3 class="list_cats ' . $custom_class . '-title">' . $title . '</h3>';
	}

	$output .= '<ul class="list_cats ' . $custom_class . '">';
		foreach($categories as $category) {
			$output .= '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>';
		}
	$output .= '</ul>';

	return $output ;
}

add_shortcode('list_categories', 'shortcode_list_categories');	
	
	
//Tag Cloud

function shortcode_tags($atts, $content = null) {

		$output = '<div class="tags-cloud clearfix">';

		$tags = wp_tag_cloud('smallest=8&largest=8&format=array');

		foreach($tags as $tag){
				$output .= $tag.' ';
		}

		$output .= '</div><!-- .tags-cloud (end) -->';

		return $output;

}

add_shortcode('tags', 'shortcode_tags');




// Audio Player

function shortcode_audio($atts, $content = null) {
		
    extract(shortcode_atts(array(
        'file' => '',
				'desc' => ''
    ), $atts));
    
    $template_url = get_template_directory_uri();
    $id = mt_rand();
    $mp3 = strpos($file, ".mp3");

    $output  = '<div class="audio-wrapper"><audio src="';

    if($mp3 !== false){
        
        $output .= $file;

    } else {

        _e("The URL you entered is not a .mp3 file.", "e_repair");

    }

    $output  .= '"preload="auto"></audio>';
		$output  .= '<div class="audio-desc">';
			$output  .= $desc;
		$output  .= '</div></div>';

    return $output;

}

add_shortcode('audio', 'shortcode_audio');




// Video Player

function shortcode_video($atts, $content = null) {

    extract(shortcode_atts(array(
        'file' => '',
        'image' => '',
        'width' => '560',
        'height' => '349',
        'color' => 'black'
    ), $atts));

    $template_url = get_bloginfo('template_url');

    $video_url = $file;

    //Check for video format
    $vimeo = strpos($video_url, "vimeo");
    $youtube = strpos($video_url, "youtube");
    $flv = strpos($video_url, ".flv");

    $output = '<div class="video-wrap">';

    //Display video
    if($vimeo !== false){

        //Get ID from video url
        $video_id = str_replace( 'http://vimeo.com/', '', $video_url );
        $video_id = str_replace( 'http://www.vimeo.com/', '', $video_id );

        //Display Vimeo video
        $output .= '<iframe src="http://player.vimeo.com/video/'.$video_id.'?title=0&amp;byline=0&amp;portrait=0" width="'.$width.'" height="'.$height.'" frameborder="0"></iframe>';

    } elseif($youtube !== false){

        //Get ID from video url
        $video_id = str_replace( 'http://youtube.com/watch?v=', '', $video_url );
        $video_id = str_replace( 'http://www.youtube.com/watch?v=', '', $video_id );
        $video_id = str_replace( '&feature=channel', '', $video_id );
        $video_id = str_replace( '&feature=channel', '', $video_id );

        $output .= '<iframe title="YouTube video player" class="youtube-player" type="text/html" width="'.$width.'" height="'.$height.'" src="http://www.youtube.com/embed/'.$video_id.'" frameborder="0"></iframe>';

    } elseif($flv !== false){

        $output .= mytheme_video($video_url, $image, $width, $height, $color);

    } else {

        _e("You entered a video URL that isn't compatible with this shortcode.", "e_repair");

    }

    $output .= '</div><!-- .video-wrap (end) -->';

    return $output;

}

add_shortcode('video', 'shortcode_video');




add_action( 'after_setup_theme', 'my_setup' );




function shortcode_randomTesti($atts, $content = null) {
		
    extract(shortcode_atts(array(
        'amount' => '1'
    ), $atts));
    
    
    $posts = get_posts(array(
		'numberposts'     => $amount,
		'offset'          => 0,
		'category'        => -500,
		'orderby'         => 'rand',
		'post_type'       => 'testi',
		'post_status'     => 'publish'
	));
	foreach($posts as $post){
		setup_postdata($post); 
	    $output = '<div id="wrapTesti">';
	    	$output .= '<div class="testiInner"><a href="'.get_permalink($post->ID).'">'.my_string_limit_words(get_the_content(),50).'...</a></div>';
	    	$output .= '<div class="testiOwner">'.get_post_meta($post->ID, 'my_testi_caption', true).'
				<span>'.get_post_meta($post->ID, 'my_testi_info', true).'</div>';	    	
	    $output .= '</div>';		
	}
	wp_reset_postdata();

    return $output;

}

add_shortcode('randomTestimonial', 'shortcode_randomTesti');




//Recent Testimonials

function shortcode_djsList($atts, $content = null) {

		extract(shortcode_atts(array(
				'num' => '5',
				'thumb' => 'true',
				'excerpt_count' => '30',
				'thumb_width' => '150',
				'thumb_height' => '150'
		), $atts));

		$djss = get_posts('post_type=djs&orderby=post_date&numberposts='.$num);

		$output = '<div class="djsListWrap row">';
		
		global $post;
		global $my_string_limit_words;

		$ii = 0;
		foreach($djss as $post){
				$ii++;
				setup_postdata($post);
				$excerpt = get_the_content($post->ID);
				$attachment_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				$url = $attachment_url['0'];
				$image = aq_resize($url, $thumb_width, $thumb_height, true);

				$output .= '<div class="dj_item span4">';
						
							if ($thumb == 'true') {
								if ( has_post_thumbnail($post->ID) ){
									$output .= '<img  src="'.$image.'"/>';									
								}
							}
							$output .= '<div class="djTitle">'. get_the_title($post->ID).'</div>';	
							$output .= '<a href="'.get_permalink($post->ID).'">';
								$output .= my_string_limit_words($excerpt,$excerpt_count);
							$output .= '</a><div class="clear"></div>';
						
						
						
						
				$output .= '</div>';

				if ($ii%2==0) {
					$output .= '<div class="clear"></div>';
				}

		}

		$output .= '</div>';

		return $output;

}

add_shortcode('djsList', 'shortcode_djsList');





















?>