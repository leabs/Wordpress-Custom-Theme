<?php get_header('gallery');?>
<div class="container">
    <section class="section">
        <div class="columns" style="flex-wrap: wrap;
    align-items: stretch;">
            <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <div class="column is-4" style="">
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
			<?php 
                endwhile; endif; ?>
            
    </section>
</div>
<?php get_footer();?>