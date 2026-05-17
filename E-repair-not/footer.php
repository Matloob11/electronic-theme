    </section> <!-- end of .primary_content_wrap -->    
</div>    <!-- #main -->  

  
<?php if( !is_front_page() ) {   ?>  
<section id="bannerArea">
    <div class="container">
        <div class="row">
            <div class="span12">                        
                <?php if ( ! dynamic_sidebar( 'Banner Area' ) ) : ?>
                    <!--Widgetized 'Content Area' for the home page-->
                <?php endif; ?>
            </div>      
        </div>
    </div>
</section>  
<?php } ?>  

<footer id="footer" class="clearfix">

    <div class="container clearfix">
        <div class="row">  
            <div class="span3">
                <a href="<?php bloginfo('url'); ?>/" id="logo">
                    <img src="<?php bloginfo('template_url'); ?>/images/footer-logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
                </a>
                <p>
                    <?php 
                        $myfooter_text = of_get_option('footer_text'); 
                        if($myfooter_text) {  echo of_get_option('footer_text'); }
                    ?>
                </p>
            </div>

            <?php if ( ! dynamic_sidebar( 'Footer Area 1' ) ) : ?>
                    <!--Widgetized 'Content Area 2' for the home page-->
            <?php endif ?> 
        </div>
    </div>  

    <!-- div id="footer-text" class="copyrights">
        <div class="container clearfix">
            <div class="row">  
                <div class="span12">
                    <?php ///$myfooter_text = of_get_option('footer_text'); 
                    //if($myfooter_text) {  echo of_get_option('footer_text'); }  ?>
                </div>                 
            </div>
        </div>                 
    </div>    -->

</footer> 




<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
<?php if(of_get_option('ga_code')) { ?>
	<script type="text/javascript">
		<?php echo stripslashes(of_get_option('ga_code')); ?>
	</script>
  <!-- Show Google Analytics -->	

<?php } ?>

<!--   </div> end of #wrapMain -->
</body>
</html>




