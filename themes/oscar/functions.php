<?php

// funcionalidad avanzada de menu simil bootstrap
require_once get_theme_file_path('inc/class-wp-bootstrap-navwalker.php');

// registro de opciones de menú
if (!function_exists('oscar_register_nav_menu')) {

	function oscar_register_nav_menu()
	{
		register_nav_menus(array(
			'primary' => __('Menu Izquierda', 'oscar'),
			'primary_right' => __('Menu Derecha', 'oscar'),
			'footer_menu'  => __('Menu Footer', 'oscar'),
		));
	}
	add_action('after_setup_theme', 'oscar_register_nav_menu', 0);
}

if (!function_exists('oscar_post_thumbnails')) {
	function oscar_post_thumbnails()
	{
		add_theme_support('post-thumbnails');
	}
}
add_action('after_setup_theme', 'oscar_post_thumbnails');
