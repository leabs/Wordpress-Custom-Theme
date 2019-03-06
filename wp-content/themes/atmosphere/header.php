<! DOCTYPE html>
<html>
    <head>

        <?php wp_head();?>

    </head>

    <body <?php body_class();?>>

    <header>
        <div class="container">
<?php wp_nav_menu (
    array(
        'theme_location' => 'top-menu',
        'menu_class' => 'top-nav navbar-end hidden-sm hidden-xs'
        
    )
)
?>
<?php wp_nav_menu (
    array(
        'theme_location' => 'main-menu',
        'menu_class' => 'main-nav'
        
    )
)
?>
</div>
</header>

