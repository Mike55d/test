<?php 

Class services {
    const POST_TYPE = 'services';

    function init(){
        $this->register_post_type();
        $this->add_meta();
        //add_filter()
    }

    function register_post_type() {

        $labels = array(
            'name'               => 'Servicios',
            'singular_name'      => 'Servicio',
            'menu_name'          => 'Servicios',
            'name_admin_bar'     => 'Servicio',
            'parent_item_colon'  => 'Servicio Padre',
            'all_items'          => 'Todos los Servicios',
            'add_new_item'       => 'Agregar nuevo servicio',
            'add_new'            => 'Agregar Nuevo',
            'new_item'           => 'Nuevo servicio',
            'edit_item'          => 'Edit servicio',
            'update_item'        => 'Actualizar servicio',
            'view_item'          => 'Ver servicio',
            'search_items'       => 'Buscar servicio',
            'not_found'          => 'No encontrado ',
            'not_found_in_trash' => 'No se encontro en basurero',
        );

        $args = array(
            'label'               => 'Servicio',
            'description'         => 'Servicio',
            'labels'              => $labels,
            'supports'            => array( 'title','editor', 'thumbnail', 'custom_fields' ),
            'taxonomies'          => array(),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 25,
            'menu_icon'           => 'dashicons-admin-tools',
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


add_action( 'init', array( new services(), 'init' ) );
