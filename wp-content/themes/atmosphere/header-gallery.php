<! DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">

</head>

<body <?php body_class();?>>

    <header class="pageheader pricing-header">
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

        <div class="hero-body has-text-centered">
            <div class="container " style="position: relative;">

                <h1 class="has-text-white full-header">
                    Project Gallery
                </h1>
                <h2 class="has-text-white sub-header">
                    Check out these real-world projects made using the Atmosphere IoT Platform
                </h2>


            </div>
        </div>

    </header>