<?php
/**
 * Custom Search Form.
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="search-form-wrap">
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'e-repair'); ?>" value="<?php echo get_search_query(); ?>" name="s" required />
        <button type="submit" class="search-submit"><?php echo esc_html_x('Go', 'submit button', 'e-repair'); ?></button>
    </div>
</form>
