<! DOCTYPE html>
<html>
    <head>

        <?php wp_head();?>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">

    </head>

    <body <?php body_class();?>>

    <header>
        <div class="container">
<?php wp_nav_menu (
    array(
        'theme_location' => 'top-menu',
        'menu_class' => 'top-nav navbar-end navbar is-fixed-top',
        'container_class' => 'container'
        
    )
)
?>



<?php wp_nav_menu (
    array(
        'theme_location' => 'main-menu',
        'menu_class' => 'main-nav navbar is-fixed-top',
        'container_class' => 'container'
        
    )
)
?>
     

</div>
</header>

