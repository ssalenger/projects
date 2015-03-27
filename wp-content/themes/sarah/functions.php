<?php
if ( function_exists('register_sidebar') )
    register_sidebar();

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(array(
		'menu-1' => __( 'Menu 1' ),
		'menu-2' => __( 'Menu 2' )
	)
	);
}



?>