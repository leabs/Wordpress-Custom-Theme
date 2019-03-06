<?php get_header();?>

<section class="section homepage">
    <div class="hero-body">
    <h1 class="has-text-white full-header"><?php the_title();?></h1>
    <h2 class="has-text-white sub-header">Accelerate your sensor-to-cloud project with the low-code development platform created for IoT solution builders.</h2>
    <br>
    <br>
    <button class="atmo-button" onclick=" window.open('https://bit.ly/2q8RO4s','_blank')">Get Started</button>
    <button class="atmo-button" onclick="location.href='/contact'">Contact Sales</button>
</div>

    
</section>

<?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

    <?php endwhile; endif;?>

<?php get_footer();?>