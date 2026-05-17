<?php
/**
 * Single blog post.
 */

get_header();
?>

<main id="main" class="inner-main">
    <section class="breadcrumb-band">
        <div class="site-container">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'e-repair'); ?></a>
            <span>
                <a href="<?php echo esc_url(get_option('show_on_front') === 'page' ? get_permalink(get_option('page_for_posts')) : home_url('/')); ?>">
                    <?php esc_html_e('Blog', 'e-repair'); ?>
                </a>
            </span>
            <span><?php the_title(); ?></span>
        </div>
    </section>

    <section class="inner-content">
        <div class="site-container">
            <div class="blog-layout">
                <div class="blog-main-content">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('single-post-card'); ?>>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                                <div class="entry-meta">
                                    <span class="meta-date">
                                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                            <?php echo esc_html(get_the_date('M d, Y')); ?>
                                        </time>
                                    </span>
                                    <span class="meta-author">
                                        <?php esc_html_e('by', 'e-repair'); ?> <?php the_author_posts_link(); ?>
                                    </span>
                                    <span class="meta-categories">
                                        <?php esc_html_e('in', 'e-repair'); ?> <?php the_category(', '); ?>
                                    </span>
                                    <?php if (comments_open() || get_comments_number()) : ?>
                                        <span class="meta-comments">
                                            <?php comments_popup_link(__('No Comments', 'e-repair'), __('1 Comment', 'e-repair'), __('% Comments', 'e-repair')); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </header>

                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-featured-image">
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                            <?php endif; ?>

                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>

                            <footer class="entry-footer">
                                <?php the_tags('<div class="post-tags"><span class="tags-label">' . esc_html__('Tags:', 'e-repair') . '</span> ', ', ', '</div>'); ?>
                            </footer>
                        </article>

                        <?php
                        the_post_navigation([
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous Post', 'e-repair') . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__('Next Post', 'e-repair') . '</span> <span class="nav-title">%title</span>',
                        ]);
                        ?>

                        <?php
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>

                    <?php endwhile; endif; ?>
                </div>

                <?php get_sidebar('blog'); ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
