<?php
/**
 * Author archive template.
 */

get_header();

$curauth = get_queried_object();
if (!$curauth || !($curauth instanceof WP_User)) {
    if (get_query_var('author_name')) {
        $curauth = get_user_by('slug', get_query_var('author_name'));
    } else {
        $curauth = get_userdata(intval(get_query_var('author')));
    }
}
?>

<main id="main" class="inner-main">
    <section class="breadcrumb-band">
        <div class="site-container">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'e-repair'); ?></a>
            <span><?php esc_html_e('Author Profile', 'e-repair'); ?></span>
        </div>
    </section>

    <section class="inner-content">
        <div class="site-container">
            <div class="blog-layout">
                <div class="blog-main-content">
                    
                    <?php if ($curauth) : ?>
                        <!-- Author Profile Card -->
                        <div class="author-profile-card">
                            <div class="author-avatar">
                                <?php echo get_avatar($curauth->user_email, 120); ?>
                            </div>
                            <div class="author-bio">
                                <h1 class="author-name"><?php echo esc_html($curauth->display_name); ?></h1>
                                <p class="author-role"><?php esc_html_e('Author & Contributor', 'e-repair'); ?></p>
                                
                                <?php if ($curauth->description) : ?>
                                    <div class="author-description">
                                        <p><?php echo esc_html($curauth->description); ?></p>
                                    </div>
                                <?php else : ?>
                                    <div class="author-description">
                                        <p><?php esc_html_e('This author has not written a biography yet.', 'e-repair'); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Recent Posts Section -->
                        <div class="author-section-title">
                            <h3><?php printf(esc_html__('Recent Posts by %s', 'e-repair'), esc_html($curauth->display_name)); ?></h3>
                        </div>

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
                                <h2><?php esc_html_e('No posts yet', 'e-repair'); ?></h2>
                                <p><?php printf(esc_html__('It seems %s has not published any posts yet.', 'e-repair'), esc_html($curauth->display_name)); ?></p>
                            </div>
                        <?php endif; ?>

                        <!-- Recent Comments Section -->
                        <?php
                        $comments = get_comments([
                            'author_email' => $curauth->user_email,
                            'status'       => 'approve',
                            'number'       => 5,
                            'post_status'  => 'publish',
                        ]);
                        ?>
                        <div class="author-comments-card">
                            <div class="author-section-title">
                                <h3><?php printf(esc_html__('Recent Comments by %s', 'e-repair'), esc_html($curauth->display_name)); ?></h3>
                            </div>
                            <?php if ($comments) : ?>
                                <ul class="author-comments-list">
                                    <?php foreach ($comments as $comment) : ?>
                                        <li class="author-comment-item">
                                            <span class="comment-item-date"><?php echo esc_html(get_comment_date('', $comment)); ?></span>
                                            <p class="comment-item-link">
                                                <?php
                                                printf(
                                                    /* translators: 1: post link */
                                                    esc_html__('On %s', 'e-repair'),
                                                    '<a href="' . esc_url(get_comment_link($comment)) . '">' . esc_html(get_the_title($comment->comment_post_ID)) . '</a>'
                                                );
                                                ?>
                                            </p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else : ?>
                                <p class="no-comments-msg">
                                    <?php printf(esc_html__('No comments by %s yet.', 'e-repair'), esc_html($curauth->display_name)); ?>
                                </p>
                            <?php endif; ?>
                        </div>

                    <?php else : ?>
                        <div class="no-posts-found">
                            <h2><?php esc_html_e('Author Not Found', 'e-repair'); ?></h2>
                            <p><?php esc_html_e('The requested author profile does not exist.', 'e-repair'); ?></p>
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
