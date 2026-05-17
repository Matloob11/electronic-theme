<?php
// created by Eugene Chernomor eugeneweblab@gmail.com
// v. 28.0214

// =============================== My Carousel widget ======================================
class MY_FredCarouselWidget extends WP_Widget {
    /** constructor */
    function MY_FredCarouselWidget() {
        parent::WP_Widget(false, $name = 'My - FredCarousel');	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
        $title_descr = apply_filters('widget_title_descr', $instance['title_descr']);
		$limit = apply_filters('widget_limit', $instance['limit']);
		$cats = apply_filters('widget_cats', $instance['cats']);
		$count = apply_filters('widget_count', $instance['count']);
		$thumb_w = apply_filters('widget_thumb_w', $instance['thumb_w']);
		$thumb_h = apply_filters('widget_thumb_h', $instance['thumb_h']);
		$show_type = apply_filters('widget_show_type', $instance['show_type']);
		$linktext = apply_filters('widget_linktext', $instance['linktext']);
		$linkChecker = apply_filters('widget_linkChecker', $instance['linkChecker']);

		if( ! $thumb_h =  absint($instance["thumb_h"] ))  $thumb_h=50;			
		if( ! $thumb_w =  absint($instance["thumb_w"] ))  $thumb_w=50;
		//if( ! $category = $instance["category"] )  $category='';			
		if( ! $show_type = $instance["show_type"] )  $show_type='post';
		if( ! $linktext = $instance["linktext"] )  $linktext='read more';

        ?>
				<?php echo $before_widget; ?>
					<?php   if ( $title ) {
								echo $before_title . $title . $after_title;
								echo '<p class="title_descr">'. $title_descr .'</p>';
							}	
					?>
							
							<!-- Elastislide Carousel -->
							<div class="list_carousel">
			                    <ul id="foo2">
			                        <?php

			                        $trimmed = trim($cats[0]);
			                        
			                        $carouselPosts = new WP_Query();
			                        $carouselPosts->query('category_name='.$trimmed.'&showposts='.$count.'&post_type='.$show_type);
			                        ?>
			                        <?php while ($carouselPosts->have_posts()) : $carouselPosts->the_post(); ?>
			                 
			                        <li>             
			                        	
			                            <a class="imgHolder" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
			                            	<?php
												$thumb = get_post_thumbnail_id();
												$img_url = wp_get_attachment_url( $thumb,'sliderimg'); //get img URL
												$image = aq_resize( $img_url, $thumb_w, $thumb_h, true ); //resize & crop img

												if(has_post_thumbnail()) { ?> 
													<img src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
											<?php  } ?>

			                            </a>

			                            <div class="slidertitle">
			                            	<?php $theTitle = get_the_title($ID); ?>
				                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
				                            	<?php echo $theTitle; ?>
				                            </a>
			                            </div>
			                            
			                            <div class="excerpt">
			                            	<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limit); ?>
			                            </div>
										<?php if ($linkChecker) { ?>
			                            <a class="details" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php echo $linktext; ?></a>
			                            <?php } ?>

			                        </li>
			                 
			                        <?php endwhile; ?>
			                    </ul>
			                </div> 
			              		<div class="caroNav">
				                    <a class="prev" id="prev2" href="#"><span>prev</span></a>
				                    <a class="next" id="next2" href="#"><span>next</span></a>
			                    </div>
			                

