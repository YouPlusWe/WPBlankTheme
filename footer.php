	</div> <!-- Closes main-content in header -->

	<footer>
		<?php 
			wp_nav_menu(array(
				'theme_location' => 'footer',
				)
			);
		?>
	</footer>

	<?php wp_footer(); ?>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

</body>
</html>