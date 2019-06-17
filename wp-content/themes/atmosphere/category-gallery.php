<?php get_header('gallery');?>
<div class="container">
    <section class="section">
        <div class="columns" style="flex-wrap: wrap; align-items: stretch;">
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
            <div class="columns">
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <div class="column is-6" style="">
                    <div style=" padding:12px;">
                        <div class="card project-card" style="">
                            <!-- Article Header -->
                            <header class="card-header project-card-header">
                                <div class="article-title">
                                    <a href="<?php the_permalink();?>" class="is-2by1">
                                        <?php the_post_thumbnail( 'category-thumb', array('class' => 'is-2by1') ); ?>
                                    </a>
                                    <div class="project-header-content">
                                        <a href="<?php the_permalink();?>">
                                            <h5 class="project-card-header-title">
                                                <?php the_title();?>
                                            </h5>
                                        </a>
                                        <br>
                                        <h5 class="project-author">
                                            <?php the_field('custom_project_author'); ?>
                                        </h5>
                                        <p class="project-meta">
                                            <?php the_date('F j, Y'); ?>
                                        </p>
                                    </div>
                                </div>
                            </header>
                            <br>
                            <!-- Article Content -->
                            <div class="project-card-content">
                                <div class="content project-content">
                                    <?php the_excerpt();?>
                                </div>
                            </div>
                            <footer class="project-card-footer card-footer">

                            </footer>
                        </div>
                    </div>

                </div>
                
                <?php $counter++;
                  if ($counter % 2 == 0) {
                  echo '</div><div class="columns" style="padding:12px;">';
                }
                endwhile; endif; ?>
                </div>
            </div>
    </section>
</div>
<?php get_footer();?>