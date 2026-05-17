<?php
/**
 * Site footer.
 */
?>
<footer class="site-footer">
    <div class="site-container footer-inner">
        <div class="footer-brand">
            <a class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('images/Rumotechnical-neon-sign-logo-small.png')); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
            <p class="footer-note"><?php esc_html_e('(C) Copyright Rumotechnical, site developed and maintained by PHY', 'e-repair'); ?></p>
        </div>
        <a class="footer-partner" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('images/PHY-Mb-1024x493.jpg')); ?>" alt="<?php esc_attr_e('PHY Mb: 04 6662 0011', 'e-repair'); ?>">
        </a>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
