<?php

if ( ! function_exists( 'innovio_core_import_object' ) ) {
	function innovio_core_import_object() {
		$innovio_core_import_object = new InnovioCoreImport();
	}
	
	add_action( 'init', 'innovio_core_import_object' );
}

if ( ! function_exists( 'innovio_core_data_import' ) ) {
	function innovio_core_data_import() {
		$importObject = InnovioCoreImport::getInstance();
		
		if ( $_POST['import_attachments'] == 1 ) {
			$importObject->attachments = true;
		} else {
			$importObject->attachments = false;
		}
		
		$folder = "innovio/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}
		
		$importObject->import_content( $folder . $_POST['xml'] );
		
		die();
	}
	
	add_action( 'wp_ajax_innovio_core_data_import', 'innovio_core_data_import' );
}

if ( ! function_exists( 'innovio_core_widgets_import' ) ) {
	function innovio_core_widgets_import() {
		$importObject = InnovioCoreImport::getInstance();
		
		$folder = "innovio/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}
		
		$importObject->import_widgets( $folder . 'widgets.txt', $folder . 'custom_sidebars.txt' );
		
		die();
	}
	
	add_action( 'wp_ajax_innovio_core_widgets_import', 'innovio_core_widgets_import' );
}

if ( ! function_exists( 'innovio_core_options_import' ) ) {
	function innovio_core_options_import() {
		$importObject = InnovioCoreImport::getInstance();
		
		$folder = "innovio/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}
		
		$importObject->import_options( $folder . 'options.txt' );
		
		die();
	}
	
	add_action( 'wp_ajax_innovio_core_options_import', 'innovio_core_options_import' );
}

if ( ! function_exists( 'innovio_core_other_import' ) ) {
	function innovio_core_other_import() {
		$importObject = InnovioCoreImport::getInstance();
		
		$folder = "innovio/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}
		
		$importObject->import_options( $folder . 'options.txt' );
		$importObject->import_widgets( $folder . 'widgets.txt', $folder . 'custom_sidebars.txt' );
		$importObject->import_menus( $folder . 'menus.txt' );
		$importObject->import_settings_pages( $folder . 'settingpages.txt' );

		$importObject->mkdf_update_meta_fields_after_import($folder);
		$importObject->mkdf_update_options_after_import($folder);

		if ( innovio_core_is_revolution_slider_installed() ) {
			$importObject->rev_slider_import( $folder );
		}
		
		die();
	}
	
	add_action( 'wp_ajax_innovio_core_other_import', 'innovio_core_other_import' );
}