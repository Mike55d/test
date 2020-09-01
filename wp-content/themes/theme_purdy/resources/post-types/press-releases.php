<?php

Class press_releases {
    const POST_TYPE = 'press_releases';

    function init(){
        $this->register_post_type();
        $this->add_meta();
        //add_filter()
    }

    function register_post_type() {

        $labels = array(
            'name'               => 'Notas de Prensa',
            'singular_name'      => 'Nota de Prensa',
            'menu_name'          => 'Notas de Prensa',
            'name_admin_bar'     => 'Notas de Prensa',
            'parent_item_colon'  => 'Sostenibilidad',
            'all_items'          => 'Todos las Notas de Prensa',
            'add_new_item'       => 'Agregar nueva nota',
            'add_new'            => 'Agregar Nuevo',
            'new_item'           => 'Nueva Nota',
            'edit_item'          => 'Editar nota',
            'update_item'        => 'Actualizar eje',
            'view_item'          => 'Ver nota',
            'search_items'       => 'Buscar nota',
            'not_found'          => 'No encontrado ',
            'not_found_in_trash' => 'No se encontro en basurero',
        );

        $args = array(
            'label'               => 'Notas de Prensa',
            'description'         => 'Notas de prensa para de todas las marcas',
            'labels'              => $labels,
            'supports'            => array( 'title','editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'          => array(),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 25,
            'menu_icon'           => 'dashicons-welcome-write-blog',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'rewrite'             => true,
            'has_archive'         => 'work',
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
        );

        register_post_type( self::POST_TYPE, $args );
    }

    function add_meta(){
        //
    }

}


add_action( 'init', array( new press_releases(), 'init' ) );
