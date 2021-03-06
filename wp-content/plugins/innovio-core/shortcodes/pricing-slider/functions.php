<?php

if ( ! function_exists( 'innovio_core_add_pricing_slider_shortcodes' ) ) {
    function innovio_core_add_pricing_slider_shortcodes( $shortcodes_class_name ) {
        $shortcodes = array(
            'InnovioCore\CPT\Shortcodes\PricingSlider\PricingSlider'
        );

        $shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );

        return $shortcodes_class_name;
    }

    add_filter( 'innovio_core_filter_add_vc_shortcode', 'innovio_core_add_pricing_slider_shortcodes' );
}

if ( ! function_exists( 'innovio_core_set_pricing_slider_icon_class_name_for_vc_shortcodes' ) ) {
    /**
     * Function that set custom icon class name for pricing slider shortcode to set our icon for Visual Composer shortcodes panel
     */
    function innovio_core_set_pricing_slider_icon_class_name_for_vc_shortcodes( $shortcodes_icon_class_array ) {
        $shortcodes_icon_class_array[] = '.icon-wpb-pricing-slider';

        return $shortcodes_icon_class_array;
    }

    add_filter( 'innovio_core_filter_add_vc_shortcodes_custom_icon_class', 'innovio_core_set_pricing_slider_icon_class_name_for_vc_shortcodes' );
}