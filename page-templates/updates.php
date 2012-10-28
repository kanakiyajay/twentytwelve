<?php
/**
 * Template Name:update
 *
 */
get_header(); ?>
	<style type="text/css">
		.tweet {
			background: #fff;
			margin: 4px 0;
			width: 500px;
			padding: 8px;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
		}
		.tweet img {
			float: left;
			margin: 0 8px 4px 0;
		}
		.tweet .text {
			margin: 0;
		}
		.tweet .time a {
			font-size: 80%;
			color: #888;
			white-space: nowrap;
			text-decoration: none;
		}
		.tweet .time a:hover {
			text-decoration: underline;
		}
		#twitterSearch .tweet {
			min-height: 24px;
		}
		#twitterSearch .tweet .text {
			margin-left: 32px;
		}
	</style>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div id="twitterSearch" class="tweets"></div>
		</div><!-- #content -->
	</div><!-- #primary -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.livetwitter.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$('#twitterSearch').liveTwitter('melange', {limit: 50, rate: 5000});
</script>
<?php get_footer(); ?>
