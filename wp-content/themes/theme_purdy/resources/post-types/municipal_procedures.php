<?php 

Class procedures {
    const POST_TYPE = 'municipal_procedures';

    function init(){
        $this->register_post_type();
        //$this->add_meta();
    }

    function register_post_type() {

        $labels = array(
            'name'               => 'Tramites Municipales',
            'singular_name'      => 'Tramite',
            'menu_name'          => 'Tramites Municipales',
            'name_admin_bar'     => 'Tramites Municipales',
            'parent_item_colon'  => 'Tramites Municipales Padre',
            'all_items'          => 'Todos los tramites',
            'add_new_item'       => 'Agregar tramite',
            'add_new'            => 'Agregar nuevo',
            'new_item'           => 'Nuevo tramite',
            'edit_item'          => 'Editar tramite',
            'update_item'        => 'Actualizar tramite',
            'view_item'          => 'Vista tramite',
            'search_items'       => 'Buscar tramite',
            'not_found'          => 'No encontrado ',
            'not_found_in_trash' => 'No se encontro para eliminar',
        );

        $args = array(
            'label'               => 'Tramite municipal',
            'description'         => 'Tramite municipal',
            'labels'              => $labels,
            'supports'            => array( 'title','editor' ),
            'taxonomies'          => array(),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 25,
            'menu_icon'           => 'dashicons-exerpt-view',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'rewrite'             => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
        );

        register_post_type( self::POST_TYPE, $args );
    }

    function add_meta(){
        //...
    }

}


//add_action( 'init', array( new procedures(), 'init' ) );
