<?php /* Template Name: SearchPage */ ?>
<?php get_header('search'); ?>
<div class="search-container">
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <div class="container content">
            <div class="search-page-form" id="ss-search-page-form">
            <br>
                <?php get_search_form(); ?>
            </div>
            <br>
          

            <?php if ( have_posts() ) : ?>
            <h1>
            <header class="page-header">
                <span class="search-page-title">
                    <?php printf( esc_html__( 'Search Results for: %s', stackstar ), '<span>' . get_search_query() . '</span>' ); ?></span>
            </header><!-- .page-header -->
            </h1>
            <br>

            <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <h5 class="search-post-title">
                    <?php the_title(); ?></h5>

                    <p><?php the_excerpt(); ?></p>
 
                <p class="search-post-link"><a href="<?php the_permalink(); ?>">
                        <?php the_permalink(); ?></a></p>

                <hr>
                    

                <?php endwhile; ?>

                <?php //the_posts_navigation(); ?>

                <?php else : ?>

                <?php //get_template_part( 'template-parts/content', 'none' ); ?>

                <?php endif; ?>

            </div>

        </main><!-- #main -->
    </section><!-- #primary -->
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>