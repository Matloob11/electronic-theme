<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header();
?>

<main id="main" class="inner-main">
    <section class="breadcrumb-band">
        <div class="site-container">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'e-repair'); ?></a>
            <span><?php esc_html_e('Page Not Found', 'e-repair'); ?></span>
        </div>
    </section>

    <section class="inner-content">
        <div class="site-container">
            <div class="error-404-card">
                <div class="error-code">404</div>
                <h1 class="error-title"><?php esc_html_e('Sorry!', 'e-repair'); ?></h1>
                <h2 class="error-subtitle"><?php esc_html_e('Page Not Found', 'e-repair'); ?></h2>
                <p class="error-desc">
                    <?php esc_html_e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'e-repair'); ?>
                    <br><br>
                    <?php esc_html_e('Please try using our search box below to find what you need.', 'e-repair'); ?>
                </p>
                
                <div class="error-search-form">
                    <?php get_search_form(); ?>
                </div>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="return-home-btn">
                    <?php esc_html_e('Return to the Home Page', 'e-repair'); ?>
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
