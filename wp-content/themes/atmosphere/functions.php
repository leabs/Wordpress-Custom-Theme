<?php
function load_stylesheets()
{

    wp_register_style('bulma', get_template_directory_uri() . '/css/bulma.min.css', array(), false, 'all');

    wp_enqueue_style('bulma');

    wp_register_style('base-styles', get_template_directory_uri() . '/css/base-styles.css', array(), false, 'all');

    wp_enqueue_style('base-styles');

    wp_register_style('styles', get_template_directory_uri() . '/css/styles.css', array(), false, 'all');

    wp_enqueue_style('styles');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');
?>