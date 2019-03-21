<?php
$post_classes[] = 'mkdf-item-space';
$background_color_meta = get_post_meta( get_the_ID(), "mkdf_blog_list_initial_background_color_meta", true );
$styles = array();

if($background_color_meta !== ''){
    $styles[] =  'background-color: ' . $background_color_meta;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?> <?php innovio_mikado_inline_style($styles); ?>>
    <div class="mkdf-post-content">
        <div class="mkdf-post-text">
            <div class="mkdf-post-mark">
                <span class="mkdf-quote-mark">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 86 62" enable-background="new 0 0 86 62" xml:space="preserve">
                    <g>
                        <g>
                            <path fill="#446CEF" d="M20.201,2.4c5.317,0,9.529,1.538,12.875,4.702c3.315,3.138,4.926,7.226,4.926,12.498
                                c0,2.408-0.33,4.858-0.982,7.28c-0.664,2.468-2.238,6.343-4.678,11.52l-9.96,21.2H5.329l6.74-22.782l0.482-1.628l-1.529-0.74
                                c-2.766-1.338-4.845-3.219-6.354-5.75c-1.504-2.52-2.267-5.581-2.267-9.1c0-5.274,1.611-9.362,4.924-12.497
                                C10.671,3.938,14.882,2.4,20.201,2.4 M20.201,0.4C14.4,0.4,9.65,2.151,5.951,5.65c-3.701,3.502-5.55,8.152-5.55,13.95
                                c0,3.9,0.849,7.275,2.55,10.125c1.699,2.85,4.1,5.025,7.2,6.525l-7.5,25.35h21l10.5-22.35c2.498-5.3,4.099-9.249,4.799-11.851
                                c0.699-2.599,1.051-5.198,1.051-7.8c0-5.798-1.852-10.448-5.551-13.95C30.75,2.151,26,0.4,20.201,0.4L20.201,0.4z"/>
                        </g>
                        <g>
                            <path fill="#446CEF" d="M65.798,2.4c5.317,0,9.529,1.538,12.875,4.702c3.315,3.138,4.926,7.226,4.926,12.498
                                c0,2.408-0.33,4.858-0.982,7.28c-0.664,2.468-2.238,6.343-4.678,11.52l-9.96,21.2H50.927l6.74-22.782l0.482-1.629L56.62,34.45
                                c-2.767-1.338-4.845-3.219-6.355-5.75c-1.504-2.519-2.266-5.58-2.266-9.1c0-5.274,1.611-9.362,4.923-12.497
                                C56.268,3.938,60.48,2.4,65.798,2.4 M65.798,0.4c-5.801,0-10.551,1.751-14.25,5.25c-3.7,3.502-5.549,8.152-5.549,13.95
                                c0,3.9,0.848,7.275,2.549,10.125c1.699,2.85,4.1,5.025,7.201,6.525l-7.5,25.35h21l10.5-22.35c2.498-5.3,4.099-9.249,4.799-11.851
                                c0.699-2.599,1.051-5.198,1.051-7.8c0-5.798-1.852-10.448-5.551-13.95C76.348,2.151,71.597,0.4,65.798,0.4L65.798,0.4z"/>
                        </g>
                    </g>
                    </svg>
                </span>
            </div>
            <div class="mkdf-post-text-inner">
                <div class="mkdf-post-text-main">
                    <?php innovio_mikado_get_module_template_part('templates/parts/post-type/quote', 'blog', '', $part_params); ?>
                </div>
                <div class="mkdf-post-info-bottom clearfix">
                    <div class="mkdf-post-info-bottom-left">
			            <?php innovio_mikado_get_module_template_part('templates/parts/post-info/author', 'blog', '', $part_params); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>