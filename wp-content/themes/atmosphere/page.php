<?php get_header();?>

<section class="section homepage">
    <h1 class="has-text-white full-header"><?php the_title();?></h1>

    
</section>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>
    </div>
</section>

    
<?php get_footer();?>