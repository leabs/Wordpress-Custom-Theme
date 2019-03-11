<?php
if(is_page(pricing))
{
get_header('pricing');
}
else if(is_page(thankyou))
{
get_header('thankyou');
}
else if(is_page(company))
{
get_header('company');
}
else
{
get_header();
}
wp_head();
?>



    <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>


    
<?php get_footer();?>