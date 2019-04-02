<?php

if ( ! function_exists( 'innovio_core_add_roadmap_shortcodes' ) ) {
	function innovio_core_add_roadmap_shortcodes( $shortcodes_class_name ) {
		$shortcodes = array(
			'InnovioCore\CPT\Shortcodes\Roadmap\Roadmap'
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	add_filter( 'innovio_core_filter_add_vc_shortcode', 'innovio_core_add_roadmap_shortcodes' );
}

if ( ! function_exists( 'innovio_core_set_roadmap_icon_class_name_for_vc_shortcodes' ) ) {
	/**
	 * Function that set custom icon class name for roadmap shortcode to set our icon for Visual Composer shortcodes panel
	 */
	function innovio_core_set_roadmap_icon_class_name_for_vc_shortcodes( $shortcodes_icon_class_array ) {
		$shortcodes_icon_class_array[] = '.icon-wpb-roadmap';
		
		return $shortcodes_icon_class_array;
	}
	
	add_filter( 'innovio_core_filter_add_vc_shortcodes_custom_icon_class', 'innovio_core_set_roadmap_icon_class_name_for_vc_shortcodes' );
}