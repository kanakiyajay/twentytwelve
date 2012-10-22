<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<div class="row">
					<div class="col span_1_of_1" id="updates">
						<?php $updates = get_post_meta($post->ID, 'news', true); 
						$importance  =  get_post_meta($post->ID,'importance_level',true); ?>
						<?php echo '<h2>'.$updates.'</h2>';?><br>
						<?php echo '<h3>'.$importance.'</h3>' ;?> <br>
					</div>
				</div>
				<div class="row" id="customfields">
					<div class="col span_1_of_4" id="register">
					<a href="<?php get_site_url(); ?>/register">	<p>Register <br> For this <?php the_title(); ?></p></a>
					</div>
					<div class="col span_1_of_4" id="entryfee">
					<a href="#"><p>Entry Fee <br>
						<?php 
							$entryfee = htmlspecialchars(get_post_meta($post->ID, 'entryfee', true));
							// check if the custum field has a value
							if($entryfee != '') {
						  	echo $entryfee;
							} 
						?>
						</p></a>
					</div>
					<div class="unhidden clear"></div>
					<div class="col span_1_of_4" id="pdf">
						<?php $pdf = get_post_meta($post->ID, 'pdf', true); ?>
						<a href="<?php get_site_url(); ?>/pdf/<?php $pdf ?>">
							<p>Download Pdf Problem-Statement</p>
						</a>
					</div>
					<div class="col span_1_of_4" id="eventhead">
						<a href="#"><p>Event Head : <?php echo get_the_author_meta('display_name'); ?><br>
							<?php $number = htmlspecialchars(get_the_author_meta('number')); 
							echo $number;
							?>
							</p></a>
					</div>
					<div class="clear"></div>
				</div>
				<!--<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav>--><!-- .nav-single -->

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
