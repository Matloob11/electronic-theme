<?php
/**
 * Template Name: Testimonials
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
            <div class="right-sidebar-layout">
                <div class="main-content-area">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('single-page-card testimonial-page-intro'); ?>>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header>
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                        </article>
                    <?php endwhile; endif; ?>

                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);
                    $args = [
                        'post_type'      => 'testi',
                        'posts_per_page' => 6,
                        'paged'          => $paged,
                    ];
                    $testi_query = new WP_Query($args);

                    if ($testi_query->have_posts()) :
                    ?>
                        <div class="testimonials-grid">
                            <?php
                            while ($testi_query->have_posts()) : $testi_query->the_post();
                                $custom = get_post_custom(get_the_ID());
                                $testiname = isset($custom['my_testi_caption'][0]) ? esc_html($custom['my_testi_caption'][0]) : '';
                                $testiurl  = isset($custom['my_testi_url'][0]) ? esc_url($custom['my_testi_url'][0]) : '';
                                $testiinfo = isset($custom['my_testi_info'][0]) ? esc_html($custom['my_testi_info'][0]) : '';
                            ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class('testimonial-card'); ?>>
                                    <div class="testimonial-bubble">
                                        <div class="testimonial-quote-icon">“</div>
                                        <div class="testimonial-text">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <div class="testimonial-author-meta">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="testimonial-avatar">
                                                <?php the_post_thumbnail([60, 60]); ?>
                                            </div>
                                        <?php else : ?>
                                            <div class="testimonial-avatar-placeholder">
                                                <span><?php echo esc_html(substr($testiname ?: get_the_title(), 0, 1)); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <div class="testimonial-author-details">
                                            <h3 class="testimonial-author-name"><?php echo $testiname ?: get_the_title(); ?></h3>
                                            <?php if ($testiinfo) : ?>
                                                <span class="testimonial-author-info"><?php echo $testiinfo; ?></span>
                                            <?php endif; ?>
                                            <?php if ($testiurl) : ?>
                                                <a class="testimonial-author-link" href="<?php echo $testiurl; ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html(parse_url($testiurl, PHP_URL_HOST) ?: $testiurl); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>

                        <?php
                        $big = 999999999;
                        echo '<div class="navigation pagination"><div class="nav-links">';
                        echo paginate_links([
                            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format'    => '?paged=%#%',
                            'current'   => max(1, $paged),
                            'total'     => $testi_query->max_num_pages,
                            'prev_text' => esc_html__('Previous', 'e-repair'),
                            'next_text' => esc_html__('Next', 'e-repair'),
                            'type'      => 'plain',
                        ]);
                        echo '</div></div>';
                        ?>

                    <?php
                        wp_reset_postdata();
                    else :
                    ?>
                        <div class="no-posts-found">
                            <h2><?php esc_html_e('No Testimonials Found', 'e-repair'); ?></h2>
                            <p><?php esc_html_e('It seems there are no testimonials available right now.', 'e-repair'); ?></p>
                        </div>
                    <?php endif; ?>
                </div>

                <?php get_sidebar('right'); ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
