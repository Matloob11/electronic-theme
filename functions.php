<?php
/**
 * Theme setup for the rebuilt E Repair theme.
 */

if (!defined('ABSPATH')) {
    exit;
}

function erepair_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'e-repair'),
    ]);
}
add_action('after_setup_theme', 'erepair_setup');

function erepair_enqueue_assets(): void
{
    wp_enqueue_style(
        'e-repair-style',
        get_stylesheet_uri(),
        [],
        filemtime(get_stylesheet_directory() . '/style.css')
    );

    wp_enqueue_script(
        'e-repair-site',
        get_theme_file_uri('js/site.js'),
        [],
        filemtime(get_stylesheet_directory() . '/js/site.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'erepair_enqueue_assets');

function erepair_current_slug(): string
{
    $request_path = (string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $home_path = (string) parse_url(home_url('/'), PHP_URL_PATH);

    $request_path = '/' . trim($request_path, '/') . '/';
    $home_path = '/' . trim($home_path, '/') . '/';

    if ($home_path !== '//' && strncmp($request_path, $home_path, strlen($home_path)) === 0) {
        $request_path = '/' . ltrim(substr($request_path, strlen($home_path)), '/');
    }

    return trim($request_path, '/');
}

function erepair_route_slug(): string
{
    $slug = erepair_current_slug();

    if ($slug === 'about') {
        return 'about';
    }

    if (
        $slug === 'gallery'
        || $slug === 'about/gallery'
        || strncmp($slug, 'portfolio_category/', 19) === 0
        || strncmp($slug, 'portfolio/', 10) === 0
    ) {
        return 'gallery';
    }

    if ($slug === 'contact-us' || $slug === 'contacts') {
        return 'contact-us';
    }

    return '';
}

function erepair_reference_template(string $template): string
{
    if (!is_404()) {
        return $template;
    }

    $slug = erepair_route_slug();
    if ($slug === '') {
        return $template;
    }

    $file = get_stylesheet_directory() . '/page-' . $slug . '.php';
    if (!file_exists($file)) {
        return $template;
    }

    global $wp_query;
    $wp_query->is_404 = false;
    $wp_query->is_page = true;
    status_header(200);

    return $file;
}
add_filter('template_include', 'erepair_reference_template');

function erepair_document_title(array $parts): array
{
    $slug = erepair_route_slug();
    if ($slug === '') {
        return $parts;
    }

    if ($slug === 'about') {
        $parts['title'] = __('About', 'e-repair');
    } elseif ($slug === 'gallery') {
        $parts['title'] = __('Gallery', 'e-repair');
    } elseif ($slug === 'contact-us') {
        $parts['title'] = __('Contact Us', 'e-repair');
    }

    return $parts;
}
add_filter('document_title_parts', 'erepair_document_title');

function erepair_body_classes(array $classes): array
{
    $slug = erepair_route_slug();
    if ($slug !== '') {
        $classes[] = 'erepair-page-' . sanitize_html_class($slug);
    }

    return $classes;
}
add_filter('body_class', 'erepair_body_classes');

function erepair_handle_contact_form(): void
{
    $redirect = wp_get_referer() ?: home_url('/contact-us/');

    if (
        !isset($_POST['erepair_contact_nonce'])
        || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['erepair_contact_nonce'])), 'erepair_contact')
    ) {
        wp_safe_redirect(add_query_arg('sent', '0', $redirect));
        exit;
    }

    $name = sanitize_text_field(wp_unslash($_POST['your-name'] ?? ''));
    $email = sanitize_email(wp_unslash($_POST['your-email'] ?? ''));
    $subject = sanitize_text_field(wp_unslash($_POST['your-subject'] ?? 'Rumotechnical website enquiry'));
    $message = sanitize_textarea_field(wp_unslash($_POST['your-message'] ?? ''));

    if ($name === '' || !is_email($email)) {
        wp_safe_redirect(add_query_arg('sent', '0', $redirect));
        exit;
    }

    $body = sprintf(
        "Name: %s\nEmail: %s\nSubject: %s\n\n%s",
        $name,
        $email,
        $subject,
        $message
    );

    $sent = wp_mail(
        'service@rumotechnical.com',
        $subject !== '' ? $subject : 'Rumotechnical website enquiry',
        $body,
        ['Reply-To: ' . $name . ' <' . $email . '>']
    );

    wp_safe_redirect(add_query_arg('sent', $sent ? '1' : '0', $redirect));
    exit;
}
add_action('admin_post_erepair_contact', 'erepair_handle_contact_form');
add_action('admin_post_nopriv_erepair_contact', 'erepair_handle_contact_form');

function erepair_fallback_menu(): void
{
    $active_slug = erepair_route_slug();
    $items = [
        ['label' => 'Home', 'url' => home_url('/'), 'slug' => ''],
        ['label' => 'Gallery', 'url' => home_url('/gallery/'), 'slug' => 'gallery'],
        ['label' => 'Contact Us', 'url' => home_url('/contact-us/'), 'slug' => 'contact-us'],
        ['label' => 'About', 'url' => home_url('/about/'), 'slug' => 'about'],
    ];

    echo '<ul class="primary-menu">';
    foreach ($items as $item) {
        $is_home = $item['slug'] === '' && $active_slug === '' && (is_front_page() || is_home());
        $class = $item['slug'] === $active_slug || $is_home ? ' class="current-menu-item"' : '';
        printf(
            '<li%s><a href="%s">%s</a></li>',
            $class,
            esc_url($item['url']),
            esc_html($item['label'])
        );
    }
    echo '</ul>';
}

function erepair_widgets_init(): void
{
    register_sidebar([
        'name'          => __('Blog Sidebar', 'e-repair'),
        'id'            => 'blog-sidebar',
        'description'   => __('Add widgets here to appear in your blog sidebar.', 'e-repair'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);

    register_sidebar([
        'name'          => __('Sidebar Left', 'e-repair'),
        'id'            => 'left-sidebar',
        'description'   => __('Add widgets here to appear in the left sidebar of page templates.', 'e-repair'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);

    register_sidebar([
        'name'          => __('Sidebar Right', 'e-repair'),
        'id'            => 'right-sidebar',
        'description'   => __('Add widgets here to appear in the right sidebar of page templates.', 'e-repair'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'erepair_widgets_init');

/**
 * Register Legacy Custom Post Types to maintain backwards compatibility
 */
function erepair_register_custom_post_types(): void
{
    // Testimonials CPT
    register_post_type('testi', [
        'label'        => __('Testimonial', 'e-repair'),
        'public'       => true,
        'show_ui'      => true,
        'menu_position'=> 5,
        'supports'     => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'has_archive'  => false,
    ]);

    // Portfolio CPT
    register_post_type('portfolio', [
        'label'        => __('Portfolio', 'e-repair'),
        'public'       => true,
        'show_ui'      => true,
        'menu_position'=> 5,
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments'],
        'has_archive'  => true,
        'hierarchical' => true,
    ]);
    register_taxonomy('portfolio_category', 'portfolio', [
        'hierarchical' => true,
        'label'        => __('Portfolio Categories', 'e-repair'),
        'rewrite'      => ['slug' => 'portfolio-category'],
    ]);

    // Offers CPT
    register_post_type('offers', [
        'label'        => __('Offers', 'e-repair'),
        'public'       => true,
        'show_ui'      => true,
        'menu_position'=> 5,
        'supports'     => ['title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'],
        'has_archive'  => true,
    ]);

    // Events CPT
    register_post_type('events', [
        'label'        => __('Events', 'e-repair'),
        'public'       => true,
        'show_ui'      => true,
        'menu_position'=> 5,
        'supports'     => ['title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'],
        'has_archive'  => true,
    ]);
}
add_action('init', 'erepair_register_custom_post_types');


