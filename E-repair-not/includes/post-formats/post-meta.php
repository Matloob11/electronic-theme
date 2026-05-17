<?php $post_meta = of_get_option('post_meta'); ?>
<?php if ($post_meta=='true' || $post_meta=='') { ?>
	<div class="post-meta">

		<?php _e('At ', 'e_repair'); ?>
		<time datetime="<?php the_time('m d,Y\TH:i'); ?>">
			<?php the_time('M d, Y') ?>
		</time>
		<?php _e('/ by ', 'e_repair'); the_author_posts_link();
		_e(' / In ', 'e_repair');
		the_category(' '); _e(' / ');	?>

	</div><!--.post-meta-->
<?php } ?>