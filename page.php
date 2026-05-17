<?php
/**
 * Page template.
 */

get_header();
?>

<main id="main" class="content-area">
    <div class="site-container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php
get_footer();
