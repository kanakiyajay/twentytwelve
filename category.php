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

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<!--<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header>--><!-- .archive-header -->

			<?php
			/* Start the Loop */

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
			while ( have_posts() ) : the_post();?>
			<?php $importance = strtolower(get_post_meta($post->ID,'importance_level',true)); ?>
                <div id="post-<?php the_ID(); ?>" class="post <?php echo $importance;  ?>"  >
                    <!--class="post <?php echo strtolower($importance) ?>"-->
                    <p><?php echo $importance ?> </p>
                     <?php if ( has_post_thumbnail() ) { ?>
                     <div class="post-image"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'summary-image' );  ?></a></div>
                      <div class="post-category"><p><?php the_category(', ') ?></p></div>
                   
                      <?php } ?>
                            <div class="post-copy"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <!--<p class="post-date"><?php the_time(get_option('date_format')); ?>  </p>-->
      
                    <?php the_excerpt(); ?> 
      
                           <!--<p class="post-link"><a href="<?php the_permalink() ?>">View more &rarr;</a></p>-->
                     </div>
                   </div>
                    <?php 
                endwhile;
                ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<script type="text/javascript">
	jQuery(document).ready(function  ($) {
		$('')
	})
</script>
<?php get_footer(); ?>
