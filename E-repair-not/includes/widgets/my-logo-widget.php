<?php
// =============================== My Flickr widget  ======================================
class MY_LogoWidget extends WP_Widget 
{
    /** constructor */
    function MY_LogoWidget() {
        parent::WP_Widget(false, $name = 'My - Logo');
    }

  /** @see WP_Widget::widget */
    function widget($args, $instance) 
    {		
      extract( $args );
  		$logo_type = apply_filters('logo_type_widget', $instance['logo_type']);
      $txt1 = apply_filters('txt1_widget', $instance['txt1']);
      $logo_type = $instance['logo_type'];

      ?>
        <?php echo $before_widget; 

        if (($logo_type=="text_logo")) { ?>
        <div class="footer_logo">
          <h1>
            <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">
            <?php bloginfo('name'); ?>
            <span><?php bloginfo('description'); ?></span>
            </a>
          </h1> 
        </div>  
        <?php } 

        if (($logo_type == "image_logo")) { ?>
          <a href="<?php bloginfo('url'); ?>/" id="logo">
            <img src="<?php bloginfo('template_url'); ?>/images/footer-logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
          </a>
        <?php
        }

        if ($txt1 !== "") 
          { 
            ?>
            <div class="logo_desc <?php echo $class; ?>">
                      <?php echo $txt1; ?>
            </div><!-- end 'without title' -->
          <?php
          }

        echo $after_widget; ?>            			 
      <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {				
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) 
    {				
        $logo_type= esc_attr($instance['logo_type']);
        $txt1= esc_attr($instance['txt1']);
        $logo_type = $instance['logo_type'];

      ?>
        <b>What kind of logo?</b><br/><br/>
        <label for="<?php echo $this->get_field_id('text_logo'); ?>" class="txt_logo">Text Logo:
          <input type="radio" name="<?php echo $this->get_field_name('logo_type'); ?>" value="text_logo" id="<?php echo $this->get_field_id('text_logo'); ?>" <?php checked($logo_type, "text_logo"); ?>></input></label>

        <label for="<?php echo $this->get_field_id('image_logo'); ?>" class="img_logo">Image Logo:
          <input type="radio" name="<?php echo $this->get_field_name('logo_type'); ?>" value="image_logo" id="<?php echo $this->get_field_id('image_logo'); ?>" <?php checked($logo_type, "image_logo"); ?>></input></label>  <br/><br/>

         <p>          
          <label for="<?php echo $this->get_field_id('txt1'); ?>"><?php _e('Description:', 'wp017'); ?>
          <textarea rows="5"  class="widefat" id="<?php echo $this->get_field_id('txt1'); ?>" name="<?php echo $this->get_field_name('txt1'); ?>"><?php echo $txt1; ?>
          </textarea>
          </label>
        </p>	
  			
      <?php 
  }

} // class  Widget
?>