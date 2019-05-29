<?php /* Template Name: Events */ ?>
<?php get_header('events');?>

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
               
                <!--Post contents-->
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <?php the_content();?>
                <?php endwhile; endif;?>
            </div>

           

        </div>
    </div>
</section>

<?php get_footer();?>