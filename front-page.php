<?php
/**
 * Front page template.
 */

get_header();
?>

<main id="main" class="site-main">
    <section class="home-stage" aria-label="<?php esc_attr_e('Service and repairs', 'e-repair'); ?>">
        <div class="site-container">
            <div class="hero-frame">
                <img src="<?php echo esc_url(get_theme_file_uri('images/slide1.jpg')); ?>" alt="<?php esc_attr_e('Electronics service and repair', 'e-repair'); ?>">
                <div class="hero-caption"><?php esc_html_e('Service & Repairs', 'e-repair'); ?></div>
            </div>
        </div>
    </section>

    <section class="circuit-band" aria-hidden="true"></section>

    <section class="workshop-section">
        <div class="site-container">
            <h1><?php echo wp_kses_post(__('Our Workshop &ndash; Images', 'e-repair')); ?></h1>

            <div class="workshop-slider" aria-label="<?php esc_attr_e('Workshop image slider', 'e-repair'); ?>">
                <figure class="workshop-slide slide-one">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/workshop/Steam-cleaner-repair-scaled-900x300.jpg')); ?>" alt="<?php esc_attr_e('Steam cleaner repair', 'e-repair'); ?>">
                    <figcaption><?php esc_html_e('Steam cleaner repair', 'e-repair'); ?></figcaption>
                </figure>
                <figure class="workshop-slide slide-two">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/workshop/Repair-to-Palamat-and-Mestra-pressure-pots-scaled-900x300.jpg')); ?>" alt="<?php esc_attr_e('Repair to Palamat and Mestra pressure pots', 'e-repair'); ?>">
                    <figcaption><?php esc_html_e('Repair to Palamat and Mestra pressure pots', 'e-repair'); ?></figcaption>
                </figure>
                <figure class="workshop-slide slide-three">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/workshop/Repair-to-a-Sinter-Furnace-scaled-900x300.jpg')); ?>" alt="<?php esc_attr_e('Repair to a Sinter Furnace', 'e-repair'); ?>">
                    <figcaption><?php esc_html_e('Repair to a Sinter Furnace', 'e-repair'); ?></figcaption>
                </figure>
                <figure class="workshop-slide slide-four">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/workshop/Our-state-of-the-art-workshop-is-always-busy-but-never-too-busy-scaled-900x300.jpg')); ?>" alt="<?php esc_attr_e('Workshop equipment repair area', 'e-repair'); ?>">
                    <figcaption><?php esc_html_e('Our state of the art workshop is always busy, but never too busy', 'e-repair'); ?></figcaption>
                </figure>
            </div>

            <div class="workshop-thumbs" aria-label="<?php esc_attr_e('Workshop gallery thumbnails', 'e-repair'); ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('images/workshop/Making-up-mechanical-parts-which-a-hard-to-obtain-scaled-900x300.jpg')); ?>" alt="<?php esc_attr_e('Making up mechanical parts which are hard to obtain', 'e-repair'); ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('images/workshop/Lab-handpieces-repair-and-testing-scaled-900x300.jpg')); ?>" alt="<?php esc_attr_e('Lab handpieces repair and testing', 'e-repair'); ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('images/workshop/Electronic-trouble-shooting-down-to-component-level-scaled-900x300.jpg')); ?>" alt="<?php esc_attr_e('Electronic trouble shooting down to component level', 'e-repair'); ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('images/workshop/Wet-area-for-casting-machines-boilout-units-steam-cleaner-etc-scaled-900x300.jpg')); ?>" alt="<?php esc_attr_e('Wet area for casting machines, boilout units and steam cleaner', 'e-repair'); ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('images/workshop/Tracing-hair-cracks-and-or-dry-solder-points-scaled-900x300.jpg')); ?>" alt="<?php esc_attr_e('Tracing hair cracks and dry solder points', 'e-repair'); ?>">
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
