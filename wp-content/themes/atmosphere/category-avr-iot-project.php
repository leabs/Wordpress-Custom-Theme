<?php get_header('gallery');?>

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
					<p class="menu-label">
                        Gallery Posts
                    </p>
                    <ul class="menu-list events-list">
                        <li><a
                                href="https://atmosphereiot.com/category/gallery/">All Gallery Posts</a></li>
                        
                        
                    </ul>
                    <p class="menu-label">
                        Projects By Platform
                    </p>
                    <ul class="menu-list events-list">
                        <li><a
                                href="https://atmosphereiot.com/category/gallery/avr-iot-project/">AVR IoT</a></li>
                        <li><a
                                href="https://atmosphereiot.com/category/gallery/nxp-rapid-iot-projects/">NXP Rapid IoT</a></li>
                        
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
            <div class=" columns " style=" padding:12px;">
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <a href="<?php the_permalink();?>">
                    
                        <div class="column news-card is-6" style="margin:10px;">
                            <!-- Article Header -->
                            <header class="article-header">
                                <?php the_post_thumbnail( 'category-thumb' ); ?>
                                <div class="article-title">
                                    <h4 class="title news-title icon-header ">
                                        <?php the_title();?>
                                    </h4>

                                    <p class="blog-meta">
                                        <span style="text-transform: capitalize;">
                                            <?php the_category(', '); ?>

                                        </span>
                                        <span> | </span><span><?php the_date('F j, Y'); ?></span>
                                    </p>
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
                        


                    
                    
                
                <?php $counter++;
                  if ($counter % 2 == 0) {
                  echo '</div><div class="columns" style="padding:12px;">';
                }
                endwhile; endif; ?>
                </a>
                </div>
              
            </div>

        </div>
    </div>
</section>

<?php get_footer();?>