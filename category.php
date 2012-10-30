<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="masonryrow">
		
	<!--<section id="primary" class="site-content">
		<div id="content" role="main">-->

		<?php if ( have_posts() ) : ?>
			<!--<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header>--><!-- .archive-header -->

         <?php
                while ( have_posts() ) : the_post();?>
                <?php $importance = strtolower(get_post_meta($post->ID,'importance_level',true)); ?>
                <div id="post-<?php the_ID(); ?>" class="post <?php echo $importance;  ?>"  >
                  <div class="link-post" href="<?php the_permalink() ?>" style="display:none"></div>
                         <?php if ( has_post_thumbnail() ) { ?>                         
                         <div class="post-image">
                            <?php the_post_thumbnail( 'summary-image' );  ?>
                      </div>
                     <div class="post-wrapper "> 
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
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		<div class="clear"></div>
	</div>
		<!--</div> #content -->
	<!--</section> #primary -->

<script type="text/javascript">
	jQuery(document).ready(function  ($) {
		  var $container = $('#masonryrow');
			$container.imagesLoaded( function(){
			   
			  $container.masonry({
			    // options
			    itemSelector : '.post',
			    // options...
			  isAnimated: true,
			  animationOptions: {
			    duration: 400,
			    easing: 'linear',
			    queue: false
			  }
			  
			  });
			});
	});
</script>
<?php get_footer(); ?>
