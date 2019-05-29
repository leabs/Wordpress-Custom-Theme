<?php 
	
/*
	Template Name: Page No Title
*/
	
get_header('company'); ?>

    <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>

        <section class="site-section blog-section" id="news">
    <!-- Section Heading -->
    <div class="container">
        <div class="row text-center">
            <!-- Section Header -->
            <header class="col-md-8 col-md-push-2 col-sm-12 section-header">
                <h2 class="section-header">Atmosphere Blog</h2>
                <br>
                <p>Keep up with the latest industry insights and platform updates.</p>
                <br>
            </header>
            <!-- Section Content -->
            <div class="col-md-8 col-md-push-2 col-sm-12 section-content">
                <p></p>
            </div>
        </div>
        <!-- Blog Articles Container -->
        <div class="row blog-articles-container" style="margin-top:0;">

            <?php $catquery = new WP_Query( 'cat=3&posts_per_page=3' ); ?>
            <div class="columns">
                <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="column is-12-mobile homepage-blog-card">
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                        <?php if ( has_post_thumbnail()) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
    
    the_post_thumbnail('largest');
    echo '</a>';
 }?><span
                            class="homepage-blog-title">
                            <a href="<?php the_permalink() ?>" rel="bookmark">
                                <?php the_title(); ?></span>
                    </a>
                    <?php echo '<p class="homepage-post-excerpt">' . get_the_excerpt() . '</p>';?>
                    </a>
                </div>
                <?php endwhile;
       wp_reset_postdata();
?>
            </div>


        </div>
        <!-- View All Posts CTA -->
        <div class="row view-posts text-center">
            <button type="button" class=" btn btn-default atmo-button-dark" onclick="location.href='https://testsite.atmosphereiot.com/category/blog/'">
                View All Posts
            </button>
        </div>
    </div>
</section>

<section class="site-section section-focus" style="background:#00ACC1 ">
  
        <h2 class="text-center section-header has-text-white">Careers</h2>
        <br>
        <p class="text-center has-text-white">We are always looking for talented people to join the Atmosphere team.</p>
        <br>
        <div class="row view-posts text-center">
            <a type="button" class=" btn btn-default atmo-button-primary" onclick="location.href='/careers'">
                Join Us
            </a>
        </div>
 
</section>

        


    
<?php get_footer();?>