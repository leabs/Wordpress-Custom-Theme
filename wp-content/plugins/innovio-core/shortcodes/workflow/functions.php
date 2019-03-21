<?php

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_Mkdf_Workflow extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Mkdf_Workflow_Item extends WPBakeryShortCodesContainer {}
}

if ( ! function_exists( 'innovio_core_add_workflow_shortcodes' ) ) {
	function innovio_core_add_workflow_shortcodes( $shortcodes_class_name ) {
		$shortcodes = array(
			'InnovioCore\CPT\Shortcodes\Workflow\Workflow',
			'InnovioCore\CPT\Shortcodes\WorkflowItem\WorkflowItem'
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	add_filter( 'innovio_core_filter_add_vc_shortcode', 'innovio_core_add_workflow_shortcodes' );
}

if ( ! function_exists( 'innovio_core_set_worklow_custom_style_for_vc_shortcodes' ) ) {
	/**
	 * Function that set custom css style for workflow shortcode
	 */
	function innovio_core_set_workflow_custom_style_for_vc_shortcodes( $style ) {
		$current_style = '.vc_shortcodes_container.wpb_mkdf_worklof_item { 
			background-color: #f4f4f4; 
		}';
		
		$style .= $current_style;
		
		return $style;
	}
	
	add_filter( 'innovio_core_filter_add_vc_shortcodes_custom_style', 'innovio_core_set_workflow_custom_style_for_vc_shortcodes' );
}

if ( ! function_exists( 'innovio_core_set_workflow_icon_class_name_for_vc_shortcodes' ) ) {
	/**
	 * Function that set custom icon class name for workflow shortcode to set our icon for Visual Composer shortcodes panel
	 */
	function innovio_core_set_workflow_icon_class_name_for_vc_shortcodes( $shortcodes_icon_class_array ) {
		$shortcodes_icon_class_array[] = '.icon-wpb-workflow';
		$shortcodes_icon_class_array[] = '.icon-wpb-workflow-item';
		
		return $shortcodes_icon_class_array;
	}
	
	add_filter( 'innovio_core_filter_add_vc_shortcodes_custom_icon_class', 'innovio_core_set_workflow_icon_class_name_for_vc_shortcodes' );
}