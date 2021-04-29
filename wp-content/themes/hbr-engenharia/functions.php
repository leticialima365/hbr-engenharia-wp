<?php

    define('TEMPLATE', get_bloginfo('template_url') . '/');
    define('HOME', get_bloginfo('url') . '/');

/*-----------------------------------------------------------------------------------*/
/* Criando Option Informações Gerais
/*-----------------------------------------------------------------------------------*/

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Informações Gerais',
        'menu_title' 	=> 'Informações Gerais',
        'menu_slug' 	=> 'informacoes_gerais',
        'capability' 	=> 'edit_posts',
        'redirect' 	=> false
    ));
}

/*-----------------------------------------------------------------------------------*/
/* Registra menu
/*-----------------------------------------------------------------------------------*/
function register_my_menus() { 
    register_nav_menus(
        array(
        'main-menu' => __( 'Main Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );

/*-----------------------------------------------------------------------------------*/
/* Imagem Destacada
/*-----------------------------------------------------------------------------------*/
add_theme_support('post-thumbnails');


?>