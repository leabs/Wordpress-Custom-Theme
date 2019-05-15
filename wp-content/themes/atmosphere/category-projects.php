<?php get_header('projects');?>
<div class="container">
    <section class="section">
        <div id="archive-filters">
            <?php foreach( $GLOBALS['my_query_filters'] as $key => $name ): 
	
	// get the field's settings without attempting to load a value
	$field = get_field_object($key, false, false);
	
	
	// set value if available
	if( isset($_GET[ $name ]) ) {
		
		$field['value'] = explode(',', $_GET[ $name ]);
		
	}
	
	
	// create filter
	?>
            <div class="filter" data-filter="<?php echo $name; ?>">
                <?php create_field( $field ); ?>
            </div>

            <?php endforeach; ?>
        </div>

        <script type="text/javascript">
            (function ($) {

                // change
                $('#archive-filters').on('change', 'input[type="checkbox"]', function () {

                    // vars
                    var url = '<?php echo home_url('
                    property '); ?>';
                    args = {};


                    // loop over filters
                    $('#archive-filters .filter').each(function () {

                        // vars
                        var filter = $(this).data('filter'),
                            vals = [];


                        // find checked inputs
                        $(this).find('input:checked').each(function () {

                            vals.push($(this).val());

                        });


                        // append to args
                        args[filter] = vals.join(',');

                    });


                    // update url
                    url += '?';


                    // loop over args
                    $.each(args, function (name, value) {

                        url += name + '=' + value + '&';

                    });


                    // remove last &
                    url = url.slice(0, -1);


                    // reload page
                    window.location.replace(url);

                    console.log(vals);


                });

            })(jQuery);
        </script>

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