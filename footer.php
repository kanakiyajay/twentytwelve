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
<div class="row">
	<div class="clear"></div>
		<footer>Site In Construction by Jay Kanakiya</footer>
		<div class="clear"></div>
</div>
	<?php if (!is_front_page()) {?>
	</div><!-- #main .wrapper -->
	<!--<footer id="colophon" role="contentinfo">
		<div class="site-info">
		</div><! .site-info >
	</footer> #colophon -->
</div><!-- #page -->
<?php } ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<?php if (is_page('the-team')) { ?>
<?php wp_footer(); ?>
	<script type="text/javascript">
		jQuery(document).ready(function  ($) {
			$(".author").click(function(){
				$(this).children('.moreinfo').toggle();
			});
		});
	</script>
<?php } ?>
<?php if(is_single()) { ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.toc.min.js" ></script>
<script type="text/javascript">
		jQuery(document).ready(function  ($) {
			$('#toc').toc({
				'selectors' : 'h2',
				'container': '#primary',
				 'smoothScrolling': true
			});
		});
	</script>

<?php } ?>
</body>
</html>
