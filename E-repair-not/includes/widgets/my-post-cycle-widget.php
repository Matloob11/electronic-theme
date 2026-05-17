<?php
// =============================== My Post Cycle widget ======================================
class MY_CycleWidget extends WP_Widget {
    /** constructor */
    function MY_CycleWidget() {
        parent::WP_Widget(false, $name = 'My - Post Cycle');	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
				$limit = apply_filters('widget_limit', $instance['limit']);
				$category = apply_filters('widget_category', $instance['category']);
				$count = apply_filters('widget_count', $instance['count']);
				$cat = apply_filters('widget_cat', $instance['cat']);
        ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
						
						<?php if($category=="testi"){?>
            		<script type="text/javascript">
									jQuery(function(){
										jQuery('#testi-cycle').cycle({
											fx: 'scrollUp', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
											timeout: 8000,
											height: 'auto',
											prev:    '#prev-testi',
											next:    '#next-testi',
											pager:   '#nav-testi',
											pagerAnchorBuilder: pagerFactory
										});
										
										function pagerFactory(idx, slide) {
												var s = idx > <?php echo $count; ?> ? ' style="display:none"' : '';
												return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';
										};
									});
								</script>
              	<div class="testimonials" id="testi-cycle">
								
					<?php $limittext = $limit;?>
					<?php global $more;	$more = 0;?>
					<?php query_posts("posts_per_page=". $count ."&post_type=" . $category);?>
					
					<?php while (have_posts()) : the_post(); ?>	
					
						<?php 
						$custom = get_post_custom($post->ID);
						$testiname = $custom["my_testi_caption"][0];
						$testiurl = $custom["my_testi_url"][0];
						$testiinfo = $custom["my_testi_info"][0];
						?>
					
					<div class="testi_item">

						<?php if($limittext=="" || $limittext==0){ ?>
							<?php the_excerpt(); ?>
						<?php }else{ ?>
							<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext);?>
						<?php } ?>
						
						 <div class="name-testi">
						 <span class="user"><?php echo $testiname; ?></span>,
						 <a href="http://<?php echo $testiurl; ?>"><?php echo $testiurl; ?></a><br/>
						 <span class="info"><?php echo $testiinfo; ?></span>
						 </div>
						 
					</div>
					<?php endwhile; ?>
                <?php wp_reset_query(); ?>
			</div>
			
          <div id="testi-controls">
            <a href="#"><span id="prev-testi"><?php _e('Prev', 'e_repair'); ?></span></a> 
            <a href="#"><span id="next-testi"><?php _e('Next', 'e_repair'); ?></span></a>
            <ul id="nav-testi"></ul>
          </div>
			<!-- end of testimonials -->
              
            
            
						<?php } elseif($category=="portfolio"){ ?>
							<script type="text/javascript">
								jQuery(function(){
									jQuery('#folio-cycle').cycle({
										pause: 1,
										fx: 'scrollHorz',
										timeout: 6000,
										pager:   '#nav-folio',
										prev:    '#prev-portfolio1',
										next:    '#next-portfolio1',
										pagerAnchorBuilder: pagerFactory
									});
									
									function pagerFactory(idx, slide) {
											var s = idx > <?php echo $count; ?> ? ' style="display:none"' : '';
											return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';
									};
								});
							</script>
							<div class="folio_cycle" id="folio-cycle">
								<?php $limittext = $limit;?>
                <?php global $more;	$more = 0;?>
                <?php query_posts("posts_per_page=". $count ."&post_type=" . $category);?>
                <?php while (have_posts()) : the_post(); ?>	
                <div class="folio_item">
									
									<?php if(has_post_thumbnail()) { ?>
										<?php
										$thumb = get_post_thumbnail_id();
										$img_url = wp_get_attachment_url( $thumb,'full'); //get img URL
										$image = aq_resize( $img_url, 327, 300, true ); //resize & crop img
										?>
										<figure class="featured-thumbnail">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image ?>" alt="<?php the_title(); ?>" width="250" height="150" /></a>
										</figure>
									<?php } ?>
                  <?php if($limittext!="" || $limittext!=0) : ?>
			    <div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext); ?></div>
                  <?php endif; ?>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
              </div>
              <div id="folio-controls">
              	<a href="#" id="prev-portfolio1"><?php _e('Prev', 'e_repair'); ?></a> 
            	<a href="#" id="next-portfolio1"><?php _e('Next', 'e_repair'); ?></a>
                <ul id="nav-folio"></ul>
              </div>
              <!-- end of portfolio_cycle -->
            

