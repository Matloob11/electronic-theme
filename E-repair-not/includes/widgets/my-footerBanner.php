<?php
// =============================== My Request Quote Widget ======================================
class MY_FooterBannerWidget extends WP_Widget {
    /** constructor */
    function MY_FooterBannerWidget() {
        parent::WP_Widget(false, $name = 'My - Footer Banner');	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
			$price = apply_filters('widget_price', $instance['price']);
			$offerName = apply_filters('widget_offerName', $instance['offerName']);
			$offerDescr = apply_filters('widget_offerDescr', $instance['offerDescr']);
			$imgUrl = apply_filters('widget_imgUrl', $instance['imgUrl']);
			$buttonUrl = apply_filters('widget_buttonUrl', $instance['buttonUrl']);
			$buttonText = apply_filters('widget_buttonText', $instance['buttonText']);
			$priceDescr = apply_filters('widget_priceDescr', $instance['priceDescr']);
        ?>
              
            <?php echo $before_widget; ?>
              			
	  			<div class="bannerBox">

	  				<?php $imageSRC = aq_resize( $imgUrl, 350, 204, true ); //resize & crop img ?>
	  				<img src="<?php echo $imageSRC; ?>" alt="bannerImg" class="bannerImg">
					<div class="text">
						<h3><?php echo $offerName; ?></h3>
						<p><?php echo $offerDescr; ?></p>
					</div>

					<?php if ($price) { ?> 
						<div class="flipText">
							<p class="priceDescr"> <?php echo $priceDescr; ?> </p>
							<p class="price"><?php echo $price; ?></p>

							<?php if($buttonText!="" && $buttonUrl!=""){ ?>
								<a href="<?php echo $buttonUrl; ?>" class="button"><?php echo $buttonText; ?></a>
							<?php } ?>	
						</div>
					<?php } ?>											
              
				</div>
							
                        
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
				$price = esc_attr($instance['price']);
				$offerName = esc_attr($instance['offerName']);
				$offerDescr = esc_attr($instance['offerDescr']);
				$imgUrl = esc_attr($instance['imgUrl']);
				$buttonUrl = esc_attr($instance['buttonUrl']);
				$buttonText = esc_attr($instance['buttonText']);
				$priceDescr = esc_attr($instance['priceDescr']);
        ?>

		<p>
			<label for="<?php echo $this->get_field_id('offerName'); ?>"><?php _e('Offers Name:', 'wp046'); ?>
				<input class="widefat" id="<?php echo $this->get_field_id('offerName'); ?>" name="<?php echo $this->get_field_name('offerName'); ?>" type="text" value="<?php echo $offerName; ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('offerDescr'); ?>"><?php _e('Offers Description:', 'wp046'); ?>
				<input class="widefat" id="<?php echo $this->get_field_id('offerDescr'); ?>" name="<?php echo $this->get_field_name('offerDescr'); ?>" type="text" value="<?php echo $offerDescr; ?>" />
			</label>
		</p>		
		<p>
			<label for="<?php echo $this->get_field_id('imgUrl'); ?>"><?php _e('Put source for image:', 'wp046'); ?>
				<input class="widefat" id="<?php echo $this->get_field_id('imgUrl'); ?>" name="<?php echo $this->get_field_name('imgUrl'); ?>" type="text" value="<?php echo $imgUrl; ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('price'); ?>"><?php _e('Price:', 'wp046'); ?>
				<input class="widefat" id="<?php echo $this->get_field_id('price'); ?>" name="<?php echo $this->get_field_name('price'); ?>" type="text" value="<?php echo $price; ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('priceDescr'); ?>"><?php _e('Description for price:', 'wp046'); ?>
				<input class="widefat" id="<?php echo $this->get_field_id('priceDescr'); ?>" name="<?php echo $this->get_field_name('priceDescr'); ?>" type="text" value="<?php echo $priceDescr; ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('buttonUrl'); ?>"><?php _e('Button URL:', 'wp046'); ?>
				<input class="widefat" id="<?php echo $this->get_field_id('buttonUrl'); ?>" name="<?php echo $this->get_field_name('buttonUrl'); ?>" type="text" value="<?php echo $buttonUrl; ?>" />
			</label>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('buttonText'); ?>"><?php _e('Text for Button:', 'wp046'); ?>
				<input class="widefat" id="<?php echo $this->get_field_id('buttonText'); ?>" name="<?php echo $this->get_field_name('buttonText'); ?>" type="text" value="<?php echo $buttonText; ?>" />
			</label>
		</p>

        <?php 
    }

} // class Request Quote Widget

?>