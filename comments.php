<?php
/**
 * The template for displaying comments.
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ('1' === $comment_count) {
                printf(
                    /* translators: %s: post title */
                    esc_html__('1 Comment on &ldquo;%s&rdquo;', 'e-repair'),
                    esc_html(get_the_title())
                );
            } else {
                printf(
                    /* translators: 1: number of comments, 2: post title */
                    esc_html(_n('%1$s Comment on &ldquo;%2$s&rdquo;', '%1$s Comments on &ldquo;%2$s&rdquo;', $comment_count, 'e-repair')),
                    number_format_i18n($comment_count),
                    esc_html(get_the_title())
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments([
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size'=> 60,
            ]);
            ?>
        </ol>

        <?php
        the_comments_navigation([
            'prev_text' => esc_html__('Older Comments', 'e-repair'),
            'next_text' => esc_html__('Newer Comments', 'e-repair'),
        ]);
        ?>

        <?php if (!comments_open()) : ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'e-repair'); ?></p>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $html_req = $req ? " required='required'" : '';

    comment_form([
        'class_form' => 'comment-form',
        'title_reply' => __('Leave a Comment', 'e-repair'),
        'title_reply_to' => __('Leave a Reply to %s', 'e-repair'),
        'cancel_reply_link' => __('Cancel Reply', 'e-repair'),
        'label_submit' => __('Submit Comment', 'e-repair'),
        'submit_class' => 'comment-submit-btn',
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . esc_html__('Comment', 'e-repair') . '</label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>',
        'fields' => [
            'author' => '<p class="comment-form-author"><label for="author">' . esc_html__('Name', 'e-repair') . ($req ? ' <span class="required">*</span>' : '') . '</label><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" maxlength="245"' . $html_req . ' /></p>',
            'email' => '<p class="comment-form-email"><label for="email">' . esc_html__('Email', 'e-repair') . ($req ? ' <span class="required">*</span>' : '') . '</label><input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $html_req . ' /></p>',
            'url' => '<p class="comment-form-url"><label for="url">' . esc_html__('Website', 'e-repair') . '</label><input id="url" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" maxlength="200" /></p>',
        ],
    ]);
    ?>

</div>
