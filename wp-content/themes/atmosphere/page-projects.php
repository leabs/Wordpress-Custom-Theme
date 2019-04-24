<?php 
    
/*
    Template Name: Projects index
*/
    
get_header('projects'); ?>

<?php if (have_posts()) : while(have_posts()) : the_post();?>

<?php the_content();?>

<?php endwhile; endif;?>

<section class="section">
   <div class="container">


      <?php $catquery = new WP_Query( 'cat=98&posts_per_page=5' ); ?>


      <?php while($catquery->have_posts()) : $catquery->the_post(); ?>


      <div class="row">

         <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 is-12-mobile is-flex">
            <div class="card project-card">

               <header class="card-header project-card-header">
                  <div class="project-card-header-title">
                     <a href="<?php the_permalink() ?>" rel="bookmark">
                        <div class="">
                        <?php the_post_thumbnail( 'category-thumb' ); ?>
                           
                     </a>
                   
                     
                     
                     

                  </div>
                  
               </header>
               <br>
               <a href="<?php the_permalink() ?>" rel="bookmark">
                     <h4><?php the_title(); ?></h4>
                     </a>
                     <br>
               <div class="content project-content">
                  <p class="project-author">Created By: <a href="#">John Doe</a></p>
                  <div class="has-text-left date-meta-project-card">
                           <time><?php the_time('F jS, Y'); ?></time>
                        </div>
                        <hr>
                  
                     <?php the_excerpt(); ?>

                 
                     
                        <a href="#" class="card-header-icon has-text-left" aria-label="more options" style="">
                           <span class="">
                              <span class="tag is-warning">NXP Rapid IoT</span>
                           </span>
                        </a>
                   
                     
                  
               </div>


               <!--Card footer-->
               <footer class="project-card-footer card-footer">
                  <a href="<?php the_permalink() ?>" class="card-footer-item project-card-footer-item"><i
                        class="far fa-eye project-card-footer-icon"></i> View</a>

                  <a href="https://platform.atmosphereiot.com/#%7B%22location%22%3A%22ProjectEditor%22%2C%22projectExample%22%3A%22UART%20Slave%20Demo.atmo%22%7D"
                     target="_blank" class="card-footer-item project-card-footer-item"><i class="fas fa-hammer project-card-footer-icon"></i>
                     Build</a>

                  <div class="navbar-item has-dropdown is-hoverable card-footer-item project-card-footer-item">
                     <a class="navbar-link ">
                        <i class="fas fa-share-alt project-card-footer-icon card-footer-icon"></i> Share
                     </a>

                     <div class="navbar-dropdown">
                        <a class="navbar-item" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>">
                           Facebook
                        </a>
                        <a class="navbar-item" href="https://twitter.com/share?url=<?php the_permalink() ?>&text=<?php the_title(); ?>&via=Atmosphere_Corp">
                           Twitter
                        </a>
                        <a class="navbar-item" href="http://reddit.com/submit?url=<?php the_permalink() ?>&title=<?php the_title(); ?>">
                           Reddit
                        </a>

                     </div>

               </footer>




            </div>
         </div>
         <?php endwhile;
                                wp_reset_postdata();
                        ?>
      </div>
</section>






<?php get_footer();?>