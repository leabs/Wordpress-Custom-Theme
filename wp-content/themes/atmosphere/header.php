<! DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">

</head>

<body <?php body_class();?>>

    <header class="pageheader">
        <!--Topbar-->
        <div class="container">
            <?php wp_nav_menu (
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-nav navbar-end navbar is-hidden-touch',
                
                    
                )
            )
            ?>
        </div>

        <nav class="navbar main-nav" role="navigation" aria-label="main navigation">

            <div class="container">

                <div class="navbar-start">
                    <!-- navbar items -->
                    <div class="navbar-brand">
                        <a class="navbar-item" href="http://localhost:8888/Wordpress-Custom-Theme/">
                            <img src="http://localhost:8888/Wordpress-Custom-Theme/wp-content/uploads/2019/03/AtmosphereLogoHorizontal_NEGATIVE.png"
                                alt="Atmosphere IOT" width="192" height="34">
                        </a>
                    </div>
                </div>

                <div class="navbar-end">
                    <!-- navbar items -->
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                        <?php wp_nav_menu (
                                    array(
                                        'theme_location' => 'main-menu',
                                        'menu_class' => '',
                                    
                                        
                                    )
                                )
                                ?>
                    </a>
                </div>
            </div>

        </nav>
                                        
         <div class="hero-body has-text-centered">
            <div class="container " style="position: relative;">
                
                        <h1 class="has-text-white full-header">
                            <?php the_title();?>
                        </h1>
                        <h2 class="has-text-white sub-header">
                            <?php get_secondary_title(); ?>
                        </h2>


            </div>
        </div>                            

    </header>


       
  