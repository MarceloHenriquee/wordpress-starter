<?php 
define('THEME_URI', get_template_directory_uri());
define('THEME_PATH', get_template_directory());

function theme_base_adicionando_recurso_theme() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'theme_base_adicionando_recurso_theme');

function theme_base_register_menu() {
    register_nav_menu('menu-navegacao','Menu Navegacao');
}

add_action('init', 'theme_base_register_menu');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );