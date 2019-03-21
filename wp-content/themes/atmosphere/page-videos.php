<?php
/**
* Template Name: Full Width Page
*
* @package WordPress
* @subpackage Atmosphere
*/
get_header('nobanner'); ?>

<section class="video section" style="padding-bottom:0;">
    <div class="container" style="padding:0;">
        <!--Post contents-->
        <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <?php the_content();?>
        <?php endwhile; endif;?>
    </div>
</section>

<?php get_footer();?>