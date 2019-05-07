<?php get_header('projects');?>
<div class="container">
    <section class="section">
        <div class="columns">
            <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <div class="column is-3 is-flex">
                <div style=" padding:12px;">
                    <div class="card project-card" style="">
                        <!-- Article Header -->
                        <header class="card-header project-card-header">
                            <div class="article-title">
                                <a href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail( 'category-thumb', array('class' => 'is-5by3') ); ?>
                                </a>
                                <div class="project-header-content">
                                    <a href="<?php the_permalink();?>">
                                        <h4 class="project-card-header-title">
                                            <?php the_title();?>
                                        </h4>
                                    </a>
                                    <br>
                                    <h5 class="project-author">
                                        <?php the_field('custom_author'); ?>
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
                            <div class="columns">
                                <div class="column">
                                    <a class="navbar-item" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank">
                                        <i class="fab fa-facebook-square project-share-icon"></i> Facebook
                                    </a>
                                </div>
                                <div class="column">
                                    <a class="navbar-item" href="https://twitter.com/share?url=<?php the_permalink();?>&text=<?php the_title();?>&via=Atmosphere_Corp" target="_blank">
                                        <i class="fab fa-twitter-square project-share-icon"></i> Twitter
                                    </a>
                                </div>
                                <div class="column">
                                    <a class="navbar-item" href="http://www.reddit.com/submit?url=<?php the_permalink();?>&title=<?php the_title();?>" target="_blank">
                                        <i class="fab fa-reddit-square project-share-icon"></i> Reddit
                                    </a>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                <?php 
                endwhile; endif; ?>
            </div>
            
    </section>
</div>
<?php get_footer();?>