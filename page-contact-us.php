<?php
/**
 * Contact page.
 */

$sent = isset($_GET['sent']) ? sanitize_text_field(wp_unslash($_GET['sent'])) : '';

get_header();
?>

<main id="main" class="inner-main">
    <section class="breadcrumb-band">
        <div class="site-container">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'e-repair'); ?></a>
            <span><?php esc_html_e('Contact Us', 'e-repair'); ?></span>
        </div>
    </section>

    <section class="inner-content">
        <div class="site-container contact-layout">
            <div class="contact-details">
                <h1><?php esc_html_e('Contact address', 'e-repair'); ?></h1>
                <h2><?php echo wp_kses_post(__('Rumotechnical &ndash; electronic repair', 'e-repair')); ?></h2>
                <p>
                    <?php esc_html_e('95 Thornbill Drive, Upper Caboolture, Qld 4510', 'e-repair'); ?><br>
                    <?php esc_html_e('Telephone:', 'e-repair'); ?>
                    <a href="tel:+61411407611"><?php esc_html_e('+61 4 1140 7611', 'e-repair'); ?></a><br>
                    <?php esc_html_e('E-mail:', 'e-repair'); ?>
                    <a href="mailto:service@rumotechnical.com"><?php esc_html_e('service@rumotechnical.com', 'e-repair'); ?></a>
                </p>

                <div class="map-frame">
                    <iframe title="<?php esc_attr_e('Rumotechnical map', 'e-repair'); ?>" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3551.282054966421!2d152.91292497638008!3d-27.115924701726843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b93f6ca0fe48105%3A0xbc3a8e22555d2950!2s95%20Thornbill%20Dr%2C%20Upper%20Caboolture%20QLD%204510!5e0!3m2!1sen!2sau!4v1726215305562!5m2!1sen!2sau" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="contact-form-panel">
                <h2><?php esc_html_e('Contact Form', 'e-repair'); ?></h2>

                <?php if ($sent === '1') : ?>
                    <p class="form-message success"><?php esc_html_e('Thank you. Your message has been sent.', 'e-repair'); ?></p>
                <?php elseif ($sent === '0') : ?>
                    <p class="form-message error"><?php esc_html_e('Message could not be sent. Please email service@rumotechnical.com directly.', 'e-repair'); ?></p>
                <?php endif; ?>

                <form class="contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                    <input type="hidden" name="action" value="erepair_contact">
                    <?php wp_nonce_field('erepair_contact', 'erepair_contact_nonce'); ?>

                    <label>
                        <?php esc_html_e('Your Name (required)', 'e-repair'); ?>
                        <input type="text" name="your-name" required>
                    </label>

                    <label>
                        <?php esc_html_e('Your Email (required)', 'e-repair'); ?>
                        <input type="email" name="your-email" required>
                    </label>

                    <label>
                        <?php esc_html_e('Subject', 'e-repair'); ?>
                        <input type="text" name="your-subject">
                    </label>

                    <label>
                        <?php esc_html_e('Your Message', 'e-repair'); ?>
                        <textarea name="your-message" rows="8"></textarea>
                    </label>

                    <button type="submit"><?php esc_html_e('Send', 'e-repair'); ?></button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
