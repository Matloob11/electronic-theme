<?php get_header(); ?>

	<div class="container">
		<div class="clearfix">
			<div class="row">
				<div class="span9">  
					<div id="content">		
						<?php 
				                
							if (have_posts()) : while (have_posts()) : the_post(); 
							
									// The following determines what the post format is and shows the correct file accordingly
									$format = get_post_format();
									get_template_part( 'includes/post-formats/'.$format );
									
									if($format == '')
									get_template_part( 'includes/post-formats/standard' ); ?>
									
									
						<?php get_template_part( 'includes/post-formats/related-posts' ); ?>

									
				    
						<?php comments_template('', true); ?>
						
						
						<?php endwhile; endif; ?>
				    

					</div><!--#content-->
				</div>
				<?php get_sidebar('blog'); ?>
			</div>	
		</div>
	</div>
	
<?php get_footer(); ?>