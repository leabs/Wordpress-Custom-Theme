<?php 
    
/*
    Template Name: Page No Title
*/
    
get_header('gallery'); ?>

    <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>

        <section class="section">
            <div class="container">
                

            <?php $catquery = new WP_Query( 'cat=98&posts_per_page=5' ); ?>


                        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>


                        <a href="<?php the_permalink() ?>" rel="bookmark">
                        <div class="column news-card is-12" style="margin:10px;">
                                <?php the_title(); ?>
                        <p class="latest-post-meta">
                            <?php the_time('F jS, Y'); ?></p>
                        <?php endwhile;
                                wp_reset_postdata();
                        ?>
                        <p><?php the_excerpt(); ?></p>
                        </div>
                        </a>
               

                        
            </div>
        </section>

        
                <section class="section">
           <div class="container">
              <div class="row">

                 <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 is-12-mobile is-flex">
                    <div class="card project-card">
                       
                       <header class="card-header project-card-header">
                          <p class="project-card-header-title">
                             <a href="xhttps://platform.atmosphereiot.com/#%7B%22location%22%3A%22ProjectEditor%22%2C%22projectExample%22%3A%22Adafruit%20WINC1500%20Wi-Fi%20Shield%20Demo.atmo%22%7D" target="_blank">Adafruit WINC1500 Wi-Fi Shield Demo</a>
                          </p>

                       </header>
                       <div class="project-card-content">

                          <div class="content project-content">
                             <!--<p class="project-author"><a href="#">John Doe</a></p>-->
                             <p class="project-description">Create a UART slave device with this demo that's capable of responding to specific commands using the regular expression element.</p>

                          </div>
                          <div class="row">
                             <div class="col-md-6">
                                <a href="#" class="card-header-icon" aria-label="more options">
                          <span class="">
                            <span class="tag is-info">ESP32</span>
                          </span>
                        </a>
                             </div>
                             <div class="col-md-6">
                                <div class="has-text-right date-meta-project-card">
                                   <time datetime="2016-1-1">April 5th, 2019</time>
                                </div>
                             </div>
                          </div>

                       </div>
                       <footer class="project-card-footer card-footer">
                          <a href="#" class="project-card-footer-item project-button-disabled" ><i class="far fa-eye project-card-footer-icon"></i> View</a>

                          <a href="https://platform.atmosphereiot.com/#%7B%22location%22%3A%22ProjectEditor%22%2C%22projectExample%22%3A%22UART%20Slave%20Demo.atmo%22%7D" target="_blank" class="card-footer-item"><i class="fas fa-hammer project-card-footer-icon"></i> Build</a>

                          <div class="navbar-item has-dropdown is-hoverable project-card-footer-item">
                    <a class="navbar-link ">
                      <i class="fas fa-share-alt project-card-footer-icon"></i> Share
                    </a>

                    <div class="navbar-dropdown">
                      <a class="navbar-item">
                        Facebook
                      </a>
                      <a class="navbar-item">
                        Twitter
                      </a>
                      <a class="navbar-item">
                        Reddit
                      </a>
                      
                    </div>

                       </footer>
                    </div>
                 </div>
             </div>
         </section>

    
<?php get_footer();?>