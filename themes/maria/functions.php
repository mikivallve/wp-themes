<?php

// funcionalidad avanzada de menu simil bootstrap
require_once get_theme_file_path('inc/class-wp-bootstrap-navwalker.php');

// registro de opciones de menú
if (!function_exists('maria_register_nav_menu')) {
	function maria_register_nav_menu()
	{
		register_nav_menus(array(
			'primary' => __('Menu Izquierda', 'maria'),
			'primary_right' => __('Menu Derecha', 'maria'),
			'footer_menu'  => __('Menu Footer', 'maria'),
		));
	}
	add_action('after_setup_theme', 'maria_register_nav_menu', 0);
}

if (!function_exists('maria_post_thumbnails')) {
	function maria_post_thumbnails()
	{
		add_theme_support('post-thumbnails');
	}
}
add_action('after_setup_theme', 'maria_post_thumbnails');


/* Change Text Site Wide */

function maria_change_text($translated_text)
{
	if ($translated_text == 'Username or Email Address') {
		$translated_text = 'INICIA SESIÓN CON TU MAIL';
	}
	return $translated_text;
}
add_filter('gettext', 'maria_change_text', 20);
