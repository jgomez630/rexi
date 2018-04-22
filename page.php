<h2>Powered by page.php</h2>

<?php 
 get_header();

	while(have_posts()) {
		 the_post(); ?>
		 
		 <h3><?php the_title() ?></a></h3>
		<?php the_content() ?>
		<hr>
		<?php 
	}
	get_footer();
?>