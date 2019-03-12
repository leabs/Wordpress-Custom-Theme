<?php get_header();?>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-3 is-hidden-touch" style="padding-left:12px; padding-right:22px; padding-top:20px; padding-bottom:0;">
                <div class="control has-icons-left has-icons-right is-hidden-touch" id="search-wrapper">
                    <div class="header-search">
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <label>

                                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                                    value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                            </label>
                            <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
                        </form>
                    </div>
                </div>
                <br>
                <aside class="menu blog-menu">
                    <p class="menu-label ">
                        Blog
                    </p>
                    <ul class="menu-list blog-list">
                        <li><a href="/blog" class="has-text-primary">All Posts</a></li>
                        <li><a href="/blog/insights.html">Insights</a></li>
                        <li><a href="/blog/platform.html">Platform</a></li>
                    </ul>
                    <p class="menu-label menu-label-no-bottom-margin">
                        Latest Posts
                    </p>
                    <ul class="menu-list blog-list">

                        <li style="padding: 6px 0;">
                            <a class="" href="/blog/platform-1-2-2.html" style="padding:0; margin-bottom:0;">Platform
                                Update: Version 1.2.2</a>
                            <span class="blog-meta">Posted <span>Dec</span> <span>02</span><span>, 20</span><span>18</span>
                            </span></li>

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

                    </ul>
                </aside>
            </div>
            <div class="column">
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <a href="<?php the_permalink();?>">
                    <div class="columns news-card" style="padding:12px;">
                        <div class="column is-9">
                            <!-- Article Header -->
                            <header class="article-header">
                                <div class="article-title">
                                    <h4 class="title news-title icon-header ">
                                        <?php the_title();?>
                                    </h4>

                                    <p class="blog-meta">
                                        <span style="text-transform: capitalize;">Press Releases

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