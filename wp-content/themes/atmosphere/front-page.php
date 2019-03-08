<?php
if(is_page(home))
{
get_header('home');
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
<ul>
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
<li class="homepage-blog-card">
<a href="<?php the_permalink() ?>" rel="bookmark"><?php if ( has_post_thumbnail()) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
    echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
    the_post_thumbnail('largest');
    echo '</a>';
 }?><span class="homepage-blog-title"><?php the_title(); ?></span><?php the_excerpt(); ?></a>
</li>
<?php endwhile;
       wp_reset_postdata();
?>
</ul>
            
           
        </div>
        <!-- View All Posts CTA -->
        <div class="row view-posts text-center">
            <button type="button" class=" btn btn-default atmo-button-dark" onclick="location.href='http://localhost:8888/Wordpress-Custom-Theme/category/blog/'">
                View All Posts
            </button>
        </div>
    </div>
</section>

<section class="site-section-small" style="background:#00ACC1">
    <div class="container">
        <!-- Section Heading -->
        <div class="text-center has-text-white">
            <h3 class="section-subheader has-text-white">Send your next product to the cloud</h3>
            
            <p>Turn your IoT concept into a connected product reality with Atmosphere.</p>
            <br>
            <div class="row buttons-header">
                
                    <button type="button" class=" btn btn-default atmo-button atmo-button-primary" onclick=" window.open('https://bit.ly/2q8RO4s','_blank')">
                Get Started
            </button>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>

