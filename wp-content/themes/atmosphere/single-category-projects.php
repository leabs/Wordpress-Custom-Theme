<?php get_header('nobanner');?>

<section class="section" style="padding-top:12px; padding-bottom:12px;">
    <div class="container" style="padding:60px 0;">
        <div class="columns" >
			
			
            <div class="column is-7 is-offset-2" >
                <h1 class="section-header">
					
                
					
					<h1><?php the_title(); ?></h1>
                <br>

                <?php
                if ( has_post_thumbnail()) {
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'largest');
                the_post_thumbnail('largest');
    
                        }
                    ?>
                <br>
					<p class="blog-meta"><span><?php the_category(', '); ?> </span><span> |
                    </span><span><?php the_time('F jS, Y'); ?></span></p>
					<p class="blog-meta"><strong>Hardware Used:</strong> <?php the_field('hardware_used'); ?></p>
               
                <p class="blog-meta"><strong>Software Used:</strong> <?php the_field('software_used'); ?></p>
					<hr>
					
                <!--Post Date-->
                

                <!--Post contents-->
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
					 
                <?php the_content();?>
					<br>
                <?php 

$url = get_field('External_Project_link');

?>
<?php if( $url ): ?><a class="atmo-button atmo-button-dark" href="<?php echo $url; ?>" target="_blank"><?php endif; ?> View on Hackster <?php if( $url ): ?></a><?php endif; ?>
               
					
                <?php endwhile; endif;?>

            </div>
			
			<div class="column is-3">
                
                <h4 class="icon-header">Platform:</h4><span><?php the_field('project_platform'); ?></span><br>
                <br>
                <h4 class="icon-header">Project Topics:</h4><span><?php the_field('project_topics'); ?></span><br>
                <br>
                <h4 class="icon-header">Project Type:</h4><span><?php the_field('project_type'); ?></span><br>
                <br>
                <h4 class="icon-header">Topic Tags:</h4><span><?php the_field('topic_tags'); ?></span><br>
                <br>
                <h4 class="icon-header">Level of Expertise:</h4><span><?php the_field('level_of_expertise'); ?></span><br>
               
                
            </div>

            

        </div>
    </div>
</section>

<?php get_footer();?>