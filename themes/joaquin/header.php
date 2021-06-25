<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title('|', true, 'right'); ?></title>
	<!--Fontawesome-->
	<script src="https://kit.fontawesome.com/a22f56613a.js" crossorigin="anonymous"></script>
	<!--Estilos-->
	<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class('class-name'); ?>>
	<header>
		<nav class="navbar bg-secondary">
			<div class="container m-auto">
				<ul class="d-flex my-0 p-0">
					<li><a class="fs-7" href="">Mi cuenta</a></li>
				</ul>
				<ul class="d-flex my-0 p-0 fs-7">
					<li class="px-1"><a class="" href=""><i class="fab fa-spotify"></i></a></li>
					<li class="px-1"><a class="" href=""><i class="fab fa-facebook-f"></i></a></li>
					<li class="px-1"><a class="" href=""><i class="fab fa-twitter"></i></a></li>
					<li class="px-1"><a class="" href=""><i class="fab fa-instagram"></i></a></li>
					<li class="px-1"><a class="" href=""><i class="fab fa-youtube"></i></a></li>
					<li class="px-1"><a class="" href=""><i class="fab fa-whatsapp"></i></a></li>
				</ul>
			</div>
		</nav>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="container">
				<a class="navbar-brand" href="index.html"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/images/cap.svg" alt="Escudo del Club Atlético Peñarol"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Menu goes here -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => '',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0 justify-content-end w-100',
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
	</header>
	<main>