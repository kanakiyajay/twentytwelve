<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php if (is_front_page()){ ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sigma.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sigma.fisheye.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mainjs.js"></script>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>