<?php
/**
 * The template for displaying single testimonial posts.
 *
 * @package E-repair
 */

get_header();
?>

<main id="main" class="inner-main">
    <section class="breadcrumb-band">
        <div class="site-container">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'e-repair'); ?></a>
            <a href="<?php echo esc_url(get_post_type_archive_link('testi') ?: home_url('/testimonials/')); ?>"><?php esc_html_e('Testimonials', 'e-repair'); ?></a>
            <span><?php the_title(); ?></span>
        </div>
    </section>

    <section class="inner-content">
        <div class="site-container">
            <div class="right-sidebar-layout">
                <div class="main-content-area">
                    <?php
                    while (have_posts()) : the_post();
                        $custom = get_post_custom(get_the_ID());
                        $testiname = isset($custom['my_testi_caption'][0]) ? esc_html($custom['my_testi_caption'][0]) : '';
                        $testiurl  = isset($custom['my_testi_url'][0]) ? esc_url($custom['my_testi_url'][0]) : '';
                        $testiinfo = isset($custom['my_testi_info'][0]) ? esc_html($custom['my_testi_info'][0]) : '';
                    ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('single-post-card single-testimonial'); ?>>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header>

                            <div class="entry-content">
                                <div class="testimonial-bubble">
                                    <div class="testimonial-quote-icon">“</div>
                                    <div class="testimonial-text">
                                        <?php the_content(); ?>
                                    </div>
                                </div>

                                <div class="testimonial-author-meta">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="testimonial-avatar">
                                            <?php the_post_thumbnail([80, 80]); ?>
                                        </div>
                                    <?php else : ?>
                                        <div class="testimonial-avatar-placeholder large">
                                            <span><?php echo esc_html(substr($testiname ?: get_the_title(), 0, 1)); ?></span>
                                        </div>
                                    <?php endif; ?>
                                    <div class="testimonial-author-details">
                                        <h3 class="testimonial-author-name"><?php echo $testiname ?: get_the_title(); ?></h3>
                                        <?php if ($testiinfo) : ?>
                                            <span class="testimonial-author-info"><?php echo $testiinfo; ?></span>
                                        <?php endif; ?>
                                        <?php if ($testiurl) : ?>
                                            <a class="testimonial-author-link" href="<?php echo $testiurl; ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($testiurl); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <nav class="navigation post-navigation" aria-label="<?php esc_attr_e('Testimonials', 'e-repair'); ?>">
                            <div class="nav-links">
                                <div class="nav-previous">
                                    <?php previous_post_link('%link', '<span class="meta-nav" aria-hidden="true">' . esc_html__('Previous Testimonial', 'e-repair') . '</span> <span class="post-title">%title</span>'); ?>
                                </div>
                                <div class="nav-next">
                                    <?php next_post_link('%link', '<span class="meta-nav" aria-hidden="true">' . esc_html__('Next Testimonial', 'e-repair') . '</span> <span class="post-title">%title</span>'); ?>
                                </div>
                            </div>
                        </nav>
                    <?php endwhile; ?>
                </div>

                <?php get_sidebar('right'); ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
