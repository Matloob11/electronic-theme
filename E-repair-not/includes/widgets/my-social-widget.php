<?php
class My_SocialNetworksWidget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'social_networks',
            __('My - Social Networks'),
            array(
                'classname'   => 'social_networks_widget',
                'description' => __('Link to your social networks.')
            )
        );
    }

    function widget($args, $instance) {
        extract($args);

        $title = !empty($instance['title']) ? $instance['title'] : '';
        $title = apply_filters('widget_title', $title);

        $networks = array(
            "Facebook", "Twitter", "Flickr", "Feed", "Linkedin",
            "Delicious", "Youtube", "Google", "Pinterest",
            "Blogger", "Tumblr", "Vimeo", "Grooveshark"
        );

        echo $before_widget;

        if ($title) {
            echo $before_title . esc_html($title) . $after_title;
        }
        ?>

        <ul class="social-networks">
            <?php foreach ($networks as $network) :
                $key = strtolower($network);
                $link = !empty($instance[$key]) ? $instance[$key] : '';
                $label = !empty($instance[$key . '_label']) ? $instance[$key . '_label'] : $network;
                $display = !empty($instance['display']) ? $instance['display'] : 'icons';

                if (!empty($link)) : ?>
                    <li>
                        <a rel="external"
                           title="<?php echo esc_attr($key); ?>"
                           href="<?php echo esc_url($link); ?>">

                            <?php if ($display == "icons" || $display == "both") : ?>
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/icons/' . $key . '.png'); ?>" alt="">
                            <?php endif; ?>

                            <?php if ($display == "labels" || $display == "both") : ?>
                                <?php echo esc_html($label); ?>
                            <?php endif; ?>

                        </a>
                    </li>
                <?php endif;
            endforeach; ?>
        </ul>

        <?php
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {
        $instance = array();

        foreach ($new_instance as $key => $value) {
            $instance[$key] = sanitize_text_field($value);
        }

        return $instance;
    }

    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $display = isset($instance['display']) ? $instance['display'] : 'icons';
        ?>

        <p>
            <label><?php _e('Title:'); ?></label>
            <input class="widefat"
                   name="<?php echo $this->get_field_name('title'); ?>"
                   type="text"
                   value="<?php echo $title; ?>" />
        </p>

        <p><strong>Display:</strong></p>
        <label>
            <input type="radio"
                   name="<?php echo $this->get_field_name('display'); ?>"
                   value="icons" <?php checked($display, "icons"); ?>>
            Icons
        </label><br>

        <label>
            <input type="radio"
                   name="<?php echo $this->get_field_name('display'); ?>"
                   value="labels" <?php checked($display, "labels"); ?>>
            Labels
        </label><br>

        <label>
            <input type="radio"
                   name="<?php echo $this->get_field_name('display'); ?>"
                   value="both" <?php checked($display, "both"); ?>>
            Both
        </label>

        <?php
    }
}

/* ✅ Modern replacement for create_function */
add_action('widgets_init', function() {
    register_widget('My_SocialNetworksWidget');
});