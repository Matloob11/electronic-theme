<?php get_header(); ?>

	<div class="container">
		<div class="clearfix">
			<div class="row">
	    		<div class="span9"> 
					<div class="header-title">
				  		<h1>
				  			<?php printf( __( 'Category Archives: %s' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
				  		</h1>
				  	</div>
				 	<?php echo category_description(); /* displays the category's description from the Wordpress admin */ ?>	

	 				<?
	 					$ask2 = get_post_meta(get_page_ID_by_page_template('page-blog.php'), 'seo_noindex2', true);
						if ($ask2=='on') { echo '<div id="content" class="gridLayout">'; } 	
						else { echo '<div id="content">'; }
	 				?>
						  	
						  
						  <?php 
						  	/*	$postAmount = of_get_option('posts_per_page'); 
						        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						  		query_posts(array('post_type'=>'post', 'posts_per_page'=>$postAmount, 'category__not_in' => array(4),'paged' => $paged));  
						*/  			      
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