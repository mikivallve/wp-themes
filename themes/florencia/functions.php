<?php

// funcionalidad avanzada de menu simil bootstrap
require_once get_theme_file_path('inc/class-wp-bootstrap-navwalker.php');

// registro de opciones de menú
if (!function_exists('florencia_register_nav_menu')) {
	function florencia_register_nav_menu()
	{
		register_nav_menus(array(
			'primary' => __('Menu Izquierda', 'florencia'),
			'primary_right' => __('Menu Derecha', 'florencia'),
			'footer_menu'  => __('Menu Footer', 'florencia'),
		));
	}
	add_action('after_setup_theme', 'florencia_register_nav_menu', 0);
}

if (!function_exists('florencia_post_thumbnails')) {
	function florencia_post_thumbnails()
	{
		add_theme_support('post-thumbnails');
	}
}
add_action('after_setup_theme', 'florencia_post_thumbnails');
