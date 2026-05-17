<?php
/**
 * Template Name: Fullwidth Page with Left Sidebar
 *
 * @package E-repair
 */

get_header();
?>

<main id="main" class="inner-main">
    <section class="breadcrumb-band">
        <div class="site-container">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'e-repair'); ?></a>
            <span><?php the_title(); ?></span>
        </div>
    </section>

    <section class="inner-content">
        <div class="site-container">
            <div class="left-sidebar-layout">
                <?php get_sidebar('left'); ?>
                
                <div class="main-content-area">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('single-page-card'); ?>>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header>

                            <div class="entry-content">
                                <?php
                                the_content();
                                
                                wp_link_pages([
                                    'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'e-repair') . '</span>',
                                    'after'       => '</div>',
                                    'link_before' => '<span>',
                                    'link_after'  => '</span>',
                                ]);
                                ?>
                            </div>
                        </article>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
