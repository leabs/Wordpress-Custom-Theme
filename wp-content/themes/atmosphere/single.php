<?php get_header();?>

<section class="section">
    <div class="container">
        <h1 class="is-12-desktop half-header"><?php the_title();?></h1>

        <!--banner image if statement-->
        <?php
            if ( has_post_thumbnail()) {
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'largest');
                the_post_thumbnail('largest');
    
            }
        ?>
        <br>
        <!--Post Date-->
        <p class="blog-meta"><span><?php the_category(', '); ?> </span><span> | </span><span><?php the_time('F jS, Y'); ?></span></p>

      

        <!--Post contents-->
        <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <?php the_content();?>
        <?php endwhile; endif;?>
    </div>
</section>

    
<?php get_footer();?>