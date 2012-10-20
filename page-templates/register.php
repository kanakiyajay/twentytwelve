<?php
/**
 * Template Name: register
 *
 */

get_header(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/register/register.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/register/select2.css">
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/register/select2.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function  ($) {
		$("#eventname").select2();
	});
</script>
<?php get_footer(); ?>
