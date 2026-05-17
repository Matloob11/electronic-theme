<?php

/*--------------------------------------------------------------
TEXT DOMAIN
--------------------------------------------------------------*/
load_theme_textdomain('e_repair', get_template_directory() . '/languages');


/*--------------------------------------------------------------
DEFINE PATHS
--------------------------------------------------------------*/
define('PARENT_DIR', get_template_directory());
define('CHILD_DIR', get_stylesheet_directory());

define('PARENT_URL', get_template_directory_uri());
define('CHILD_URL', get_stylesheet_directory_uri());


/*--------------------------------------------------------------
META BOX
--------------------------------------------------------------*/
define('RWMB_URL', trailingslashit(get_template_directory_uri() . '/includes/meta-box'));
define('RWMB_DIR', trailingslashit(get_template_directory() . '/includes/meta-box'));

require_once RWMB_DIR . 'meta-box.php';
require_once RWMB_DIR . 'config-meta-boxes.php';


/*--------------------------------------------------------------
THEME INCLUDES
--------------------------------------------------------------*/
require_once PARENT_DIR . '/includes/theme-scripts.php';

require_once PARENT_DIR . '/includes/sidebar-init.php';
require_once PARENT_DIR . '/includes/register-widgets.php';

require_once PARENT_DIR . '/includes/theme-init.php';
require_once PARENT_DIR . '/includes/theme-function.php';

require_once PARENT_DIR . '/includes/theme_shortcodes/shortcodes.php';
require_once PARENT_DIR . '/includes/theme_shortcodes/alert.php';
require_once PARENT_DIR . '/includes/theme_shortcodes/tabs.php';
require_once PARENT_DIR . '/includes/theme_shortcodes/toggle.php';
require_once PARENT_DIR . '/includes/theme_shortcodes/html.php';

require_once PARENT_DIR . '/includes/theme_shortcodes/tinymce/tinymce_shortcodes.php';

require_once PARENT_DIR . '/includes/aq_resizer.php';

require_once PARENT_DIR . '/includes/theme-postmeta.php';
require_once PARENT_DIR . '/includes/theme-slidermeta.php';
require_once PARENT_DIR . '/includes/theme-testimeta.php';
require_once PARENT_DIR . '/includes/theme-teammeta.php';
require_once PARENT_DIR . '/includes/theme-mypostmeta.php';

require_once PARENT_DIR . '/options.php';


/*--------------------------------------------------------------
OPTIONS FRAMEWORK
--------------------------------------------------------------*/
if (!function_exists('optionsframework_init')) {

    define('OPTIONS_FRAMEWORK_DIRECTORY', PARENT_URL . '/admin/');
    require_once PARENT_DIR . '/admin/options-framework.php';

}


/*--------------------------------------------------------------
SECURITY
Remove login errors
--------------------------------------------------------------*/
add_filter('login_errors', function () {
    return null;
});


/*--------------------------------------------------------------
COMMENT COUNT
Remove trackbacks
--------------------------------------------------------------*/
function comment_count($count) {

    if (!is_admin()) {

        global $id;

        $comments_by_type = separate_comments(
            get_comments('status=approve&post_id=' . $id)
        );

        return count($comments_by_type['comment']);
    }

    return $count;
}
add_filter('get_comments_number', 'comment_count');


/*--------------------------------------------------------------
BROWSER BODY CLASS
--------------------------------------------------------------*/
function browser_body_class($classes) {

    global $is_lynx, $is_gecko, $is_IE, $is_opera,
           $is_NS4, $is_safari, $is_chrome, $is_iphone;

    if ($is_lynx) $classes[] = 'lynx';
    elseif ($is_gecko) $classes[] = 'gecko';
    elseif ($is_opera) $classes[] = 'opera';
    elseif ($is_NS4) $classes[] = 'ns4';
    elseif ($is_safari) $classes[] = 'safari';
    elseif ($is_chrome) $classes[] = 'chrome';
    elseif ($is_IE) $classes[] = 'ie';
    else $classes[] = 'unknown';

    if ($is_iphone) $classes[] = 'iphone';

    return $classes;
}
add_filter('body_class', 'browser_body_class');


