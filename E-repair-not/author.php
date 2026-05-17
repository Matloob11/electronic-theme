<?php get_header(); ?>

<div class="container">
    <div class="clearfix">
        <div class="row">
            <div class="span9">  
               
                  <div id="content">
                  	<?php
                      if(isset($_GET['author_name'])) :
                        $curauth = get_userdatabylogin($author_name);
                        else :
                        $curauth = get_userdata(intval($author));
                      endif;
                    ?>
                    <div class="author-info">
                      <h1><?php _e('About:', 'e_repair'); ?> <?php echo $curauth->display_name; ?></h1>
                      <p class="avatar">
                        <?php if(function_exists('get_avatar')) { echo get_avatar( $curauth->user_email, $size = '120' ); } /* Displays the Gravatar based on the author's email address. Visit Gravatar.com for info on Gravatars */ ?>
                      </p>
                      
                      <?php if($curauth->description !="") { /* Displays the author's description from their Wordpress profile */ ?>
                        <p><?php echo $curauth->description; ?></p>
                      <?php } ?>
                    </div><!--.author-->

                    <h3><?php _e('Recent Posts by', 'e_repair'); ?> <?php echo $curauth->display_name; ?></h3>


                     <?
                      $ask2 = get_post_meta(get_page_ID_by_page_template('page-blog.php'), 'seo_noindex2', true);
                      if ($ask2=='on') { echo '<div id="recent-author-posts" class="gridLayout">'; }  
                      else { echo '<div id="recent-author-posts">'; }
                    ?>
                      
                  		
                  		
                  		<?php 
                                  
                  		if (have_posts()) : while (have_posts()) : the_post(); 
                  		
                  				// The following determines what the post format is and shows the correct file accordingly
                  				$format = get_post_format();
                  				get_template_part( 'includes/post-formats/'.$format );
                  				
                  				if($format == '')
                  				get_template_part( 'includes/post-formats/standard' );
                  				
                  		 endwhile; else:
                  		 
                  		 ?>
                  		 
                  		 <div class="no-results">
                  			<?php echo '<p><strong>' . __('No post yet.', 'e_repair') . '</strong></p>'; ?>
                  		</div><!--no-results-->
                  		
                  		<?php endif; ?>
                      
                    </div><!--#recentPosts-->
                    
                    <?php get_template_part('includes/post-formats/post-nav'); ?>
                    
                    <div id="recent-author-comments">
                      <h3><?php _e('Recent Comments by', 'e_repair'); ?> <?php echo $curauth->display_name; ?></h3>
                        <?php
                          $number=5; // number of recent comments to display
                          $comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' and comment_author_email='$curauth->user_email' ORDER BY comment_date_gmt DESC LIMIT $number");
                        ?>
                        <ul>
                          <?php
                            if ( $comments ) : foreach ( (array) $comments as $comment) :
                            echo  '<li class="recentcomments">' . sprintf(__('%1$s on %2$s'), get_comment_date(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
                          endforeach; else: ?>
                                    <p>
                                      <?php _e('No comments by', 'e_repair'); ?> <?php echo $curauth->display_name; ?> <?php _e('yet.', 'e_repair'); ?>
                                    </p>
                          <?php endif; ?>
                              </ul>
                    </div><!--#recentAuthorComments-->  
                </div><!--#content-->
            </div>
            <?php get_sidebar('blog'); ?>
        </div>  
    </div>
</div>
<?php get_footer(); ?>