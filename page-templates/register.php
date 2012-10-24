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
		var lastVisit = localStorage.getItem("lastVisited");
		var lastTitle = localStorage.getItem("lastTitle");
		if (lastVisit!=='' && lastVisit !==null) {
			//Fill the Last Visited
			$('#eventname').attr('placeholder',lastTitle);

			var before = localStorage.getItem('registeredBefore'); 
			console.log(before);
			if(before==='yes'){
			var name = localStorage.getItem('thename');
			var email = localStorage.getItem('theemail');
			var college = localStorage.getItem('thecollege');
			$('#thename').val(name);
			$('#theemail').val(email);
			$('#college').val(college);
			}
		};
		$("#eventname").select2();
		$('.wpcf7-submit').on('click',function () {
			localStorage.setItem('registeredBefore','yes');
			var name = $('#thename').val();
			var email = $('#theemail').val();
			var college = $('#college').val();
			console.log(name);
			localStorage.setItem('thename',name);
			localStorage.setItem('theemail',email);
			localStorage.setItem('thecollege',college);
		});
	});
</script>
<?php get_footer(); ?>
