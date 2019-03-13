<?php get_header();?>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-3 is-hidden-touch" style="padding-left:12px; padding-right:22px; padding-top:20px; padding-bottom:0; padding-top:0;">
                <div class="control has-icons-left has-icons-right is-hidden-touch" id="search-wrapper">
                    <div class="header-search">
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <label>

                                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                                    value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
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
                        <li><a href="<?php echo wp_make_link_relative('http://localhost/Wordpress-Custom-Theme/category/blog/'); ?>"
                                class="">All Posts</a></li>
                        <li><a href="/blog/insights.html">Insights</a></li>
                        <li><a href="/blog/platform.html">Platform</a></li>
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
                        <li><a href="/events">Upcoming Events</a></li>
                        <li><a href="/events/events-archive.html">Event Archive</a></li>
                    </ul>
                    <p class="menu-label">
                        News
                    </p>
                    <ul class="menu-list news-list">
                        <li><a href="/news" class="">All News</a></li>
                        <li><a href="/blog/insights.html">Press Releases</a></li>
                        <li><a href="/blog/platform.html">News Coverage</a></li>

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
            <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <a href="<?php the_permalink();?>">
                <div class="column is-9">

                    <div class="columns news-card" style="padding:12px;">
                        <div class="column">
                            <!-- Article Header -->
                            <header class="article-header">
                                <div class="article-title">
                                    <h4 class="title news-title icon-header ">
                                        <?php the_title();?>
                                    </h4>

                                    <p class="blog-meta">
                                        <span style="text-transform: capitalize;">
                                            <?php the_category(', '); ?>

                                        </span>
                                        <span> | </span><span>Jan</span> <span>09</span><span>, 20</span><span>19</span></p>
                                </div>
                            </header>
                            <br>

                            <!-- Article Content -->
                            <div class="article-content">
                                <div class="row">

                                    <div class="article-text col-md-12">
                                        <p>
                                            <?php the_excerpt();?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3 is-hidden-mobile is-vertical-center news-wrapper-wrapper">
                            <div class="is-128x128 news-icon-wrapper is-vertical-center" style="">

                                <img src="/images/icons/PressRelease.svg" style="display:block; margin:0 auto;" alt="icon for press release"
                                    class="news-icon is-64x64">


                            </div>
                        </div>

                    </div>
            </a>
            <?php endwhile; endif;?>
        </div>

    </div>
    </div>
</section>


<?php get_footer();?>