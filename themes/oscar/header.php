<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap" rel="stylesheet">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/modern-normalize.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/bootstrap-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>

<body>
	<!-- Header -->
	<header class="sticky-top">
		<div class="nav-container bg-light">
			<nav class="navbar navbar-expand-lg navbar-light bg-light container">
				<div class="container-fluid">
					<a class="navbar-brand fs-3" href="#"><?php bloginfo('name'); ?></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<div class="ms-auto navbar-nav d-flex align-items-center">
							<!-- Left Menu goes here -->
							<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => '',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav ml-auto',
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
									'menu_class'      => 'navbar-nav text-center',
									'fallback_cb'     => '',
									'menu_id'         => 'right-menu',
									'depth'           => 2,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							);
							?>

						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<main>
		<!-- se cierra en footer.php -->