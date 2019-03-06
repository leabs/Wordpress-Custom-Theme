<?php get_header();?>

<section class="section homepage">
    <h1 class="has-text-white full-header"><?php the_title();?></h1>

    
</section>

<?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

    <?php endwhile; endif;?>
    
<?php get_footer();?>