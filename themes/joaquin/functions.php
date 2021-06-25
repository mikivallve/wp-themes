<?php

// funcionalidad avanzada de menu simil bootstrap
require_once get_theme_file_path('inc/class-wp-bootstrap-navwalker.php');

// registro de opciones de menú
if (!function_exists('joaquin_register_nav_menu')) {
	function joaquin_register_nav_menu()
	{
		register_nav_menus(array(
			'primary' => __('Menu Izquierda', 'joaquin'),
			//'social_menu'  => __('Social Footer', 'joaquin'), descartado por como está armado
			'footer_menu'  => __('Menu Footer', 'joaquin'),
		));
	}
	add_action('after_setup_theme', 'joaquin_register_nav_menu', 0);
}

if (!function_exists('joaquin_post_thumbnails')) {
	function joaquin_post_thumbnails()
	{
		add_theme_support('post-thumbnails');
	}
}
add_action('after_setup_theme', 'joaquin_post_thumbnails');
