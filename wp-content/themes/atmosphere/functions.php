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

    wp_register_style('bulma-timeline', get_template_directory_uri() . '/css/bulma-timeline.css', array(), false, 'all');
    wp_enqueue_style('bulma-timeline');

    wp_register_style('headers', get_template_directory_uri() . '/css/headers.css', array(), false, 'all');
    wp_enqueue_style('headers');

    wp_register_style('platform-features', get_template_directory_uri() . '/css/platform-features.css', array(), false, 'all');
    wp_enqueue_style('platform-features');

    wp_register_style('styles', get_template_directory_uri() . '/css/styles.css', array(), false, 'all');
    wp_enqueue_style('styles');

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('projects', get_template_directory_uri() . '/css/projects.css', array(), false, 'all');
    wp_enqueue_style('projects');

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
    wp_register_script('bulma-accordion', get_template_directory_uri() . '/js/bulma-accordion.min.js', '', 1, true);
    wp_enqueue_script('bulma-accordion');
    wp_register_script('bulma-tabs', get_template_directory_uri() . '/js/bulma-tabs.js', '', 1, true);
    wp_enqueue_script('bulma-tabs');
    wp_register_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', '', 1, true);
    wp_enqueue_script('carousel');
    wp_register_script('platform-features-tabs', get_template_directory_uri() . '/js/platform-features-tabs.js', '', 1, true);
    wp_enqueue_script('platform-features-tabs');
    wp_register_script('bulma-scripts', get_template_directory_uri() . '/js/bulma-scripts.js', '', 1, true);
    wp_enqueue_script('bulma-scripts');
    wp_register_script('mainjs', get_template_directory_uri() . '/js/main.js', '', 1, true);
    wp_enqueue_script('mainjs');
}
add_action('wp_enqueue_scripts', 'loadjs');


remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

add_theme_support('menus');
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' ); 

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'main-menu' => __('Main Menu', 'theme'),
    )
);

add_image_size('smallest', 500, 500, true);
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


add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat ) 
  { 
    if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php"; 
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php";
    }
  } 
  return $t;
}

?>

