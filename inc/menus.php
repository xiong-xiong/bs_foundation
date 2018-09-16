<?php
//Create Nav Menu
//if (function_exists('register_nav_menus')) {
//	register_nav_menus (array( 'main-nav' => 'Header Navigation' ));
//	register_nav_menus (array( 'secondary' => 'City Navigation' ));
//}



function register_my_menus() {
  register_nav_menus(
    array(
      'mainnav' => __( 'Main nav' ),
      'meta-menu' => __( 'Meta Menu' ),
      'sidebar-menu' => __( 'Sidebar Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function xiong_category_nav_class( $classes, $item ){
    if( 'category' == $item->object ){
        $category = get_category( $item->object_id );
        $classes[] = 'menu-' . $category->slug;
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'xiong_category_nav_class', 10, 2 );


?>