<?php
/*
  Plugin Name: Módulo Genérico
  Plugin URI: https://www.agenciaopera.com.br
  Description: Módulo Genérico
  Version: 1.0
  Author: Victor Magalhaes
 */

add_action("init", "initializeModules");

function initializeModules($names) {
    $init_class = new InitializeModules();
	$init_class->init();
}

class InitializeModules {
    function initializeModules() {
    }

	function init() {
		$names = array(
			array(
				'singular' 	=> 'Empreendimento',
				'plural'	=> 'Empreendimentos',
				'slug'		=> 'empreendimentos',
				'icone'		=> 'dashicons-pets',
				'categoria'	=> 'categoria-empreendimentos'
			),
			array(
				'singular' 	=> 'Industrial',
				'plural'	=> 'Industrial',
				'slug'		=> 'industrial',
				'icone'		=> 'dashicons-pets',
				'categoria'	=> 'categoria-industrial'
			),
			array(
				'singular' 	=> 'Comercial',
				'plural'	=> 'Comercial',
				'slug'		=> 'comercial',
				'icone'		=> 'dashicons-pets',
				'categoria'	=> 'categoria-comercial'
			),array(
				'singular' 	=> 'HBR Metal',
				'plural'	=> 'HBR Metal',
				'slug'		=> 'hbr-metal',
				'icone'		=> 'dashicons-pets',
				'categoria'	=> 'categoria-hbrmetal'
			),
		);

		foreach ($names as $name):
			$labels = array(
				'name' => $name['plural'],
				'singular_name' => $name['singular'],
				'add_new' => 'Adicionar novo',
				'add_new_item' => 'Adicionar novo ' . $name['singular'],
				'edit_item' => 'Editar ' . $name['singular'],
				'new_item' => 'Novo ' . $name['singular'],
				'all_items' => 'Todos os ' . $name['plural'],
				'view_item' => 'Ver ' . $name['singular'],
				'search_items' => 'Pesquisar ' . $name['singular'],
				'not_found' =>  'Nenhum ' . $name['singular'] . ' encontrado',
				'not_found_in_trash' => 'Nenhum ' . $name['singular'] . ' encontrado no lixo',
				'parent_item_colon' => $name['singular'] . ' pai',
				'menu_name' => $name['plural']
			);
			$args = array(
				'labels' => $labels,
				'description' => '',
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'show_ui' => true,
				'show_in_menu' => true,
				'menu_position' => 25,
				'menu_icon' => $name['icone'],
				'hierarchical' => false,
				'supports' => array(
					'title'
				),
				'has_archive' => true,
				'rewrite' => array(
					'slug' => $name['slug'],
					'with_front' => false,
					'feeds' => true,
					'pages' => true,
				),
				'query_var' => $name['slug'],
				'can_export' => true,
				'show_in_nav_menus' => true,
				'capability_type' => 'post',
			);
			
			register_post_type($name['slug'],$args);
			
			if(!empty($name['categoria'])):
				register_taxonomy(
					$name['categoria'],
					array($name['slug']),
					array(
						"public" => true,
						"show_in_nav_menus" => true,
						"show_ui" => true,
						"show_tagcloud" => false,
						"hierarchical" => true,
						"label" => "Categorias",
						"singular_label" => "Categoria",
						"query_var" => "categorias",
						"rewrite" => array(
							"slug" => "categorias",
							"with_front" => true,
							"hierarchical" => true
						)
					)
				);
			endif;
			// Da um flush na geração de regras de navegação
			flush_rewrite_rules();
		endforeach;
    }
}
?>