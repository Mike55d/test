<?php 

Class departments {
    const POST_TYPE = 'departments';

    function init(){
        $this->register_post_type();
        $this->add_meta();
        //add_filter()
    }

    function register_post_type() {

        $labels = array(
            'name'               => 'Departamentos',
            'singular_name'      => 'Departamento',
            'menu_name'          => 'Departamentos',
            'name_admin_bar'     => 'Departamento',
            'parent_item_colon'  => 'Departamento Padre',
            'all_items'          => 'Todos Departamentos',
            'add_new_item'       => 'Agregar nuevo departamento',
            'add_new'            => 'Agregar Nuevo',
            'new_item'           => 'Nuevo departamento',
            'edit_item'          => 'Edit departamento',
            'update_item'        => 'Actualizar departamento',
            'view_item'          => 'Vista departamento',
            'search_items'       => 'Buscar departamento',
            'not_found'          => 'No encontrado ',
            'not_found_in_trash' => 'No se encontro para eliminar',
        );

        $args = array(
            'label'               => 'Departamento',
            'description'         => 'Departamento',
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
            'has_archive'         => 'work',
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
        );

        register_post_type( self::POST_TYPE, $args );
    }

    function add_meta(){
        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array(
                'key' => 'group_5d1ceb4ee508e',
                'title' => 'Post-type Departments',
                'fields' => array(
                    array(
                        'key' => 'field_5d1ceb7057aa5',
                        'label' => 'Test',
                        'name' => 'test',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => $this::POST_TYPE,
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
            ));
            
        endif;
    }

}


//add_action( 'init', array( new departments(), 'init' ) );
