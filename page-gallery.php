<?php
/**
 * Gallery page.
 */

$gallery_items = [
    ['category' => 'portfolio-3', 'label' => 'Porfolio 3', 'file' => 'Tracing-hair-cracks-and-or-dry-solder-points-scaled', 'title' => 'Tracing hair cracks and dry solder points'],
    ['category' => 'portfolio-2', 'label' => 'Portfolio 2', 'file' => 'Repair-to-a-Burnout-furnace-scaled', 'title' => 'Repair to a Burnout furnace'],
    ['category' => 'portfolio-2', 'label' => 'Portfolio 2', 'file' => 'Our-state-of-the-art-workshop-is-always-busy-but-never-too-busy-scaled', 'title' => 'Our state of the art workshop is always busy, but never too busy'],
    ['category' => 'portfolio-2', 'label' => 'Portfolio 2', 'file' => 'Making-up-mechanical-parts-which-a-hard-to-obtain-scaled', 'title' => 'Making up mechanical parts which are hard to obtain'],
    ['category' => 'portfolio-2', 'label' => 'Portfolio 2', 'file' => 'Lab-handpieces-repair-and-testing-scaled', 'title' => 'Lab handpieces repair and testing'],
    ['category' => 'portfolio-2', 'label' => 'Portfolio 2', 'file' => 'Electronic-trouble-shooting-down-to-component-level-scaled', 'title' => 'Electronic trouble shooting down to component level'],
    ['category' => 'portfolio-1', 'label' => 'Portfolio 1', 'file' => 'Electronic-trouble-shooting-down-to-component-level-1-scaled', 'title' => 'Electronic trouble shooting down to component level'],
    ['category' => 'portfolio-1', 'label' => 'Portfolio 1', 'file' => 'Wet-area-for-casting-machines-boilout-units-steam-cleaner-etc-scaled', 'title' => 'Wet area for casting machines, boilout units, steam cleaner etc'],
    ['category' => 'portfolio-1', 'label' => 'Portfolio 1', 'file' => 'Steam-cleaner-repair-scaled', 'title' => 'Steam cleaner repair'],
    ['category' => 'portfolio-1', 'label' => 'Portfolio 1', 'file' => 'Repair-to-Palamat-and-Mestra-pressure-pots-scaled', 'title' => 'Repair to Palamat and Mestra pressure pots'],
    ['category' => 'portfolio-1', 'label' => 'Portfolio 1', 'file' => 'Repair-to-a-Sinter-Furnace-scaled', 'title' => 'Repair to a Sinter Furnace'],
];

get_header();
?>

<main id="main" class="inner-main">
    <section class="breadcrumb-band">
        <div class="site-container">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'e-repair'); ?></a>
            <span><?php esc_html_e('Gallery', 'e-repair'); ?></span>
        </div>
    </section>

    <section class="inner-content">
        <div class="site-container">
            <header class="gallery-header">
                <h1><?php esc_html_e('Gallery', 'e-repair'); ?></h1>
                <nav class="gallery-filter" aria-label="<?php esc_attr_e('Gallery filter', 'e-repair'); ?>">
                    <button type="button" class="active" data-filter="all"><?php esc_html_e('All', 'e-repair'); ?></button>
                    <button type="button" data-filter="portfolio-1"><?php esc_html_e('Portfolio 1', 'e-repair'); ?></button>
                    <button type="button" data-filter="portfolio-2"><?php esc_html_e('Portfolio 2', 'e-repair'); ?></button>
                    <button type="button" data-filter="portfolio-3"><?php esc_html_e('Portfolio 3', 'e-repair'); ?></button>
                </nav>
            </header>

            <ul class="gallery-grid">
                <?php foreach ($gallery_items as $item) : ?>
                    <li class="gallery-item" data-category="<?php echo esc_attr($item['category']); ?>">
                        <a href="<?php echo esc_url(get_theme_file_uri('images/gallery/full/' . $item['file'] . '.jpg')); ?>" target="_blank" rel="noopener">
                            <img src="<?php echo esc_url(get_theme_file_uri('images/gallery/thumbs/' . $item['file'] . '-200x200.jpg')); ?>" alt="<?php echo esc_attr($item['title']); ?>">
                            <span><?php echo esc_html($item['title']); ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
</main>

<?php
get_footer();
