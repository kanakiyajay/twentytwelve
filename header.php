<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/post.css">
<?php if(is_front_page()) { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/home.css">
<?php } else {?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/single.css">
<?php } ?>
<?php if (is_front_page() || is_category()) {?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/masonry.css">
<?php } ?>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
//Below code is for Contact form 7
if (is_page('Register')) {
    # code...
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
        wpcf7_enqueue_styles();
    }
}
?>
<?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33060097-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body <?php body_class(); ?>>
    <div id="menuicon"></div>
        <div class="row" id="megamenu">
            <?php $theurl =  get_site_url();  ?>
            <div class="col span_1_of_1 unhidden">
                <h2 id="hiddenlogo"><a href="http://vitmelange.com">Melange</a></h2>
            </div>
            <div class="col span_1_of_5 hidden" style="padding-top:4%;">
                <div class="menutag" >
                    <a href="http://vitmelange.com" >MELANGE</a>
                </div>
                <div id="menuimage"></div>
                <div id="menudescription">
                    The hovered Menu Items Description here
                </div>
            </div>
           <?php $defaults = array(
                    'theme_location' => 'primary', 
                    'menu-class'=>'nav-menu',
                    'container_id'=>'ulmenu'
                    ); ?>
            <?php wp_nav_menu( $defaults ); ?>
            <div class="clearfix"></div>
        </div>
<?php if(!is_front_page()) {?>
<div id="page" class="hfeed site"> 
    <?php } ?>
        <div class="row bg" id="logowrapper">
            <div class="col span_1_of_1" id="logo">
                <a href="http://vitmelange.com"> <img src="<?php echo get_template_directory_uri(); ?>/images/melange.png" alt="melange"></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row bg">
            <div class="col span_1_of_1" id="logotext">
                <h3>
                    13th Feb
                </h3>
            </div>
            
            <div class="clearfix"></div>
        </div>
<?php if (is_front_page()) {  } else {?> 
    <div id="main" class="wrapper">
<?php } ?>
