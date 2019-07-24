<?php 

Class  page_online {
    function init(){
        $this -> add_meta();
    }
    function add_meta(){
        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array(
                'key' => 'group_5d1fa61e1febd',
                'title' => 'Page online',
                'fields' => array(
                    array(
                        'key' => 'field_5d1fa63bfabe1',
                        'label' => 'Titulo',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '¿Qué desea realizar?',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5d1fb1eaa6fb0',
                        'label' => 'Categorias en linea',
                        'name' => 'online_categories',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'collapsed' => '',
                        'min' => 0,
                        'max' => 0,
                        'layout' => 'block',
                        'button_label' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5d1fb20ba6fb1',
                                'label' => 'Titulo',
                                'name' => 'title',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 1,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_5d1fb212a6fb2',
                                'label' => 'Descripción',
                                'name' => 'description',
                                'type' => 'wysiwyg',
                                'instructions' => '',
                                'required' => 1,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'tabs' => 'all',
                                'toolbar' => 'full',
                                'media_upload' => 1,
                                'delay' => 0,
                            ),
                            array(
                                'key' => 'field_5d1febbbf740e',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'group',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layout' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5d1febccf740f',
                                        'label' => 'Label',
                                        'name' => 'label',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 1,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5d1febd5f7410',
                                        'label' => 'page',
                                        'name' => 'page',
                                        'type' => 'page_link',
                                        'instructions' => '',
                                        'required' => 1,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'post_type' => array(
                                            0 => 'page',
                                        ),
                                        'taxonomy' => '',
                                        'allow_null' => 0,
                                        'allow_archives' => 1,
                                        'multiple' => 0,
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'page',
                            'operator' => '==',
                            'value' => '39',
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
add_action( 'init', array( new page_online(), 'init' ) );

?>