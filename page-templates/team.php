<?php
/**
 * Template Name: Team
 *
 * Description: The Awesome Team Of Melange
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/team.css">
	<div id='auth-content' class='thincolumn'>
		<h2 class='pagetitle'>The Melange Team</h2>
		<?php
		$authors = $wpdb->get_results('SELECT DISTINCT post_author FROM '.$wpdb->posts);
		if($authors):
		foreach($authors as $author):
		?>
		<div class='author' id='author-<?php the_author_meta('user_login', $author->post_author); ?>'>
			<h3><?php the_author_meta('display_name', $author->post_author); ?></h3>
			
			
			<div class='description'>
				<?php echo get_avatar(get_the_author_meta('user_email', $author->post_author), 80); ?>
				<p><?php the_author_meta('description', $author->post_author); ?></p>
				<p><?php the_author_meta('number', $author->post_author); ?></p>
				<p><?php 
					$user = new WP_User( $author->post_author);
				if ( !empty( $user->roles ) && is_array( $user->roles ) ) {
				foreach ( $user->roles as $role )
					echo $role." ";
					}
				 ?>
				</p>
			</div>
			
			<?php
			$recentPost = new WP_Query('author='.$author->post_author.'&showposts=1');
			while($recentPost->have_posts()): $recentPost->the_post();
			?>
			<h4>Event Head: <a href='<?php the_title();?>'><?php the_title(); ?></a></h4>
			<?php endwhile; ?>
			<?php if(get_the_author_meta('twitter', $author->post_author) || get_the_author_meta('facebook', $author->post_author) || get_the_author_meta('linkedin', $author->post_author) || get_the_author_meta('digg', $author->post_author) || get_the_author_meta('flickr', $author->post_author)): ?>
			<ul class='connect'>
				<?php if(get_the_author_meta('twitter', $author->post_author)): ?>
				<li><a href='http://twitter.com/<?php the_author_meta('twitter', $author->post_author); ?>'>Twitter</a></li>
				<?php endif; ?>
				<?php if(get_the_author_meta('facebook', $author->post_author)): ?>
				<li><a href='http://www.facebook.com/<?php the_author_meta('facebook', $author->post_author); ?>'>Facebook</a></li>
				<?php endif; ?>
				<?php if(get_the_author_meta('linkedin', $author->post_author)): ?>
				<li><a href='http://www.linkedin.com/in/<?php the_author_meta('linkedin', $author->post_author); ?>'>LinkedIn</a></li>
				<?php endif; ?>
				<?php if(get_the_author_meta('digg', $author->post_author)): ?>
				<li><a href='http://digg.com/users/<?php the_author_meta('digg', $author->post_author); ?>'>Digg</a></li>
				<?php endif; ?>
				<?php if(get_the_author_meta('flickr', $author->post_author)): ?>
				<li><a href='http://www.flickr.com/photos/<?php the_author_meta('flickr', $author->post_author); ?>/'>Flickr</a></li>
				<?php endif; ?>
			</ul>
			<?php endif; ?>
		</div>
		<?php endforeach; endif; ?>
	</div>
<?php get_footer(); ?>
