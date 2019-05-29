<?php 
	
/*
	Template Name: NXP rapid IoT projects page
*/
	
get_header('gallery'); ?>



<section class="section">
    <div class="container">



    <?php 

$posts = get_posts(array(
	'numberposts'	=> -1,
	'post_type'		=> 'post',
	'meta_key'		=> 'project_platform',
    'meta_value'	=> 'NXP-Rapid-IoT'
));

if( $posts ): ?>
	
	<ul>
		
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
	
	<?php endforeach; ?>
	
	</ul>
	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>





    
        <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

        <?php endwhile; endif;?>
    </div>
</section>


<?php get_footer();?>