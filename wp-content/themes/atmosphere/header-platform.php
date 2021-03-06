<! DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">



</head>

<body <?php body_class();?>>

    <header class="pageheader platform-header dark-nav">
        <!--Topbar-->
        <div class="top-nav-wrapper is-hidden-touch">
            <div class="container">
                <?php wp_nav_menu (
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-nav navbar-end navbar is-hidden-touch',
                
                    
                )
            )
            ?>
            </div>
        </div>

        <!--Main Nav-->
        <div class="non-parrallax-font">
        <nav class="navbar is-transparent  " id="main-nav">
            <div class="container bg" style="min-height: 4rem;">
                <div class="navbar-brand brand-light" style="min-height: 4rem; padding-left:12px;">
                    <a class="navbar-item" href="https://www.atmosphereiot.com/" style="padding: .25rem .25rem; width: 200px;">
                        <img src="https://testsite.atmosphereiot.com/wp-content/uploads/2019/03/AtmosphereLogoHorizontal_NEGATIVE.png"
                            alt="Atmosphere IOT" width="192" height="34">
                    </a>
                    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample" style="min-height: 4rem;position: absolute;">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div id="navbarExampleTransparentExample" class="navbar-menu">
                    <div class="navbar-start">
                    </div>
                    <div class="navbar-end" id="nav-container">
                       
                            <?php wp_nav_menu (
                                    array(
                                        'theme_location' => 'main-menu',
                                        'menu_class' => '',
                                    
                                    )
                                )
                                ?>
                       
                    </div>
                </div>
            </div>
        </nav>
                                    </div>

        <div class="hero-body has-text-centered">
            <div class="container " style="position: relative;">

                <h1 class="has-text-white full-header">
                Take a visual approach to simplifying IoT

                </h1>
                <h2 class="has-text-white sub-header">
                Accelerate your time to market with Atmosphere’s low-code IoT development platform.
                </h2>
      
                <div style="margin-top:40px;">
                    <img src="<?php bloginfo('template_url'); ?>/images/platform/StudioApplicationView.png" alt="screen shot of our platform" style="max-height:500px; margin: 0 auto; box-shadow:0px 5px 15px rgba(0,0,0,0.3); border-radius:2%; z-index:5;" />
                </div>

            </div>
        </div>

    </header>