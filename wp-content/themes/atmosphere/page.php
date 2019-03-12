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
else if(is_page(platform))
{
get_header('platform');
}
else if(is_page(contact))
{
get_header('contact');
}
else if(is_page(partners))
{
get_header('partners');
}
else if(is_page(features))
{
get_header('features');
}
else if(is_page(partnercontact))
{
get_header('partnercontact');
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