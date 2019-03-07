<?php get_header();?>


<section class="section">
    <div class="container">
        <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <a href="<?php the_permalink();?>">
        <div class="columns news-card" style="padding:12px;">
                <div class="column is-9">
                    <!-- Article Header -->
                    <header class="article-header">
                        <div class="article-title">
                            <h4 class="title news-title icon-header "><?php the_title();?></h4>
                            
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
                    
                    <img src="/images/icons/PressRelease.svg" style="display:block; margin:0 auto;" alt="icon for press release" class="news-icon is-64x64">
                    
                    
                </div>
                </div>

            </div>
</a>


        <?php endwhile; endif;?>
    </div>
</section>

    
<?php get_footer();?>