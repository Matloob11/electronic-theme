<?php
/**
 * About page.
 */

get_header();
?>

<main id="main" class="inner-main">
    <section class="breadcrumb-band">
        <div class="site-container">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'e-repair'); ?></a>
            <span><?php esc_html_e('About', 'e-repair'); ?></span>
        </div>
    </section>

    <section class="inner-content">
        <div class="site-container">
            <article class="about-layout">
                <div class="about-copy">
                    <h1><?php esc_html_e('Little About Us', 'e-repair'); ?></h1>
                    <p><strong><?php esc_html_e('RUMOTECHNICAL', 'e-repair'); ?></strong></p>
                    <p><?php esc_html_e('Rumotechnical started operating in May 1994 meaning, that we are now in our 4th decade of successfully repairing dental laboratory equipment.', 'e-repair'); ?></p>
                    <p><?php esc_html_e('Authorized (also warranty issues) for VITA, Ivoclar, Bego, Wassermann and Renfert equipment.', 'e-repair'); ?></p>
                    <p><?php esc_html_e('We repair all leading brands of Furnaces supplied from VITA, Bifa, Degussa, Mestra and Ivoclar Burnout, Porcelain, Glazing, Sinter and Pressing furnaces.', 'e-repair'); ?></p>

                    <ul class="repair-list">
                        <li><?php esc_html_e('Lab Handpieces: NSK, Kavo, Schick, Marathon, Saeshin etc', 'e-repair'); ?></li>
                        <li><?php esc_html_e('Steam cleaner: Bego, Renfert, Reitel, Wassermann, Mestra and others.', 'e-repair'); ?></li>
                        <li><?php esc_html_e('Suction units: Renfert, Kavo, Zubler and others.', 'e-repair'); ?></li>
                        <li><?php esc_html_e('Boilout and polymerisation units: Wassermann, Mestra, Ivoclar', 'e-repair'); ?></li>
                        <li><?php esc_html_e('Sand blasters, Model Grinder, Vacuum mixer', 'e-repair'); ?></li>
                        <li><?php esc_html_e('Pressure pots: Palamat and Mestra', 'e-repair'); ?></li>
                        <li><?php esc_html_e('Forming equipment.', 'e-repair'); ?></li>
                        <li><?php esc_html_e('Duplicating machines: Bego and Mestra', 'e-repair'); ?></li>
                    </ul>

                    <p><?php esc_html_e('It is our highest priority to conduct repairs with only genuine parts and dealing with: Alphabond, Schein Halas, Ultimate Dental Supplies, Innovatio Dental Supplies, Dentsply, and Ivoclar.', 'e-repair'); ?></p>
                    <p><?php esc_html_e('If you intend to upgrade your equipment, but unsure which one to choose, based on our repair expertise, we are happy to give you advice which one to choose and which one to stay away from.', 'e-repair'); ?></p>
                    <p><?php esc_html_e('As we always striving to achieve the best repair (technical and economically) possible, the same care we take on keeping our webpage monitored and updated, which is done by a very good technicical colleague.', 'e-repair'); ?></p>
                </div>

                <aside class="about-media">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/Rumotechnical-neon-sign-logo.png')); ?>" alt="<?php esc_attr_e('Rumotechnical neon sign logo', 'e-repair'); ?>">
                </aside>
            </article>
        </div>
    </section>
</main>

<?php
get_footer();
