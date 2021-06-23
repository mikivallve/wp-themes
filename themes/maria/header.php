<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
	<link href="//db.onlinewebfonts.com/c/a6bec1c4ef2d2fd1bac5a6951f5f32a3?family=American+Captain" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/font/bootstrap-icons.css">
	<script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/js/bootstrap.bundle.min.js" defer></script>
	<script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/js/jquery-3.5.1.min.js"></script>
	<script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/js/myjs.js"></script>
	<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>

<body>

	<!--Header-->
	<header class="header bg-danger">
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<div class="container-fluid container-xxl">
				<a class="navbar-brand" href="index.html">
					<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/logo-2.png" alt="<?php bloginfo('name'); ?>">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<!-- Menu goes here -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => '',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav  mb-2 mb-lg-0 m-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-left',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
					<!-- Right Menu goes here -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary_right',
							'container_class' => '',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'right-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				</div>
			</div>
		</nav>
	</header>
	<!--/Header-->