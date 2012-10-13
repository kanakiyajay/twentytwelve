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

	<div class="row site-content" id="graphicwrapper">
            <div class="col span_1_of_1" id="maincta">
                <div id="cta">
                    <button id="registercta">Register</button>
                </div>
                <div id="thegraphic">
                    <div class="sigma-expand" id="mouselayer-sigma-1"></div>
                </div>
            </div>
    </div>
	<div id="primary" class="site-content">

		<!--<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div> #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>