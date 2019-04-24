<?php
/**
* Template Name: Full Width Page
*
* @package WordPress
* @subpackage Atmosphere
*/
get_header('header'); ?>

<section class="section" >
    <div class="container">
        <!--Post contents-->
        <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <?php the_content();?>
        <?php endwhile; endif;?>
    </div>
</section>

<?php get_footer();?>
