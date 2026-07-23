<?php
// Enqueue child theme styles
function goody_child_theme_styles() {
    wp_enqueue_style( 'goody-child-theme', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'goody_child_theme_styles', 1000 );
	
	
