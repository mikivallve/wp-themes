<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title('|', true, 'right'); ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/scroll.js"></script>
	<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class('class-name'); ?>>
	<main>
		<!--NAV BAR-->
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand ps-4" href="/">
					<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/cocoon-logo-02.png" alt="logo de cocoon" class="logo m-2">
				</a>
				<button class="navbar-toggler border-0 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Menu goes here -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => '',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
							'fallback_cb'     => '',
							'menu_id'         => 'main-left',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				</div>
			</div>
		</nav>