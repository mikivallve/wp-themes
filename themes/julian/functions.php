<?php

// funcionalidad avanzada de menu simil bootstrap
require_once get_theme_file_path('inc/class-wp-bootstrap-navwalker.php');

// registro de opciones de menú
if (!function_exists('julian_register_nav_menu')) {
	function julian_register_nav_menu()
	{
		register_nav_menus(array(
			'primary' => __('Menu Izquierda', 'julian'),
			'footer_menu'  => __('Menu Footer', 'julian'),
		));
	}
	add_action('after_setup_theme', 'julian_register_nav_menu', 0);
}
