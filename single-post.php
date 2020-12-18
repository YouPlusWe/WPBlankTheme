<?php get_header(); 
while ( have_posts() ) {
the_post();	
?>

<div class="blog-post flex">
	<div class="flex-1">
		<h2>browser categories</h2>
		
		<?php 
			wp_nav_menu(array(
				'theme_location' => 'sidebar',
				)
			);
		?>
	</div>
	<div class="flex-3 blog-contents">
		<h1>
			<?php the_title(); ?>
		</h1>
		<?php the_content(); ?>
	</div>
</div>

<?php 
}
get_footer(); ?>