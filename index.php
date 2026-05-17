<?php
/**
 * Default template.
 */

get_header();
?>

<main id="main" class="content-area">
    <div class="site-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('No content found.', 'e-repair'); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
