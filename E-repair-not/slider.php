

<div class="camera_wrap camera_coffee_skin" id="camera_wrap">
  <?php
		query_posts("post_type=slider&posts_per_page=-1&post_status=publish&order=ASC&orderby=menu_order");
		while ( have_posts() ) : the_post();
	
		$custom = get_post_custom($post->ID);
		$url = get_post_custom_values("my_slider_url");
		$sl_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slider-post-thumbnail');
		$caption = get_post_custom_values("my_slider_caption");


	 if(has_post_thumbnail( $the_ID) || $sl_thumb!="") { 

	echo "<div data-src='".$sl_image_url[0]."'>"; 
		if ($caption)
		{
			echo '<div class="camera_caption '. of_get_option("caption_effect") . '">';
			echo stripslashes(htmlspecialchars_decode($caption[0]));
			echo '</div>';
		}
	echo "</div>"; 

	?>
		<?php } 

    endwhile; 

    wp_reset_query();?>
</div>
