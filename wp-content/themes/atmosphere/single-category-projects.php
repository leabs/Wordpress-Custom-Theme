<?php get_header('nobanner');?>

<section class="section" style="padding-top:12px; padding-bottom:12px;">
    <div class="container" style="padding:60px 0;">
        <div class="columns is-offset-2" >
            <div class="column is-9" >
                <h1 class="section-header"><?php the_title(); ?></h1>
                <br>

                <?php
                if ( has_post_thumbnail()) {
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'smallest');
                the_post_thumbnail('smallest');
    
                        }
                    ?>
                <br>
                <!--Post Date-->
                <p class="blog-meta"><span><?php the_category(', '); ?> </span><span> |
                    </span><span><?php the_time('F jS, Y'); ?></span></p>

                <!--Post contents-->
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <?php the_content();?>
                <p>Check out the project on Hackster.io <?php the_field('external_project_link');?>
                </p>
                <?php endwhile; endif;?>

            </div>

            <div class="column is-3">
                <h4 class="icon-header">Creators:</h4><span><?php the_field('custom_project_author'); ?></span><br>
                <br>
                <h4 class="icon-header">Contact:</h4><span><?php the_field('contact_link'); ?></span><br>
                        <br>
                <h4 class="icon-header">Platform:</h4><span><?php the_field('project_platform'); ?></span><br>
                <br>
                <h4 class="icon-header">Project Topics:</h4><span><?php the_field('project_topics'); ?></span><br>
                <br>
                <h4 class="icon-header">Project Type:</h4><span><?php the_field('project_type'); ?></span><br>
                <br>
                <h4 class="icon-header">Topic Tags:</h4><span><?php the_field('topic_tags'); ?></span><br>
                <br>
                <h4 class="icon-header">Level of Expertise:</h4><span><?php the_field('level_of_expertise'); ?></span><br>
                <br>
                <h4 class="icon-header">Hardware Used:</h4><span><?php the_field('hardware_used'); ?></span><br>
                <br>
                <h4 class="icon-header">Software Used:</h4><span><?php the_field('software_used'); ?></span><br>
            </div>

        </div>
    </div>
</section>

<?php get_footer();?>