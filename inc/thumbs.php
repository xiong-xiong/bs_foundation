<?php 

//Tuki artikkelikuvien eri kokoisille kuville
if (function_exists('add_theme_support')) {
	add_theme_support( 'post-thumbnails' );
}

if (function_exists('add_image_size')) {
//KUVAKOOT
	add_image_size( 'banner',960 ,450, true );
	add_image_size( 'square',600 ,600, true );
	// true = crop image
}

?>