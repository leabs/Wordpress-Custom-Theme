<?php

/*** Child Theme Function  ***/

if ( ! function_exists( 'innovio_mikado_child_theme_enqueue_scripts' ) ) {
	function innovio_mikado_child_theme_enqueue_scripts() {
		$parent_style = 'innovio-mikado-default-style';
		
		wp_enqueue_style( 'innovio-mikado-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
	}
	
	add_action( 'wp_enqueue_scripts', 'innovio_mikado_child_theme_enqueue_scripts' );
}