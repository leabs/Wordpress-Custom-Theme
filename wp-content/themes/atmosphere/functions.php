<?php

function load_stylesheets()
{

    wp_register_style('bulma', get_template_directory_uri() . '/css/bulma.min.css', array(), false, 'all');
    wp_enqueue_style('bulma');

    wp_register_style('xcode', get_template_directory_uri() . '/css/xcode.css', array(), false, 'all');
    wp_enqueue_style('xcode');

    wp_register_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('owl-carousel');

    wp_register_style('owl-carousel-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), false, 'all');
    wp_enqueue_style('owl-carousel-theme');

    wp_register_style('base-styles', get_template_directory_uri() . '/css/base-styles.css', array(), false, 'all');
    wp_enqueue_style('base-styles');

    wp_register_style('styles', get_template_directory_uri() . '/css/styles.css', array(), false, 'all');
    wp_enqueue_style('styles');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');

}
add_action('wp_enqueue_scripts', 'include_jquery');


function loadjs()
{

    wp_register_script('bulma-scripts', get_template_directory_uri() . '/js/bulma-scripts.js', '', 1, true);
    wp_enqueue_script('bulma-scripts');
    wp_register_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', '', 1, true);
    wp_enqueue_script('carousel');
    wp_register_script('mainjs', get_template_directory_uri() . '/js/main.js', '', 1, true);
    wp_enqueue_script('mainjs');
}
add_action('wp_enqueue_scripts', 'loadjs');


remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'main-menu' => __('Main Menu', 'theme'),
    )
);

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

add_action('generate_inside_navigation','generate_navigation_logo');
function generate_navigation_logo()
{
?>
	<div class="site-logo">
		<img src="THE URL TO YOUR IMAGE" alt="" />
	</div>
<?php
}

?>