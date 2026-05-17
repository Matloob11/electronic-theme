<?php get_header(); ?>
 
<div class="container">
  <div class="clearfix">
    <div class="row">
      <div class="span9">  

        <div id="content">
        	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
              <article class="post-holder">
                <h2><?php the_title(); ?></h2>
                <div id="page-content">
                  <?php the_content(); ?>
                  <div class="pagination">
                    <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
                  </div><!--.pagination-->
                </div><!--#pageContent -->
              </article>
            </div><!--#post-# .post-->

          <?php endwhile; ?>
        </div><!--#content-->
        
      </div>
      <?php get_sidebar('blog'); ?>
    </div>  
  </div>
</div>  

<?php get_footer(); ?>
