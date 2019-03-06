<?php get_header();?>

<section class="section homepage hero  is-fullheight has-text-white parrallax-font ">
    <div class="hero-body">
        <div class="container">
    <h1 class="has-text-white full-header"><?php the_title();?></h1>
    <h2 class="has-text-white sub-header">Accelerate your sensor-to-cloud project with the low-code development platform created for IoT solution builders.</h2>
    <br>
    <br>
    <button class="atmo-button" onclick=" window.open('https://bit.ly/2q8RO4s','_blank')">Get Started</button>
    <button class="atmo-button" onclick="location.href='/contact'">Contact Sales</button>
</div>
</div>

    
</section>

<?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

    <?php endwhile; endif;?>


    <section class="site-section blog-section" id="news">
    <!-- Section Heading -->
    <div class="container">
        <div class="row text-center">
            <!-- Section Header -->
            <header class="col-md-8 col-md-push-2 col-sm-12 section-header">
                <h2 class="section-header">Atmosphere Blog</h2>
                <br>
                <p>Keep up with the latest industry insights and platform updates.</p>
                <br>
            </header>
            <!-- Section Content -->
            <div class="col-md-8 col-md-push-2 col-sm-12 section-content">
                <p></p>
            </div>
        </div>
        <!-- Blog Articles Container -->
        <div class="row blog-articles-container" style="margin-top:0;">
         
        <ul>
<?php
    $args = array(
        'numberposts' => 3,
    );

    $recent_posts = wp_get_recent_posts($args, $output = ARRAY_A);
    foreach( $recent_posts as $recent ){
        echo get_the_post_thumbnail( $recent["ID"], 'largest' );
        echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
    }
?>
</ul>
            
           
        </div>
        <!-- View All Posts CTA -->
        <div class="row view-posts text-center">
            <button type="button" class=" btn btn-default atmo-button-dark" onclick="location.href='/blog/index.html'">
                View All Posts
            </button>
        </div>
    </div>
</section>

<section class="site-section-small" style="background:#00ACC1">
    <div class="container">
        <!-- Section Heading -->
        <div class="text-center has-text-white">
            <h3 class="section-subheader has-text-white">Send your next product to the cloud</h3>
            
            <p>Turn your IoT concept into a connected product reality with Atmosphere.</p>
            <br>
            <div class="row buttons-header">
                
                    <button type="button" class=" btn btn-default atmo-button atmo-button-primary" onclick=" window.open('https://bit.ly/2q8RO4s','_blank')">
                Get Started
            </button>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>

