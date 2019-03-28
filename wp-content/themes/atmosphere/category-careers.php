<?php get_header('blog');?>

<section class="section">
    <div class="container">
        <div class="columns">


            <div class="column is-12">
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
                                        <span> | </span><span>Jan</span> <span>09</span><span>, 20</span><span>19</span>
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