<?php
function portal_cliente_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('main-menu' => 'Menu Principal'));
}
add_action('after_setup_theme', 'portal_cliente_setup');

function portal_cliente_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;900&display=swap', false);
    
    // O 'time()' gera um número novo a cada segundo, forçando o navegador a baixar o CSS novo
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), time());
}
add_action('wp_enqueue_scripts', 'portal_cliente_scripts');