<?php get_header('nobanner');?>

<section class="section">
    <div class="container">
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
                    <p class="menu-label ">
                        Blog
                    </p>
                    <ul class="menu-list blog-list">
                        <li><a href="<?php echo wp_make_link_relative('/category/blog/'); ?>" class="">All Posts</a>
                        </li>
                        <li><a href="<?php echo wp_make_link_relative('/category/blog/insights'); ?>">Insights</a></li>
                            <li><a href=" <?php echo wp_make_link_relative('/category/blog/platform');
                                ?>"">Platform</a></li>
                    </ul>
                    <p class="menu-label menu-label-no-bottom-margin">
                        Latest Blog Posts
                    </p>
                    <ul class="menu-list blog-list">

                        <?php $catquery = new WP_Query( 'cat=3&posts_per_page=5' ); ?>


                        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>


                        <li><a href="<?php the_permalink() ?>" rel="bookmark">
                                <?php the_title(); ?></a></li>
                        <span class="latest-post-meta">
                            <?php the_time('F jS, Y'); ?></span>
                        <?php endwhile;
                                wp_reset_postdata();
                        ?>
                    </ul>

                    <p class="menu-label">
                        Events
                    </p>
                    <ul class="menu-list events-list">
                        <li><a href="<?php echo wp_make_link_relative('/events/'); ?>">Upcoming
                                Events</a></li>
                        <li><a href="<?php echo wp_make_link_relative('/events-archive/'); ?>">Event
                                Archive</a></li>
                    </ul>
                    <p class="menu-label">
                        News
                    </p>
                    <ul class="menu-list news-list">
                        <li><a href="<?php echo wp_make_link_relative('/category/news/'); ?>" class="">All News</a></li>
                        <li><a href="<?php echo wp_make_link_relative('/category/pressreleases/'); ?>">Press
                                Releases</a></li>
                        <li><a href="<?php echo wp_make_link_relative('/category/newscoverage/'); ?>">News
                                Coverage</a></li>

                    </ul>
                    <p class="menu-label menu-label-no-bottom-margin">
                        Latest News Posts
                    </p>
                    <ul class="menu-list blog-list">

                        <?php $catquery = new WP_Query( 'cat=4&posts_per_page=5' ); ?>


                        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>


                        <li><a href="<?php the_permalink() ?>" rel="bookmark">
                                <?php the_title(); ?></a></li>
                        <span class="latest-post-meta">
                            <?php the_time('F jS, Y'); ?></span>
                        <?php endwhile;
                                wp_reset_postdata();
                        ?>
                </aside>
            </div>

            <div class="column is-9">
                <h1 class="section-header"><?php the_title(); ?></h1>
                <br>

                <?php
                if ( has_post_thumbnail()) {
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'largest');
                the_post_thumbnail('largest');
    
                        }
                    ?>
                <br>
                <!--Post Date-->
                <p class="blog-meta"><span><?php the_category(', '); ?> </span><span> |
                    </span><span><?php the_time('F jS, Y'); ?></span></p>
                <!--Post contents-->
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <?php the_content();?>
                <?php endwhile; endif;?>
            </div>

            <div class="column is-1 is-hidden-mobile" style="position:relative;">
                <div class="social-icon-container">
                <div class="column has-text-left has-text-secondary blog-post-share-icons" style="display:block; margin:0 auto; ">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.atmosphereiot.com<?php the_permalink() ?>" target="_blank"><i class="fab fa-facebook fa-2x" aria-label="Share to your facebook account"></i></a>
                    <a href="https://twitter.com/share?url=https://www.atmosphereiot.com<?php the_permalink() ?>&text=<?php the_title(); ?>&via=Atmosphere_Corp" target="_blank"><i class="fab fa-twitter fa-2x" aria-label="Share to your twitter account"></i></a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.atmosphereiot.com<?php the_permalink() ?>&title= <?php the_title(); ?>
                &summary= <?php the_excerpt(); ?>&source=Atmosphere%20IoT%20Corp" target="_blank"><i class="fab fa-linkedin fa-2x" aria-label="Share to your linked account"></i></a>
                </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer();?>