<?php
/**
 * Template Name: results
 */
?>
<!DOCTYPE html> 
<html> 
<head> 
	<title>Melange Results</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 
	<div data-role="page">
	<div data-role="header">
		<a href="http://melange2012.co.cc" rel="external" data-icon="home">Home</a>
		<h1>Melage Results</h1>
	</div>
	<div data-role="content">
		<div data-role="collapsible-set">
	<?php
	                // The Query
			$args= array(
				'posts_per_page' => -1
			);
	                query_posts( $args );
	              	
	                // The Loop
	                while ( have_posts() ) : the_post();?>
	                <?php $results = htmlspecialchars(get_post_meta($post->ID,'result',true));
	 				if ($results!='') {
	 				echo '<div data-role="collapsible"><h3>';
	 				the_title();
	 				echo "</h3><p>".$results."</p></div>";
	 				}
	                endwhile;	              
	                // Reset Query
	                wp_reset_query();
	              
	                ?>
	              </div><!--Collaps-->
		</div><!-- /content -->
</div><!-- /page -->
</body>
</html>
