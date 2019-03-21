<?php

if ( ! function_exists( 'innovio_mikado_register_header_divided_type' ) ) {
	/**
	 * This function is used to register header type class for header factory file
	 */
	function innovio_mikado_register_header_divided_type( $header_types ) {
		$header_type = array(
			'header-divided' => 'InnovioMikadoNamespace\Modules\Header\Types\HeaderDivided'
		);
		
		$header_types = array_merge( $header_types, $header_type );
		
		return $header_types;
	}
}

if ( ! function_exists( 'innovio_mikado_init_register_header_divided_type' ) ) {
	/**
	 * This function is used to wait header-function.php file to init header object and then to init hook registration function above
	 */
	function innovio_mikado_init_register_header_divided_type() {
		add_filter( 'innovio_mikado_filter_register_header_type_class', 'innovio_mikado_register_header_divided_type' );
	}
	
	add_action( 'innovio_mikado_action_before_header_function_init', 'innovio_mikado_init_register_header_divided_type' );
}

if ( ! function_exists( 'innovio_mikado_include_header_divided_menu' ) ) {
	/**
	 * Registers additional menu navigation for theme
	 */
	function innovio_mikado_include_header_divided_menu( $menus ) {
		$menus['divided-left-navigation']  = esc_html__( 'Divided Left Navigation', 'innovio' );
		$menus['divided-right-navigation'] = esc_html__( 'Divided Right Navigation', 'innovio' );
		
		return $menus;
	}
	
	if ( innovio_mikado_check_is_header_type_enabled( 'header-divided' ) ) {
		add_filter( 'innovio_mikado_filter_register_headers_menu', 'innovio_mikado_include_header_divided_menu' );
	}
}

if ( ! function_exists( 'innovio_mikado_get_divided_left_main_menu' ) ) {
	/**
	 * Loads main menu HTML
	 *
	 * @param string $additional_class addition class to pass to template
	 */
	function innovio_mikado_get_divided_left_main_menu( $additional_class = 'mkdf-default-nav' ) {
		innovio_mikado_get_module_template_part( 'templates/divided-left-navigation', 'header/types/header-divided', '', array( 'additional_class' => $additional_class ) );
	}
}

if ( ! function_exists( 'innovio_mikado_get_sticky_divided_left_main_menu' ) ) {
	/**
	 * Loads main menu HTML
	 *
	 * @param string $additional_class addition class to pass to template
	 */
	function innovio_mikado_get_sticky_divided_left_main_menu( $additional_class = 'mkdf-default-nav' ) {
		innovio_mikado_get_module_template_part( 'templates/sticky-divided-left-navigation', 'header/types/header-divided', '', array( 'additional_class' => $additional_class ) );
	}
}

if ( ! function_exists( 'innovio_mikado_get_divided_right_main_menu' ) ) {
	/**
	 * Loads main menu HTML
	 *
	 * @param string $additional_class addition class to pass to template
	 */
	function innovio_mikado_get_divided_right_main_menu( $additional_class = 'mkdf-default-nav' ) {
		innovio_mikado_get_module_template_part( 'templates/divided-right-navigation', 'header/types/header-divided', '', array( 'additional_class' => $additional_class ) );
	}
}

if ( ! function_exists( 'innovio_mikado_get_sticky_divided_right_main_menu' ) ) {
	/**
	 * Loads main menu HTML
	 *
	 * @param string $additional_class addition class to pass to template
	 */
	function innovio_mikado_get_sticky_divided_right_main_menu( $additional_class = 'mkdf-default-nav' ) {
		innovio_mikado_get_module_template_part( 'templates/sticky-divided-right-navigation', 'header/types/header-divided', '', array( 'additional_class' => $additional_class ) );
	}
}