<?php
/**
 * Template Name: Portfolio
 */

get_header(); ?>

    <div class="container">
    	<div class="clearfix">
    		<div class="row">
	        	<div class="span12 portfolio">  

					<div id="content">
						<?php 
						include_once (TEMPLATEPATH . '/title.php');   
						global $more;	$more = 0;
						$values = get_post_custom_values("category-include"); $cat=$values[0];  
						$catinclude = 'portfolio_category='. $cat ;
					  
					  	$temp = $wp_query;
						$wp_query= null;
						$wp_query = new WP_Query(); 
					  	$wp_query->query("post_type=portfolio&". $catinclude ."&paged=".$paged.'&showposts=5'); 

					  	if ( ! have_posts() ) : ?>
							<div id="post-0" class="post error404 not-found">
								<h3 class="entry-title portfolioCap"><?php _e( 'Not Found', 'e_repair' ); ?></h3>
								<div class="entry-content">
									<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'e_repair' ); ?></p>									
								</div><!-- .entry-content -->
							</div><!-- #post-0 -->
						<?php endif; ?>


				<!-- BEGIN Gallery -->

				<div id="filter-by" class="clearfix">
	                    
	                    <?php
	                    $status_terms = get_terms('portfolio_category');
	                    if ( !empty($status_terms) && is_array($status_terms) )
	                    { ?>
	                    	<a href="#" data-filter="galleryItem" class="active"><?php _e('All', 'framework'); ?></a>	
	                        <?php 
	                        foreach ($status_terms as $status_term)
	                        {
	                            echo '<a href="' . get_term_link( $status_term->slug, $status_term->taxonomy ) . '" data-filter="'.$status_term->slug.'" title="' . sprintf(__('View all Properties having %s status', 'framework'), $status_term->name) . '">' . $status_term->name . '</a>';
	                        }
	                    }
	                    ?>
	                </div>

				<div id="galleryHolder" class="one_column">
					
				  <ul class="isotope clearfix">
				    <?php 
				      $i=1;
				      if ( have_posts() ) while ( have_posts() ) : the_post();  

				      	$post_meta_data = get_post_custom($post->ID); 
						$prettyType = "prettyPhoto[gallery".$i."]";
						foreach ($post_meta_data['CAR_gallery'] as $key => $value) { 

							$term_list = '';
                            $terms =  get_the_terms( $post->ID, 'portfolio_category' );
                            if ( !empty($terms) && !is_wp_error( $terms ) ) :
                                foreach( $terms as $term )
                                {
                                    $term_list .= $term->slug;
                                    $term_list .= ' ';
                                }
                            endif;?>

							<li class="galleryItem isotope-item <?php echo $term_list; ?>">	
								<?php
								$full_image_url = wp_get_attachment_url($value, 'full');
								$image = aq_resize( $full_image_url, 200, 200, true ); //resize & crop img ?>

								<a class="image-wrap" href="<?php echo $full_image_url; ?>" rel="<?php echo $prettyType; ?>">
									<img class="img-border" src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
									<span class="zoom-icon"></span>
								</a>									
							</li>

						<?php }  ?>
	    
				  
				    <?php $i++;  endwhile; ?>
				  </ul>
				  <div class="clear"></div>
					
				</div><!-- END Gallery -->



						<?php get_template_part('includes/post-formats/post-nav'); ?>
						<!-- Posts Navigation -->


						<?php $wp_query = null; $wp_query = $temp;?>
					</div><!-- #content -->

				</div>
			</div>	
		</div>
	</div>

<!-- </div>	 -->
<!-- end #main -->
<?php get_footer(); ?>