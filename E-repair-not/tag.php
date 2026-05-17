<?php get_header(); ?>
<div id="wrap_all" class="clearfix">
	<div class="container_12">
    	<div class="grid_9">  
        	<div class="wrap_content"> 
				<div id="content">
				  <div class="header-title">
				  	<h1><?php printf( __( 'Tag Archives: %s' ),'<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>
				  </div>
				  <!-- displays the tag's description from the Wordpress admin -->
				  <?php echo tag_description(); ?>

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
							<?php echo '<p><strong>' . __('There has been an error.', 'e_repair') . '</strong></p>'; ?>
							<p><?php _e('We apologize for any inconvenience, please', 'e_repair'); ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php _e('return to the home page', 'e_repair'); ?></a> <?php _e('or use the search form below.', 'e_repair'); ?></p>
							<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
						</div><!--no-results-->
						
					<?php endif; ?>
				    
				  <?php get_template_part('includes/post-formats/post-nav'); ?>
				  
				</div><!--#content-->
			</div>
		</div>
		<?php get_sidebar('right'); ?>
	</div>
</div>
<?php get_footer(); ?>