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
                <!--<div id="registercta">
                    Register
                </div>-->
                <img class="prev hidden" src="<?php echo get_template_directory_uri();?>/images/bt-prev.png" alt="Previous Frame">
                 <img class="next hidden" src="<?php echo get_template_directory_uri();?>/images/bt-next.png" alt="Next Frame">
                <div id="maincta">
                    <ul>
                        <li id="slide1">
                          <div class="box"></div>
                          <div class="box"></div>
                          <div class="box"></div>
                          <div class="box"></div>
                                <h2 class="flash1 animate-in">Thoughts.</h2>
                                <h2 class="flash2 animate-in">Passion.</h2>
                                <h2 class="flash3 animate-in">Revolution</h2>
                            <!--<img src="images/default.jpg" class="default animate-in" alt="Deafult Image">-->
                        </li>
                        <li id="slide2">
                                <div class="box"></div>
                                <div class="box"></div>
                                <div class="box"></div>
                                <div class="box"></div>
                                <h2 class="title1">
                                    25,000 Footfalls
                                </h2>
                                <h2 class="title2">
                                    10,000 Participants
                                </h2>
                        </li>
                        <li id="slide3">
                        <div class="box"></div>
                        <div class="box"></div>
                        <div class="box"></div>
                        <div class="box"></div>                            
                                <h2 class="title1">
                                    53 Events
                                </h2>
                                <h2 class="title2">
                                    1 Lakh Rupees prizes
                                </h2>
                                <div class="box"></div>                            
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
  <div class="row" id="masonrywrapper">
      <div id="masonryrow">
          <?php
                // The Query
                query_posts( 'cat=-1&order=RAND' );
              
                // The Loop
                while ( have_posts() ) : the_post();?>
                <?php $importance = strtolower(get_post_meta($post->ID,'importance_level',true)); ?>
                <div id="post-<?php the_ID(); ?>" class="post <?php echo $importance;  ?>"  >
                  <div class="link-post" href="<?php the_permalink() ?>" style="display:none"></div>
                         <?php if ( has_post_thumbnail() ) { ?>                         
                         <div class="post-image">
                            <?php the_post_thumbnail( 'summary-image' );  ?>
                      </div>
 <?php $parentscategory ="";
foreach((get_the_category()) as $category) {
if ($category->category_parent == 0) {
$parentscategory .=$category->name ;
}
}?>
                     <div class="post-wrapper <?php echo strtolower($parentscategory);  ?>"> 
                          <?php } ?>
                            <h2 class="thetitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                          <div class="post-copy">      
                              <i><?php echo htmlspecialchars(get_post_meta($post->ID,'concise',true)); ?></i>
                         </div>
                      </div>
                   </div>
                    <?php 
                endwhile;
              
                // Reset Query
                wp_reset_query();
              
                ?>
                <div class="clearfix"></div>
      </div>
      <div class="clear"></div>
  </div>
<?php get_footer(); ?>
    </body>
</html>
