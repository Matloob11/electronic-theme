<?php
/**
 * Site header.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="site-container header-inner">
        <div class="site-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?php echo esc_url(get_theme_file_uri('images/Rumotechnical-neon-sign-logo-small.png')); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
    </div>

    <nav class="primary-nav" aria-label="<?php esc_attr_e('Primary navigation', 'e-repair'); ?>">
        <div class="site-container">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'primary-menu',
                    'fallback_cb' => 'erepair_fallback_menu',
                    'depth' => 2,
                ]);
            } else {
                erepair_fallback_menu();
            }
            ?>
        </div>
    </nav>
</header>
