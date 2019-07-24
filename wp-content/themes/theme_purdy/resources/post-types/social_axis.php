<?php 

Class social_axis {
    const POST_TYPE = 'social_axis';

    function init(){
        $this->register_post_type();
        $this->add_meta();
        //add_filter()
    }

    function register_post_type() {

        $labels = array(
            'name'               => 'Ejes Sociales',
            'singular_name'      => 'Eje Social',
            'menu_name'          => 'Ejes Sociales',
            'name_admin_bar'     => 'Ejes Sociales',
            'parent_item_colon'  => 'Sostenibilidad',
            'all_items'          => 'Todos los Ejes Sociales',
            'add_new_item'       => 'Agregar nuevo eje',
            'add_new'            => 'Agregar Nuevo',
            'new_item'           => 'Nuevo eje',
            'edit_item'          => 'Edit eje',
            'update_item'        => 'Actualizar eje',
            'view_item'          => 'Ver eje',
            'search_items'       => 'Buscar eje',
            'not_found'          => 'No encontrado ',
            'not_found_in_trash' => 'No se encontro en basurero',
        );

        $args = array(
            'label'               => 'Ejes Sociales',
            'description'         => 'Ejes Sociales para sección Sostenibilidad',
            'labels'              => $labels,
            'supports'            => array( 'title','editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'          => array(),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 25,
            'menu_icon'           => 'dashicons-image-filter',
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


add_action( 'init', array( new social_axis(), 'init' ) );
