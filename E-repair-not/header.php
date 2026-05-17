<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->
<head>
	<title><?php if ( is_category() ) {
		echo __('Category Archive for &quot;', 'e_repair'); single_cat_title(); echo __('&quot; | ', 'e_repair'); bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo __('Tag Archive for &quot;', 'e_repair'); single_tag_title(); echo __('&quot; | ', 'e_repair'); bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo __(' Archive | ', 'e_repair'); bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo __('Search for &quot;', 'e_repair').wp_specialchars($s).__('&quot; | ', 'e_repair'); bloginfo( 'name' );
	} elseif ( is_home() || is_front_page()) {
		bloginfo( 'name' );
	}  elseif ( is_404() ) {
		echo __('Error 404 Not Found | ', 'e_repair'); bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title( ' | ', false, right ); bloginfo( 'name' );
	} ?></title>

	<meta name="format-detection" content="telephone=no">
	
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php if(of_get_option('favicon') != ''){ ?>
	<link rel="icon" href="<?php echo of_get_option('favicon', "" ); ?>" type="image/x-icon" />
	<?php } else { ?>
	<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon" />
	<?php } ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>

  <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
    	<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
    </div>
  <![endif]-->

  <!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
  
<script type="text/javascript" src="[JS library]"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/selectivizr-min.js"></script>
  <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
<![endif]--> 


    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/normalize.css" />
    <link rel="stylesheet" title="styles1" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/prettyPhoto.css" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/480.css" /> 
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/320.css" />    
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/768.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/1300.css" />  

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" />  
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap-responsive.css" />  
	
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,700' rel='stylesheet' type='text/css'>



	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
	
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
  <!--[if lt IE 9]>
  <style type="text/css">
    .border {
      behavior:url(<?php bloginfo('stylesheet_directory'); ?>/PIE.php)
      }
  </style>
  <![endif]-->
  
  <script type="text/javascript">
  	// initialise plugins
		jQuery(function(){
			// main navigation init
			jQuery('ul.sf-menu').superfish({
				delay:       <?php echo of_get_option('sf_delay'); ?>, 		// one second delay on mouseout 
				animation:   {opacity:'<?php echo of_get_option('sf_f_animation'); ?>'<?php if (of_get_option('sf_sl_animation')=='show') { ?>,height:'<?php echo of_get_option('sf_sl_animation'); ?>'<?php } ?>}, // fade-in and slide-down animation
				speed:       '<?php echo of_get_option('sf_speed'); ?>',  // faster animation speed 
				autoArrows:  <?php echo of_get_option('sf_arrows'); ?>,   // generation of arrow mark-up (for submenu) 
				dropShadows: false
			});
			
		});

	
		// Init for audiojs
		audiojs.events.ready(function() {
			var as = audiojs.createAll();
		});
		
		// Init for si.files
		SI.Files.stylizeAll();
  </script>
  

  <style type="text/css">
		
		<?php $background = of_get_option('body_background');
			if ($background != '') {
				if ($background['image'] != '') {
					echo 'body { background-image:url('.$background['image']. '); background-repeat:'.$background['repeat'].'; background-position:'.$background['position'].';  background-attachment:'.$background['attachment'].'; }';
				}
				if($background['color'] != '') {
					echo 'body { background-color:'.$background['color']. '}';
				}
			};
		?>
		
		<?php $header_styling = of_get_option('header_color'); 
			if($header_styling != '') {
				echo '#header {background-color:'.$header_styling.'}';
			}
		?>
		
		<?php $links_styling = of_get_option('links_color'); 
			if($links_styling) {
				echo 'a{color:'.$links_styling.'}';
				echo '.button {background:'.$links_styling.'}';
			}
		?>

  </style>

<!--[if gt IE 7]>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/ie.css" />
<![endif]--> 




</head>


<?php 

$custbodyClass = get_post_meta($post->ID, 'custombodyclass_value', true);
$cclass = '';
if ($custbodyClass) { $cclass = $custbodyClass; }  ?>

<body <?php body_class($cclass); ?> >


<div id="main"><!-- this encompasses the entire Web site -->

	<header id="header">

		<div class="container">
			<div class="row">
				<div class="logo span4">
					<?php if(of_get_option('logo_type') == 'text_logo'){?>
						<?php if( is_front_page() || is_home() || is_404() ) { ?>
	                        <h2><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?><span>|</span><em><?php bloginfo('description'); ?></em></a></h2>
	                    <?php } else { ?>
	                        <h2><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?><span>|</span><em><?php bloginfo('description'); ?></em></a></h2>
	                    <?php } ?>
					<?php } else { ?>
	                    <?php if(of_get_option('logo_url') != ''){ ?>
	                        <a href="<?php bloginfo('url'); ?>/" id="logo">
	                        	<img src="<?php echo of_get_option('logo_url', "" ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
	                    <?php } else { ?>
	                        <a href="<?php bloginfo('url'); ?>/" id="logo">
	                        	<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
						<?php } ?>
	                <?php }?>
            	</div>
				<div class="span6 offset2">
					<div class="wrapWalkingText">
						<?php if ( ! dynamic_sidebar( 'Top Header Area' ) ) : ?>
			                <!--Widgetized 'Content Area' for the home page-->
			            <?php endif ?>	
		            </div>
				</div>
			</div>
		</div>
	
		<section id="navArea">
			<div class="container">
				<div class="row">
					<nav class="primary span12">
							<div class="clearfix">
								
								<div class="responds"><span>Menu</span></div>	

								<?php wp_nav_menu( array(
									'container'       => 'ul', 
									'menu_class'      => 'sf-menu', 
									'menu_id'         => 'topnav',
		 							'depth'           => 0,
									'theme_location' => 'header_menu', 
						          )); 
						        ?>						        
							</div>
						</nav><!--.primary-->
					</div>
				</div>	
		</section>

	<?php if( is_front_page() ) {   ?>
		<section id="sliderWrap">		
			<div class="container">
				<div class="row">					
					<div class="span12">
					   	<?php if ( ! dynamic_sidebar( 'Slider Area' ) ) : ?>
			            <?php endif; ?>		
					</div>
			    </div>
			</div>      
	 	</section>
	<?php } ?>	


	</header>
	<?php if( is_front_page() ) {   ?>
		<section id="carouselArea">
			<div class="container">
				<div class="row">
					<div class="span12">					    
					    <?php if ( ! dynamic_sidebar( 'Carousel Area' ) ) : ?>
		                    <!--Widgetized 'Content Area' for the home page-->
		                <?php endif; ?>
					</div>		
				</div>
			</div>
		</section>	

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



	<?php if( !is_front_page() ) {   ?> 	
		<section id="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="span12 breadcrumb">
						<?php instant_breadcrumb(); ?>
					</div>
				</div>
			</div>	
		</section>
	<?php } ?>	

	

	<section id="primaryWrapContent" class="clearfix">
