<?php
/**
 * Template Name: Team
 *
 * Description: For the The Awesome Team Of Melange
 *
 */

get_header(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/team.css">
		<h2 class='entry-title'>The Melange Team</h2> <br> <br>
	<div id='auth-content' class='thincolumn'>
		<?php $count = 0; 
		$flag = true;		
		$authors = $wpdb->get_results('SELECT DISTINCT post_author FROM '.$wpdb->posts);
		if($authors):
		foreach($authors as $author):
		?>
		<div class='author' id='author-<?php the_author_meta('user_login', $author->post_author); ?>'>
			<?php $count = $count + 1; 
			 if ($flag) {?>
			<div class='authorimage' >
				<?php echo get_avatar(get_the_author_meta('user_email', $author->post_author), 200); ?>
			</div>
			<div class="description left">
				<h3><?php the_author_meta('display_name', $author->post_author); ?></h3>				
					<!--<p><?php the_author_meta('description', $author->post_author); ?></p>
					<p><?php the_author_meta('number', $author->post_author); ?></p>-->
					<p><?php the_author_meta('designation',$author->post_author) ?> </p>
			</div>
			<?php   } else {?>
			<div class="description right">
				<h3><?php the_author_meta('display_name', $author->post_author); ?></h3>
					<!--<p><?php the_author_meta('number', $author->post_author); ?></p>-->
					<p><?php the_author_meta('designation',$author->post_author) ?> </p>
			</div>
			<div class='authorimage'>
				<?php echo get_avatar(get_the_author_meta('user_email', $author->post_author), 200); ?>
			</div>
			<?php }
			/*$recentPost = new WP_Query('author='.$author->post_author.'&showposts=1');
			while($recentPost->have_posts()): $recentPost->the_post();*/
			?>
			<div class='moreinfo'>
				<div class="close">
					<img src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="">
				</div>
				<p><?php  echo get_the_author_meta('description', $author->post_author)?> </p>
			</div>
		</div>
		<div class="clear unhidden"></div>
		<?php  if ($count%3===0) {
						if ($flag) {
							$flag = false;
						} else {
							$flag = true;
						}
						
					} ?> 
		<?php endforeach; endif; ?>
		<div class="clear"></div>
	</div>
<?php get_footer(); ?>
