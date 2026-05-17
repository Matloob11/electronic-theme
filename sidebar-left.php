<?php
/**
 * The sidebar containing the left widget area.
 */
?>
<aside id="sidebar-left" class="left-sidebar">
    <?php if (is_active_sidebar('left-sidebar')) : ?>
        <?php dynamic_sidebar('left-sidebar'); ?>
    <?php else : ?>
        <section class="widget widget_pages">
            <h2 class="widget-title"><?php esc_html_e('Pages', 'e-repair'); ?></h2>
            <ul>
                <?php wp_list_pages(['title_li' => '']); ?>
            </ul>
        </section>

        <section class="widget widget_categories">
            <h2 class="widget-title"><?php esc_html_e('Categories', 'e-repair'); ?></h2>
            <ul>
                <?php wp_list_categories(['title_li' => '']); ?>
            </ul>
        </section>
    <?php endif; ?>
</aside>
