<?php
/*
Template Name: Thank You Page
*/
?>

    <?php get_header('thankyou'); ?>


    <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

    <?php endwhile; endif;?>



<?php get_footer();?>