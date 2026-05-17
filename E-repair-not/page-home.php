<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

 
    <div id="home-content" class="clearfix">
        <div class="container clearfix">
			<div class="row">
        		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
        	</div>	
        </div>            
    </div>        


<?php get_footer(); ?>

