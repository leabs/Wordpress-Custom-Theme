<?php
namespace InnovioCore\CPT\Shortcodes\IconListItem;

use InnovioCore\Lib;

class IconListItem implements Lib\ShortcodeInterface {
	private $base;
	
	function __construct() {
		$this->base = 'mkdf_icon_list_item';
		
		add_action( 'vc_before_init', array( $this, 'vcMap' ) );
	}
	
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		if ( function_exists( 'vc_map' ) ) {
			vc_map(
				array(
					'name'     => esc_html__( 'Icon List Item', 'innovio-core' ),
					'base'     => $this->base,
					'icon'     => 'icon-wpb-icon-list-item extended-custom-icon',
					'category' => esc_html__( 'by INNOVIO', 'innovio-core' ),
					'params'   => array_merge(
						array(
							array(
								'type'        => 'textfield',
								'param_name'  => 'custom_class',
								'heading'     => esc_html__( 'Custom CSS Class', 'innovio-core' ),
								'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS', 'innovio-core' )
							),
							array(
								'type'        => 'textfield',
								'param_name'  => 'item_margin',
								'heading'     => esc_html__( 'Icon List Item Bottom Margin (px)', 'innovio-core' ),
								'description' => esc_html__( 'Set bottom margin for your Icon List Item element. Default value is 8', 'innovio-core' )
							)
						),
						innovio_mikado_icon_collections()->getVCParamsArray(),
						array(
							array(
								'type'       => 'textfield',
								'param_name' => 'icon_size',
								'heading'    => esc_html__( 'Icon Size (px)', 'innovio-core' )
							),
							array(
								'type'       => 'colorpicker',
								'param_name' => 'icon_color',
								'heading'    => esc_html__( 'Icon Color', 'innovio-core' )
							),
							array(
								'type'       => 'textfield',
								'param_name' => 'title',
								'heading'    => esc_html__( 'Title', 'innovio-core' )
							),
							array(
								'type'       => 'textfield',
								'param_name' => 'title_size',
								'heading'    => esc_html__( 'Title Size (px)', 'innovio-core' ),
								'dependency' => Array( 'element' => 'title', 'not_empty' => true )
							),
							array(
								'type'       => 'colorpicker',
								'param_name' => 'title_color',
								'heading'    => esc_html__( 'Title Color', 'innovio-core' ),
								'dependency' => Array( 'element' => 'title', 'not_empty' => true )
							),
							array(
								'type'        => 'textfield',
								'param_name'  => 'title_padding',
								'heading'     => esc_html__( 'Title Left Padding (px)', 'innovio-core' ),
								'description' => esc_html__( 'Set left padding for your text element to adjust space between icon and text. Default value is 13', 'innovio-core' ),
								'dependency'  => Array( 'element' => 'title', 'not_empty' => true )
							),
							array(
								'type'       => 'textfield',
								'param_name' => 'subtitle',
								'heading'    => esc_html__( 'Subtitle', 'innovio-core' )
							),
							array(
								'type'       => 'colorpicker',
								'param_name' => 'subtitle_color',
								'heading'    => esc_html__( 'Subtitle Color', 'innovio-core' ),
								'dependency' => Array( 'element' => 'subtitle', 'not_empty' => true )
							),
						)
					)
				)
			);
		}
	}
	
	public function render( $atts, $content = null ) {
		$args   = array(
			'custom_class'  => '',
			'item_margin'   => '',
			'icon_size'     => '',
			'icon_color'    => '',
			'title'         => '',
			'title_color'   => '',
			'title_size'    => '',
			'title_padding' => '',
			'subtitle'      => '',
			'subtitle_color'=> '',
		);
		$args   = array_merge( $args, innovio_mikado_icon_collections()->getShortcodeParams() );
		$params = shortcode_atts( $args, $atts );
		
		$iconPackName = innovio_mikado_icon_collections()->getIconCollectionParamNameByKey( $params['icon_pack'] );
		
		$params['holder_classes']           = $this->getHolderClasses( $params );
		$params['holder_styles']            = $this->getHolderStyles( $params );
		$params['icon']                     = $params[ $iconPackName ];
		$params['icon_attributes']['style'] = $this->getIconStyles( $params );
		$params['title_styles']             = $this->getTitleStyles( $params );
		$params['subtitle_styles']          = $this->getSubtitleStyles( $params );

		$html = innovio_core_get_shortcode_module_template_part( 'templates/icon-list-item-template', 'icon-list-item', '', $params );
		
		return $html;
	}
	
	private function getHolderClasses( $params ) {
		$holderClasses = array();
		
		$holderClasses[] = ! empty( $params['custom_class'] ) ? esc_attr( $params['custom_class'] ) : '';
		
		return implode( ' ', $holderClasses );
	}
	
	private function getHolderStyles( $params ) {
		$styles = array();
		
		if ( $params['item_margin'] !== '' ) {
			$styles[] = 'margin-bottom: ' . innovio_mikado_filter_px( $params['item_margin'] ) . 'px';
		}
		
		return implode( ';', $styles );
	}
	
	private function getIconStyles( $params ) {
		$styles = array();
		
		if ( ! empty( $params['icon_color'] ) ) {
			$styles[] = 'color: ' . $params['icon_color'];
		}
		
		if ( ! empty( $params['icon_size'] ) ) {
			$styles[] = 'font-size: ' . innovio_mikado_filter_px( $params['icon_size'] ) . 'px';
		}
		
		return implode( ';', $styles );
	}
	
	private function getTitleStyles( $params ) {
		$styles = array();

		if ( ! empty( $params['title_color'] ) ) {
			$styles[] = 'color: ' . $params['title_color'];
		}

		if ( ! empty( $params['title_size'] ) ) {
			$styles[] = 'font-size: ' . innovio_mikado_filter_px( $params['title_size'] ) . 'px';
		}

		if ( $params['title_padding'] !== '' ) {
			$styles[] = 'padding-left: ' . innovio_mikado_filter_px( $params['title_padding'] ) . 'px';
		}

		return implode( ';', $styles );
	}

	private function getSubtitleStyles( $params ) {
		$styles = array();

		if ( ! empty( $params['subtitle_color'] ) ) {
			$styles[] = 'color: ' . $params['subtitle_color'];
		}

		if ( $params['title_padding'] !== '' ) {
			$styles[] = 'padding-left: ' . innovio_mikado_filter_px( $params['title_padding'] ) . 'px';
		}

		return implode( ';', $styles );
	}
}