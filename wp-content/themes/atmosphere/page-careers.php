<?php 
	
/*
	Template Name: Careers page (form on the bottom half of page)
*/
	
get_header('careers'); ?>

        <section class="section">
            <div class="container">

                <h2 class="section-header has-text-centered">Current Openings</h2>

                <p class="has-text-centered">The following career opportunities are currently available at Atmosphere:</p>

            <?php $catquery = new WP_Query( 'cat=6&posts_per_page=5' ); ?>


                        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>


                        <a href="<?php the_permalink() ?>" rel="bookmark">
                        <div class="column news-card is-12" style="margin:10px;">
                                <?php the_title(); ?>
                        <p class="latest-post-meta">
                            <?php the_time('F jS, Y'); ?></p>
                        <?php endwhile;
                                wp_reset_postdata();
                        ?>
                        
                        </div>
                        </a>    
            </div>
        </section>


<?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>

    
<?php get_footer();?>