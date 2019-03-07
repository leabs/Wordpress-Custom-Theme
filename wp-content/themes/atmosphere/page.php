<?php
if(is_page(pricing))
{
get_header('pricing');
}
else
{
get_header();
}
wp_head();
?>


<section class="section">
    <div class="container">
    <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>
    </div>
</section>

    
<?php get_footer();?>