						<?php } elseif($category=="custom"){ ?>

							<script type="text/javascript">
								jQuery(function(){
									jQuery('#testi-cycle1').cycle({
										fx: 'scrollUp', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
										timeout: 7000,
										height: 'auto',
										prev:    '#prev-testi1',
										next:    '#next-testi1',
										pager:   '#nav-testi1',
										pagerAnchorBuilder: pagerFactory
									});
									
									function pagerFactory(idx, slide) {
											var s = idx > <?php echo $count; ?> ? ' style="display:none"' : '';
											return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';
									};
								});
							</script>
							<div class="customCatScroller" id="testi-cycle1">
								
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0;?>
								<?php query_posts("posts_per_page=". $count ."&category_name=" . $cat);?>
								
								<?php while (have_posts()) : the_post(); ?>	
								
									<?php 
									$custom = get_post_custom($post->ID);
									$testiname = $custom["my_testi_caption"][0];
									$testiurl = $custom["my_testi_url"][0];
									$testiinfo = $custom["my_testi_info"][0];
									?>
								
									<div class="customCatScrollerItem">
										<div class="customCatScrollerMeta">
											<span class="dateOfCreate"><?php echo get_the_date('j').' of '. get_the_date('F, Y'); ?></span>											 
										</div>

										<?php if($limittext=="" || $limittext==0){ ?>
											<?php the_excerpt(); ?>
										<?php }else{ ?>
											<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext);?>
										<?php } ?>										 
									</div>
								<?php endwhile; ?>
                				<?php wp_reset_query(); ?>
							</div>

			                <div id="testi-controls1">
				                <a href="#"><span id="prev-testi1"><?php _e('Prev', 'e_repair'); ?></span></a> 
				                <a href="#"><span id="next-testi1"><?php _e('Next', 'e_repair'); ?></span></a>
				                <ul id="nav-testi1"></ul>
			                </div>


						<?php } else { ?>
							
              <script type="text/javascript">
								jQuery(function(){
									jQuery('#post-cycle').cycle({
										pause: 1,
										fx: 'fade',
										timeout: 3500
									});
								});
							</script>
							<div class="post_cycle" id="post-cycle">
								<?php $limittext = $limit;
								$args = array(
									'showposts' => $count,
									'category_name' => $category,
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
								$wp_query = new WP_Query( $args );	
								?>
								<?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>	
								<div class="cycle_item">
									<?php if(has_post_thumbnail()) { ?>
										<?php
										$thumb = get_post_thumbnail_id();
										$img_url = wp_get_attachment_url( $thumb,'full'); //get img URL
										$image = aq_resize( $img_url, 250, 150, true ); //resize & crop img
										?>
										<figure class="featured-thumbnail">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
										</figure>
									<?php } ?>
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <?php if($limittext!="" || $limittext!=0) : ?>
										<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext); ?>
                  <?php endif; ?>
								</div>
								<?php endwhile; endif; ?>
								<?php $wp_query = null; $wp_query = $temp;?>
                <?php wp_reset_query(); ?>
							</div>
							<!-- end of post_cycle -->
							<?php }?>
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
			$limit = esc_attr($instance['limit']);
			$category = esc_attr($instance['category']);
			$count = esc_attr($instance['count']);
			$cat = esc_attr($instance['cat']);
    ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'e_repair'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

      <p><label for="<?php echo $this->get_field_id('limit'); ?>"><?php _e('Limit Text:', 'e_repair'); ?> <input class="widefat" id="<?php echo $this->get_field_id('limit'); ?>" name="<?php echo $this->get_field_name('limit'); ?>" type="text" value="<?php echo $limit; ?>" /></label></p>
      <p><label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Posts per page:', 'e_repair'); ?><input class="widefat" style="width:30px; display:block; text-align:center" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" /></label></p>
      <p><label for="<?php echo $this->get_field_id('cat'); ?>"><?php _e('Custom category:', 'e_repair'); ?><input class="widefat" style="width:30px; display:block; text-align:center" id="<?php echo $this->get_field_id('cat'); ?>" name="<?php echo $this->get_field_name('cat'); ?>" type="text" value="<?php echo $cat; ?>" /></label></p>

      <p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Type of posts:', 'e_repair'); ?><br />

      <select id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" style="width:150px;" > 
      <option value="testi" <?php echo ($category === 'testi' ? ' selected="selected"' : ''); ?>>Testimonials</option>
      <option value="portfolio" <?php echo ($category === 'portfolio' ? ' selected="selected"' : ''); ?> >Portfolio</option>
      <option value="custom" <?php echo ($category === 'custom' ? ' selected="selected"' : ''); ?> >Custom</option>
      <option value="" <?php echo ($category === '' ? ' selected="selected"' : ''); ?>>Blog</option>
      </select>
      </label></p>
       
      <?php 
    }

} // class Cycle Widget


?>