/*--------------------------------------------------------------
POST FORMATS
--------------------------------------------------------------*/
add_theme_support('post-formats', array(
    'aside',
    'gallery',
    'link',
    'image',
    'quote',
    'audio',
    'video'
));


/*--------------------------------------------------------------
EXCERPT LENGTH
--------------------------------------------------------------*/
function new_excerpt_length() {
    return 60;
}
add_filter('excerpt_length', 'new_excerpt_length');


/*--------------------------------------------------------------
EXCERPT READ MORE
--------------------------------------------------------------*/
function no_more_jumping($more) {

    global $post;

    return '&nbsp;<a href="' .
        get_permalink($post->ID) .
        '" class="read-more">Continue Reading</a>';
}
add_filter('excerpt_more', 'no_more_jumping');


/*--------------------------------------------------------------
SHORTCODES IN WIDGETS
--------------------------------------------------------------*/
add_filter('widget_text', 'do_shortcode');


/*--------------------------------------------------------------
CATEGORY ID CLASS
--------------------------------------------------------------*/
function category_id_class($classes) {

    global $post;

    if (!empty($post)) {

        foreach (get_the_category($post->ID) as $category) {

            $classes[] = 'cat-' . $category->cat_ID . '-id';

        }

    }

    return $classes;
}

add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');


/*--------------------------------------------------------------
IS BLOG FUNCTION
--------------------------------------------------------------*/
function is_blog() {

    global $post;

    if (!$post) return false;

    $posttype = get_post_type($post);

    return (
        (is_archive() || is_author() || is_category() ||
         is_home() || is_single() || is_tag())
        && $posttype == 'post'
    );
}


/*--------------------------------------------------------------
ADMIN JS
--------------------------------------------------------------*/
function custom_admin_js() {

    wp_enqueue_script(
        'custom-admin-js',
        get_template_directory_uri() . '/js/customAdmin-style.js',
        array('jquery'),
        null,
        true
    );
}

add_action('admin_enqueue_scripts', 'custom_admin_js');


/*--------------------------------------------------------------
GET PAGE BY TEMPLATE
--------------------------------------------------------------*/
function get_page_ID_by_page_template($template_name) {

    global $wpdb;

    return $wpdb->get_var(
        $wpdb->prepare(
            "SELECT post_id
             FROM $wpdb->postmeta
             WHERE meta_value = %s
             AND meta_key = '_wp_page_template'",
            $template_name
        )
    );
}


/*--------------------------------------------------------------
UPLOAD SIZE LIMIT
--------------------------------------------------------------*/
if ( ! function_exists('my_upload_size_limit') ) {

    function my_upload_size_limit($size) {
        return 104857600; // 100MB
    }

}

add_filter('upload_size_limit', 'my_upload_size_limit');


/*--------------------------------------------------------------
MENU ITEM CUSTOM CONTENT
--------------------------------------------------------------*/
function md_nmi_custom_content($content, $item_id, $original_content) {

    $content .= '<span class="page-title">' .
        $original_content .
        '</span>';

    return $content;
}

add_filter('nmi_menu_item_content', 'md_nmi_custom_content', 10, 3);

/*---------------------------------------------------
E-Repair Theme PHP8 / WordPress 6 Compatibility Fix
---------------------------------------------------*/

// Fix legacy widgets using old constructors
function erepair_fix_legacy_widgets() {

    global $wp_widget_factory;

    foreach ($wp_widget_factory->widgets as $class => $widget) {

        if (!method_exists($class, '__construct')) {

            if (method_exists($class, $class)) {

                $reflection = new ReflectionClass($class);
                $instance = $reflection->newInstanceWithoutConstructor();

                if (method_exists($instance, $class)) {
                    $instance->$class();
                }

                $wp_widget_factory->widgets[$class] = $instance;
            }
        }
    }
}
add_action('widgets_init', 'erepair_fix_legacy_widgets', 1);


// Replace deprecated create_function
if (!function_exists('erepair_login_errors_fix')) {
add_filter('login_errors', function(){ return null; });
}

// Prevent undefined index warnings
function erepair_safe_array($array, $key, $default = '') {
    return isset($array[$key]) ? $array[$key] : $default;
}

?>

