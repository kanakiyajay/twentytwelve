<?php
// Template Name: Authors List Template
get_header(); ?>
	<style type='text/css'>
	.author { margin-bottom: 80px; }
	.author h3 { margin-bottom: 10px; }
	.author .description { width: 100%; overflow: hidden; }
	.author .description p { width: 75%; float: left; margin: 0; }
	.author .avatar { float: right; border: 5px solid #ccc; }
	.author h4 { background: #E7E7E7; padding: 5px; border: 1px dotted #ccc; }
	.author .connect { border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; list-style: none; margin: 0; padding: 0; width: 100%; overflow: hidden; padding: 10px 0px; }
	.author .connect li { float: left; margin-right: 20px; }
	</style>
	<div id='auth-content' class='thincolumn'>
		<h2 class='pagetitle'>Our Authors' List</h2>
		<?php
		$authors = $wpdb->get_results('SELECT DISTINCT post_author FROM '.$wpdb->posts);
		if($authors):
		foreach($authors as $author):
		?>
		<div class='author' id='author-<?php the_author_meta('user_login', $author->post_author); ?>'>
			<h3><?php the_author_meta('display_name', $author->post_author); ?></h3>
			
			<?php if(get_the_author_meta('description', $author->post_author)): ?>
			<div class='description'>
				<?php echo get_avatar(get_the_author_meta('user_email', $author->post_author), 80); ?>
				<p><?php the_author_meta('description', $author->post_author); ?></p>
			</div>
			<?php endif; ?>
			
			<?php
			$recentPost = new WP_Query('author='.$author->post_author.'&showposts=1');
			while($recentPost->have_posts()): $recentPost->the_post();
			?>
			<h4>Recent Post: <a href='<?php the_title();?>'><?php the_title(); ?></a></h4>
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
