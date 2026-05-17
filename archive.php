<?php
/**
 * Archive template.
 */

get_header();
?>

<main id="main" class="inner-main">
    <section class="breadcrumb-band">
        <div class="site-container">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'e-repair'); ?></a>
            <span><?php the_archive_title(); ?></span>
        </div>
    </section>

    <section class="inner-content">
        <div class="site-container">
            <div class="blog-layout">
                <div class="blog-main-content">
                    <header class="archive-header">
                        <h1 class="archive-title"><?php the_archive_title(); ?></h1>
                        <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
                    </header>

                    <?php if (have_posts()) : ?>
                        <div class="posts-grid">
                            <?php while (have_posts()) : the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class('post-excerpt-card'); ?>>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('medium'); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>

                                    <div class="post-excerpt-content">
                                        <header class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                            </h2>
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
                                            </div>
                                        </header>

                                        <div class="entry-summary">
                                            <?php the_excerpt(); ?>
                                        </div>

                                        <a href="<?php the_permalink(); ?>" class="read-more-btn">
                                            <?php esc_html_e('Read More', 'e-repair'); ?>
                                        </a>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>

                        <?php
                        the_posts_pagination([
                            'prev_text' => esc_html__('Previous', 'e-repair'),
                            'next_text' => esc_html__('Next', 'e-repair'),
                        ]);
                        ?>

                    <?php else : ?>
                        <div class="no-posts-found">
                            <h2><?php esc_html_e('No posts found', 'e-repair'); ?></h2>
                            <p><?php esc_html_e('It seems there is no content available for this archive.', 'e-repair'); ?></p>
                            <?php get_search_form(); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php get_sidebar('blog'); ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
