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
	<?php if (!is_front_page()) {?>
	</div><!-- #main .wrapper -->
	<!--<footer id="colophon" role="contentinfo">
		<div class="site-info">
		</div><! .site-info >
	</footer> #colophon -->
</div><!-- #page -->
<?php } ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<?php if (is_front_page()){ ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mainjs.js"></script>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>
