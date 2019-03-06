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

function loadjs()
{
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', '', 1, true);

    wp_enqueue_script('jquery');

    wp_register_script('bulma-scripts', get_template_directory_uri() . '/js/bulma-scripts.js', '', 1, true);

    wp_enqueue_script('bulma-scripts');

    wp_register_script('carousel', get_template_directory_uri() . '/js/carousel.min.js', '', 1, true);

    wp_enqueue_script('carousel');

    wp_register_script('mainjs', get_template_directory_uri() . '/js/main.js', '', 1, true);

    wp_enqueue_script('mainjs');
}

add_action('wp_enqueue_scripts', 'loadjs');

?>