<?php
/**
 * The sidebar containing the blog widget area.
 */
?>
<aside id="secondary" class="blog-sidebar">
    <?php if (is_active_sidebar('blog-sidebar')) : ?>
        <?php dynamic_sidebar('blog-sidebar'); ?>
    <?php else : ?>
        <section class="widget widget_search">
            <h2 class="widget-title"><?php esc_html_e('Search', 'e-repair'); ?></h2>
            <?php get_search_form(); ?>
        </section>

        <section class="widget widget_categories">
            <h2 class="widget-title"><?php esc_html_e('Categories', 'e-repair'); ?></h2>
            <ul>
                <?php wp_list_categories(['title_li' => '']); ?>
            </ul>
        </section>

        <section class="widget widget_recent_entries">
            <h2 class="widget-title"><?php esc_html_e('Recent Posts', 'e-repair'); ?></h2>
            <ul>
                <?php
                $recent_posts = wp_get_recent_posts(['numberposts' => 5, 'post_status' => 'publish']);
                foreach ($recent_posts as $post_item) :
                ?>
                    <li>
                        <a href="<?php echo esc_url(get_permalink($post_item['ID'])); ?>">
                            <?php echo esc_html($post_item['post_title']); ?>
                        </a>
                        <span class="post-date"><?php echo get_the_date('', $post_item['ID']); ?></span>
                    </li>
                <?php endforeach; wp_reset_query(); ?>
            </ul>
        </section>
    <?php endif; ?>
</aside>
