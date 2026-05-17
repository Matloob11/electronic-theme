<?php
// created by Eugene Chernomor eugeneweblab@gmail.com
// v. 24.0714

// =============================== My Carousel widget ======================================
class MY_blogCategoriesWidget extends WP_Widget {
    /** constructor */
    function MY_blogCategoriesWidget() {
        parent::WP_Widget(false, $name = 'My - Blog Categories');	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $text = apply_filters('widget_text', $instance['text']); 

        if ( !$text ) { $text = 'Categories'; }  
        echo '<div class="logCatList widget">';     
			echo '<h2>'.$text.'</h2>';
	        $args = array(
				'type'                     => 'post'
				,'order'                    => 'ASC'
				,'taxonomy'                 => 'category'
			);
			$categories = get_categories( $args );
			if( $categories ){
				echo '<ul class="catList">';
				foreach( $categories as $cat ){
					echo '<li><a href="'.get_term_link( $cat->slug , 'category' ).'">'.$cat->name.'</a></li>';

					// $cat->term_id
					// $cat->name (Рубрика 1)
					// $cat->slug (rubrika-1)
					// $cat->term_group (0)
					// $cat->term_taxonomy_id (4)
					// $cat->taxonomy (category)
					// $cat->description ()
					// $cat->parent (0)
					// $cat->count (14)
					// $cat->object_id (2743)
					// $cat->cat_ID (4)
					// $cat->category_count (14)
					// $cat->category_description ()
					// $cat->cat_name (Рубрика 1)
					// $cat->category_nicename (rubrika-1)
					// $cat->category_parent (0)

				}
				echo '</ul>';
			}

	    echo '</div>';
		
				

    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {	

        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {				
			$text = esc_attr($instance['text']);
			$speed = esc_attr($instance['speed']);
    ?>

		<p><label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Caption:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" type="text" value="<?php echo $text; ?>" /></label></p>
		      
      <?php 
    }

} // end of class MY_ScrollingBoxWidget Widget


?>