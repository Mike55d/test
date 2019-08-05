<?php 

Class  theme {
    function init(){
        $this -> add_meta(); 
    }
    function add_meta(){
        if( function_exists('acf_add_local_field_group') ):

        endif;
    }
}
add_action( 'init', array( new theme(), 'init' ) );

?>