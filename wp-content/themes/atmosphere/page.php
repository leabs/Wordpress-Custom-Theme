<?php get_header();?>

<section class="section banner-section">
<div class="hero-body ">
        <div class="container " style="position: relative;">
            <div class="columns">
                <div class="column">
                <h1 class="has-text-white full-header"><?php the_title();?></h1>
                <h2 class="has-text-white sub-header"><?php get_secondary_title(); ?></h2>
                
                    
                </div>  
            </div> 
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
    <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>
    </div>
</section>

    
<?php get_footer();?>