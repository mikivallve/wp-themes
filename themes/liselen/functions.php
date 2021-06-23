<?php

// funcionalidad avanzada de menu simil bootstrap
require_once get_theme_file_path('inc/class-wp-bootstrap-navwalker.php');

// registro de opciones de menú
if (!function_exists('liselen_register_nav_menu')) {

	function liselen_register_nav_menu()
	{
		register_nav_menus(array(
			'primary_menu' => __('Primary Menu', 'liselen'),
			'footer_menu'  => __('Footer Menu', 'liselen'),
		));
	}
	add_action('after_setup_theme', 'liselen_register_nav_menu', 0);
}
