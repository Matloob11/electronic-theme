<?php get_header(); ?>

	<div class="container">
		<div class="clearfix">
		<div class="row">
	    	<div class="span9">  
					
			  	<div class="header-title">
					<h1>
						<?php if ( is_day() ) : /* if the daily archive is loaded */ ?>
						  <?php printf( __( 'Daily Archives: <span>%s</span>' ), get_the_date() ); ?>
						<?php elseif ( is_month() ) : /* if the montly archive is loaded */ ?>
						  <?php printf( __( 'Monthly Archives: <span>%s</span>' ), get_the_date('F Y') ); ?>
						<?php elseif ( is_year() ) : /* if the yearly archive is loaded */ ?>
						  <?php printf( __( 'Yearly Archives: <span>%s</span>' ), get_the_date('Y') ); ?>
						<?php else : /* if anything else is loaded, ex. if the tags or categories template is missing this page will load */ ?>
						  <?php _e('Blog Archives', 'e_repair'); ?>
						<?php endif; ?>
					</h1>
			  	</div>

			  	<?
 					$ask2 = get_post_meta(get_page_ID_by_page_template('page-blog.php'), 'seo_noindex2', true);
					if ($ask2=='on') { echo '<div id="content" class="gridLayout">'; } 	
					else { echo '<div id="content">'; }
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
						<?php echo '<p><strong>' . __('There has been an error.', 'e_repair') . '</strong></p>'; ?>
						<p><?php _e('We apologize for any inconvenience, please', 'e_repair'); ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php _e('return to the home page', 'e_repair'); ?></a> <?php _e('or use the search form below.', 'e_repair'); ?></p>
						<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
					</div><!--no-results-->
						
					<?php endif; ?>
				    <?php get_template_part('includes/post-formats/post-nav'); ?>
  
				</div><!--#content-->
			</div>
			<?php get_sidebar('blog'); ?>
		</div>	
	</div>
</div>
<?php get_footer(); ?>