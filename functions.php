<?php
//Activate scripts here
function my_theme_scripts() {
    	//Generic scripts
    	wp_enqueue_script( 'xiong-scripts', get_template_directory_uri() . '/js/xiong-scripts.js', array( 'jquery' ), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

function customtheme_add_woocommerce_support()
 {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

// INC

//Including menu functions
require_once( __DIR__ . '/inc/menus.php');

//Including thumbnail functions
require_once( __DIR__ . '/inc/thumbs.php');

?>