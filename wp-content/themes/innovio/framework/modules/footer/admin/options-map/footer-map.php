<?php

if ( ! function_exists( 'innovio_mikado_footer_options_map' ) ) {
	function innovio_mikado_footer_options_map() {

		innovio_mikado_add_admin_page(
			array(
				'slug'  => '_footer_page',
				'title' => esc_html__( 'Footer', 'innovio' ),
				'icon'  => 'fa fa-sort-amount-asc'
			)
		);

		$footer_panel = innovio_mikado_add_admin_panel(
			array(
				'title' => esc_html__( 'Footer', 'innovio' ),
				'name'  => 'footer',
				'page'  => '_footer_page'
			)
		);

		innovio_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'footer_in_grid',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Footer in Grid', 'innovio' ),
				'description'   => esc_html__( 'Enabling this option will place Footer content in grid', 'innovio' ),
				'parent'        => $footer_panel
			)
		);

        innovio_mikado_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'uncovering_footer',
                'default_value' => 'no',
                'label'         => esc_html__( 'Uncovering Footer', 'innovio' ),
                'description'   => esc_html__( 'Enabling this option will make Footer gradually appear on scroll', 'innovio' ),
                'parent'        => $footer_panel
            )
        );

		innovio_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'show_footer_top',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Footer Top', 'innovio' ),
				'description'   => esc_html__( 'Enabling this option will show Footer Top area', 'innovio' ),
				'parent'        => $footer_panel
			)
		);
		
		$show_footer_top_container = innovio_mikado_add_admin_container(
			array(
				'name'       => 'show_footer_top_container',
				'parent'     => $footer_panel,
				'dependency' => array(
					'show' => array(
						'show_footer_top' => 'yes'
					)
				)
			)
		);

		innovio_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'footer_top_columns',
				'parent'        => $show_footer_top_container,
				'default_value' => '3 3 3 3',
				'label'         => esc_html__( 'Footer Top Columns', 'innovio' ),
				'description'   => esc_html__( 'Choose number of columns for Footer Top area', 'innovio' ),
				'options'       => array(
					'12' => '1',
					'6 6' => '2',
					'4 4 4' => '3',
                    '3 3 6' => '3 (25% + 25% + 50%)',
					'3 3 3 3' => '4'
				)
			)
		);

		innovio_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'footer_top_columns_alignment',
				'default_value' => 'left',
				'label'         => esc_html__( 'Footer Top Columns Alignment', 'innovio' ),
				'description'   => esc_html__( 'Text Alignment in Footer Columns', 'innovio' ),
				'options'       => array(
					''       => esc_html__( 'Default', 'innovio' ),
					'left'   => esc_html__( 'Left', 'innovio' ),
					'center' => esc_html__( 'Center', 'innovio' ),
					'right'  => esc_html__( 'Right', 'innovio' )
				),
				'parent'        => $show_footer_top_container
			)
		);
		
		$footer_top_styles_group = innovio_mikado_add_admin_group(
			array(
				'name'        => 'footer_top_styles_group',
				'title'       => esc_html__( 'Footer Top Styles', 'innovio' ),
				'description' => esc_html__( 'Define style for footer top area', 'innovio' ),
				'parent'      => $show_footer_top_container
			)
		);
		
		$footer_top_styles_row_1 = innovio_mikado_add_admin_row(
			array(
				'name'   => 'footer_top_styles_row_1',
				'parent' => $footer_top_styles_group
			)
		);
		
			innovio_mikado_add_admin_field(
				array(
					'name'   => 'footer_top_background_color',
					'type'   => 'colorsimple',
					'label'  => esc_html__( 'Background Color', 'innovio' ),
					'parent' => $footer_top_styles_row_1
				)
			);
			
			innovio_mikado_add_admin_field(
				array(
					'name'   => 'footer_top_border_color',
					'type'   => 'colorsimple',
					'label'  => esc_html__( 'Border Color', 'innovio' ),
					'parent' => $footer_top_styles_row_1
				)
			);
			
			innovio_mikado_add_admin_field(
				array(
					'name'   => 'footer_top_border_width',
					'type'   => 'textsimple',
					'label'  => esc_html__( 'Border Width', 'innovio' ),
					'parent' => $footer_top_styles_row_1,
					'args'   => array(
						'suffix' => 'px'
					)
				)
			);

		innovio_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'show_footer_bottom',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Footer Bottom', 'innovio' ),
				'description'   => esc_html__( 'Enabling this option will show Footer Bottom area', 'innovio' ),
				'parent'        => $footer_panel
			)
		);

		$show_footer_bottom_container = innovio_mikado_add_admin_container(
			array(
				'name'            => 'show_footer_bottom_container',
				'parent'          => $footer_panel,
				'dependency' => array(
					'show' => array(
						'show_footer_bottom'  => 'yes'
					)
				)
			)
		);

		innovio_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'footer_bottom_columns',
				'default_value' => '4 4 4',
				'label'         => esc_html__( 'Footer Bottom Columns', 'innovio' ),
				'description'   => esc_html__( 'Choose number of columns for Footer Bottom area', 'innovio' ),
				'options'       => array(
					'12' => '1',
					'6 6' => '2',
					'4 4 4' => '3'
				),
				'parent'        => $show_footer_bottom_container
			)
		);
		
		$footer_bottom_styles_group = innovio_mikado_add_admin_group(
			array(
				'name'        => 'footer_bottom_styles_group',
				'title'       => esc_html__( 'Footer Bottom Styles', 'innovio' ),
				'description' => esc_html__( 'Define style for footer bottom area', 'innovio' ),
				'parent'      => $show_footer_bottom_container
			)
		);
		
		$footer_bottom_styles_row_1 = innovio_mikado_add_admin_row(
			array(
				'name'   => 'footer_bottom_styles_row_1',
				'parent' => $footer_bottom_styles_group
			)
		);
		
			innovio_mikado_add_admin_field(
				array(
					'name'   => 'footer_bottom_background_color',
					'type'   => 'colorsimple',
					'label'  => esc_html__( 'Background Color', 'innovio' ),
					'parent' => $footer_bottom_styles_row_1
				)
			);
			
			innovio_mikado_add_admin_field(
				array(
					'name'   => 'footer_bottom_border_color',
					'type'   => 'colorsimple',
					'label'  => esc_html__( 'Border Color', 'innovio' ),
					'parent' => $footer_bottom_styles_row_1
				)
			);
			
			innovio_mikado_add_admin_field(
				array(
					'name'   => 'footer_bottom_border_width',
					'type'   => 'textsimple',
					'label'  => esc_html__( 'Border Width', 'innovio' ),
					'parent' => $footer_bottom_styles_row_1,
					'args'   => array(
						'suffix' => 'px'
					)
				)
			);
	}

	add_action( 'innovio_mikado_action_options_map', 'innovio_mikado_footer_options_map', innovio_mikado_set_options_map_position( 'footer' ) );
}