<?php get_header('nobanner');?>

<section class="section" style="padding-top:12px; padding-bottom:12px;">
    <div class="container" style="padding:60px 0;">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <!--Post Title-->
                <h1 class="section-header">
                    <?php the_title(); ?>
                </h1>

                <br>
                <!--Post featured Image-->
                <div class="gallery-featured-image-wrapper">
                    <?php
                        if ( has_post_thumbnail()) {
                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'largest');
                        the_post_thumbnail('largest'); } 
                    ?>
                </div>
                <br>
                <!--Post Category-->
                <p class="blog-meta">
                <span><?php the_time('F jS, Y'); ?></span>
                
                    <span> | </span>
                    <!--Post Date-->
                    <span><?php the_category(', '); ?> </span>
                </p>

                <!--Post contents-->
                <?php if (have_posts()) : while(have_posts()) : the_post();?>

                <!--Post Content-->
                <?php the_content();?>
                <br>
                <!--Hackster link-->
                <?php $url = get_field('External_Project_link'); ?>
                <?php if( $url ): ?><a class="atmo-button atmo-button-dark" href="<?php echo $url; ?>"
                    target="_blank"><?php endif; ?> View on Hackster <?php if( $url ): ?></a><?php endif; 
                ?>

                <?php endwhile; endif;?>

                <div class="gallery-bottom-tags">
                    <p class="blog-meta"><strong>Platform:</strong> <?php the_field('project_platform'); ?></p>

                    <p class="blog-meta"><strong>Topic Tags:</strong> <?php the_field('topic_tags'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>