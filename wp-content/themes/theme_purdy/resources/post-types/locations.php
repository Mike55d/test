<?php 

Class locations {
    const POST_TYPE = 'locations';

    function init(){
        $this->register_post_type();
        $this->add_meta();
        //add_filter()
    }

    function register_post_type() {

        $labels = array(
            'name'               => 'Sucursales',
            'singular_name'      => 'Sucursal',
            'menu_name'          => 'Sucursales',
            'name_admin_bar'     => 'Sucursal',
            'parent_item_colon'  => 'Sucursal Padre',
            'all_items'          => 'Todas las Sucursales',
            'add_new_item'       => 'Agregar nueva sucursal',
            'add_new'            => 'Agregar Nuevo',
            'new_item'           => 'Nueva sucursal',
            'edit_item'          => 'Edit sucursal',
            'update_item'        => 'Actualizar sucursal',
            'view_item'          => 'Ver sucursal',
            'search_items'       => 'Buscar sucursal',
            'not_found'          => 'No encontrado ',
            'not_found_in_trash' => 'No se encontro en basurero',
        );

        $args = array(
            'label'               => 'Sucursal',
            'description'         => 'Sucursal Purdy Motor',
            'labels'              => $labels,
            'supports'            => array( 'title','editor', 'thumbnail', 'custom_fields' ),
            'taxonomies'          => array(),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 25,
            'menu_icon'           => 'dashicons-location',
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


add_action( 'init', array( new locations(), 'init' ) );