							<script type="text/javascript">
							    jQuery(function($) {
								    $('#foo2').carouFredSel({
								        prev: '#prev2',
								        next: '#next2',
								        scroll : {
									            items           : 1,
									            easing          : "easeOutCirc",
									            duration        : 500,                        
									            pauseOnHover    : true
									        },
									    mousewheel: true,
										swipe: {
											onMouse: false,
											onTouch: true
										},    
									    auto: { play:true }            
								    });
								});
							</script>
							<!-- End Elastislide Carousel -->
			
			
				<?php echo $after_widget; ?>
        <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {	

        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {				
			$title = esc_attr($instance['title']);
			$title_descr = esc_attr($instance['title_descr']);
			$limit = esc_attr($instance['limit']);
			$cats = esc_attr($instance['cats']);
			$count = esc_attr($instance['count']);
			$thumb_w = esc_attr($instance['thumb_w']);
			$thumb_h = esc_attr($instance['thumb_h']);
			$show_type = esc_attr($instance['show_type']);
			$linktext = esc_attr($instance['linktext']);
			$linkChecker = esc_attr($instance['linkChecker']);
    ?>

		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

		<p><label for="<?php echo $this->get_field_id('title_descr'); ?>"><?php _e('Title Description:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title_descr'); ?>" name="<?php echo $this->get_field_name('title_descr'); ?>" type="text" value="<?php echo $title_descr; ?>" /></label></p>

      	<p><label for="<?php echo $this->get_field_id('limit'); ?>"><?php _e('Limit Text:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('limit'); ?>" name="<?php echo $this->get_field_name('limit'); ?>" type="text" value="<?php echo $limit; ?>" /></label></p>
 

		<p><label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Number of posts to show:'); ?></label>
        <input id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" size="3" /></p>

        <p>
        	<label for="<?php echo $this->get_field_id("linkChecker"); ?>">        
                <input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("linkChecker"); ?>" name="<?php echo $this->get_field_name("linkChecker"); ?>"<?php checked( (bool) $instance["linkChecker"], true ); ?> />        
                <?php _e( 'Show link button' ); ?>        
            </label>     
            <span style="width:20px; height:10px; display:inline-block;"></span>
        	<label for="<?php echo $this->get_field_id('linktext'); ?>"><?php _e('Text for link:'); ?></label>
        	<input id="<?php echo $this->get_field_id('linktext'); ?>" name="<?php echo $this->get_field_name('linktext'); ?>" type="text" value="<?php echo $linktext; ?>" size="10" />
        </p>
        
    <?php 
        if ( function_exists('the_post_thumbnail') && current_theme_supports("post-thumbnails") ) : ?>
        
        <p>        
            <label for="<?php echo $this->get_field_id("thumb"); ?>">        
                <input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id("thumb"); ?>" name="<?php echo $this->get_field_name("thumb"); ?>"<?php checked( (bool) $instance["thumb"], true ); ?> />        
                <?php _e( 'Show post thumbnail' ); ?>        
            </label>        
        </p>
        
        <p>        
            <label>        
                <?php _e('Thumbnail dimensions'); ?>:<br />        
                <label for="<?php echo $this->get_field_id("thumb_w"); ?>">        
                    W: <input class="widefat" style="width:40%;" type="text" id="<?php echo $this->get_field_id("thumb_w"); ?>" name="<?php echo $this->get_field_name("thumb_w"); ?>" value="<?php echo $thumb_w; ?>" />
                </label>   
                        
                <label for="<?php echo $this->get_field_id("thumb_h"); ?>">        
                    H: <input class="widefat" style="width:40%;" type="text" id="<?php echo $this->get_field_id("thumb_h"); ?>" name="<?php echo $this->get_field_name("thumb_h"); ?>" value="<?php echo $thumb_h; ?>" />
                </label>        
            </label>        
        </p>
        
    <?php endif; ?>	

    	<p>
            <label for="<?php echo $this->get_field_id('cats'); ?>"><?php _e('Categories:');?> 
            	
               <?php
                   $categories=  get_categories('hide_empty=0');
                     echo "<br/>";
                     foreach ($categories as $cat) {
                         $option='<input type="checkbox" id="'. $this->get_field_id( 'cats' ) .'[]" name="'. $this->get_field_name( 'cats' ) .'[]"';
                            if (is_array($instance['cats'])) {
                                foreach ($instance['cats'] as $cats) {
                                    if($cats==$cat->slug) {
                                         $option=$option.' checked="checked"';
                                    }
                                }
                            }
                            $option .= ' value="'.$cat->slug.'" />';
        
                            $option .= $cat->cat_name;
                            
                            $option .= '<br />';
                            echo $option;
                         }
                    
                    ?>
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('show_type'); ?>"><?php _e('Show Post Type:');?> 
                <select class="widefat" id="<?php echo $this->get_field_id('show_type'); ?>" name="<?php echo $this->get_field_name('show_type'); ?>">
                <?php
                    global $wp_post_types;
                    foreach($wp_post_types as $k=>$sa) {
                        if($sa->exclude_from_search) continue;
                        echo '<option value="' . $k . '"' . selected($k,$show_type,true) . '>' . $sa->labels->name . '</option>';
                    }
                ?>
                </select>
            </label>
        </p>
	


		








       
      <?php 
    }

} // class Carousel Widget


?>