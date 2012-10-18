<?php
/**
 * Template Name: Home
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col span_1_of_1">                
            <div id="maincta">
            <img class="prev" src="<?php echo get_template_directory_uri(); ?>/images/bt-prev.png" alt="Previous Frame" />
            <img class="next" src="<?php echo get_template_directory_uri(); ?>/images/bt-next.png" alt="Next Frame" />
                <ul>
                    <li id="slide1">
                       <div class="info1 insideslide">        
                            <h2>25,000 Footfalls<br>
                                10,000 Participants
                            </h2>
                        </div> 
                        <!--<img src="images/default.jpg" class="default animate-in" alt="Deafult Image">-->
                    </li>
                    <li id="slide2">
                       <div class="info2 insideslide">                     
                            
                            <h2>53 Events <br> 1 Lakh Rupees prizes</h2>
                        </div> 
                    </li>
                    <li id="slide3">
                       <div class="info3 insideslide">                          
                            
                            <h2>Description 3</h2>
                        </div> 
                    </li>
                </ul>
            </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col span_1_of_3">
                <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="" class="windows">
            </div>
            <div class="col span_1_of_3">
                <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="" class="windows">
            </div>
            <div class="col span_1_of_3">
                <div class="subrow">
                    <div class="col span_1_of_2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="" class="windows">
                    </div>
                    <div class="col span_1_of_2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="" class="windows">
                    </div>
                </div>
                <div class="subrow">
                    <div class="col span_1_of_2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="" class="windows">
                    </div>
                    <div class="col span_1_of_2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="" class="windows">
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sequence.jquery-min.js"></script>
<?php get_footer(); ?>