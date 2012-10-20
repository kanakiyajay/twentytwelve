<?php
/**
 * Template Name: Home
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 */
get_header(); ?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div class="row">
            <div class="col span_1_of_1" id="s-wrapper">
                <div id="registercta">
                    Register
                </div>
                <img class="prev" src="<?php echo get_template_directory_uri();?>/images/bt-prev.png" alt="Previous Frame">
                 <img class="next" src="<?php echo get_template_directory_uri();?>/images/bt-next.png" alt="Next Frame">
                <div id="maincta">
                    <ul>
                        <li id="slide1">
                            
                                <h2 class="title1">
                                   <span class="flash1">Thoughts</span>.<span class="flash3">Passion</span>.<span class="flash2">Revolution</span>
                                </h2>
                            
                        </li>
                        <li id="slide2">
                            
                                <h2 class="title1">
                                    25,000 Footfalls
                                </h2>
                                <h2 class="title2">
                                    10,000 Participants
                                </h2>
                            <!--<img src="images/default.jpg" class="default animate-in" alt="Deafult Image">-->
                        </li>
                        <li id="slide3">                            
                                <h2 class="title1">
                                    53 Events
                                </h2>
                                <h2 class="title2">
                                    1 Lakh Rupees prizes
                                </h2>                            
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col span_1_of_3">
                <img src="<?php echo get_template_directory_uri();?>/images/placeholder.png" alt="" class="windows">
            </div>
            <div class="col span_1_of_3">
                <img src="<?php echo get_template_directory_uri();?>/images/placeholder.png" alt="" class="windows">
            </div>
            <div class="col span_1_of_3">
                <div class="subrow">
                    <div class="col span_1_of_2">
                        <img src="<?php echo get_template_directory_uri();?>/images/placeholder.png" alt="" class="windows">
                    </div>
                    <div class="col span_1_of_2">
                        <img src="<?php echo get_template_directory_uri();?>/images/placeholder.png" alt="" class="windows">
                    </div>
                </div>
                <div class="subrow">
                    <div class="col span_1_of_2">
                        <img src="<?php echo get_template_directory_uri();?>/images/placeholder.png" alt="" class="windows">
                    </div>
                    <div class="col span_1_of_2">
                        <img src="<?php echo get_template_directory_uri();?>/images/placeholder.png" alt="" class="windows">
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/sequence.jquery-min.js">
</script><?php get_footer(); ?>
    </body>
</html>
