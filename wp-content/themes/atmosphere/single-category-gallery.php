<?php get_header('nobanner');?>

<section class="section" style="padding-top:12px; padding-bottom:12px;">
    <div class="container" style="padding:60px 0;">
        <div class="columns">
        <div class="column is-3 is-hidden-touch"
                style="padding-left:12px; padding-right:22px; padding-top:20px; padding-bottom:0; padding-top:0;">
                <div class="control has-icons-left has-icons-right is-hidden-touch" id="search-wrapper">
                    <div class="header-search">
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <label>

                                <input type="search" class="search-field"
                                    placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                                    value="<?php echo get_search_query() ?>" name="s"
                                    title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                            </label>

                        </form>
                    </div>
                </div>
                <br>
                <aside class="menu blog-menu">
                    <p class="menu-label">
                        Gallery Posts
                    </p>
                    <ul class="menu-list events-list">
                        <li><a href="https://atmosphereiot.com/category/gallery/">All Gallery Posts</a></li>


                    </ul>
                    <p class="menu-label">
                        Projects By Platform
                    </p>
                    <ul class="menu-list events-list">
                        <li><a
                                href="<?php echo wp_make_link_relative('https://atmosphereiot.com/category/gallery/avr-iot-project/'); ?>">AVR
                                IoT</a></li>
                        <li><a
                                href="<?php echo wp_make_link_relative('https://atmosphereiot.com/category/gallery/nxp-rapid-iot-projects/'); ?>">NXP
                                Rapid IoT</a></li>

                    </ul>


                    <p class="menu-label menu-label-no-bottom-margin">
                        Latest Gallery Posts
                    </p>
                    <ul class="menu-list blog-list">

                        <?php $catquery = new WP_Query( 'cat=98&posts_per_page=5' ); ?>


                        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>


                        <li><a href="<?php the_permalink() ?>" rel="bookmark">
                                <?php the_title(); ?></a></li>
                        <span class="latest-post-meta">
                            <?php the_time('F jS, Y'); ?></span>
                        <?php endwhile;
                                wp_reset_postdata();
                        ?>
                    </ul>




                </aside>
            </div>
            <div class="column is-9">
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
                    target="_blank"><?php endif; ?> View Full Project <?php if( $url ): ?></a><?php endif; 
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