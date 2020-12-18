<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">

	<?php wp_head(); ?>


	<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>

	<header>
		<?php 
			wp_nav_menu(array(
				'theme_location' => 'header',
				)
			);
		?>
	</header>

	<div class="site-content">