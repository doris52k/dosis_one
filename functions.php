<?php
	// Thumbnails
	add_theme_support( 'post-thumbnails' );
	// side-menu
	register_nav_menus( array(
		'main_menu' => 'Main Menu',
	));
	// top-menu
	register_sidebar( array(
		'name' => __( 'top_menu' ),
		'before_widget' => '<div class="top_menu">',
		'after_widget' => '</div>',
	));
?>