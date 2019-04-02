<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="mkdf-post-content">
        <div class="mkdf-post-text">
            <div class="mkdf-post-mark">
                        <span class="mkdf-link-mark">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 70 70" enable-background="new 0 0 70 70" xml:space="preserve">
                    <g>
                        <g>
                            <path fill="none" stroke="#446CEF" stroke-width="2" stroke-miterlimit="10" d="M25.903,54.95l-3.441,3.416
                                c-2.979,2.955-7.832,2.959-10.812,0c-1.435-1.419-2.22-3.308-2.22-5.317c0-2.009,0.784-3.897,2.216-5.321l12.666-12.563
                                c2.623-2.606,7.563-6.438,11.161-2.868c1.652,1.639,4.321,1.631,5.961-0.021c1.639-1.651,1.631-4.32-0.021-5.96
                                c-6.118-6.068-15.161-4.947-23.035,2.868L5.711,41.748C2.672,44.765,1,48.779,1,53.05c0,4.271,1.672,8.28,4.711,11.298
                                C8.84,67.448,12.945,69,17.053,69c4.11,0,8.218-1.552,11.347-4.653l3.44-3.42c1.652-1.639,1.661-4.304,0.021-5.955
                                C30.223,53.32,27.554,53.311,25.903,54.95L25.903,54.95z M64.285,6.138C57.715-0.382,48.53-0.735,42.446,5.3l-4.287,4.259
                                c-1.652,1.638-1.665,4.303-0.021,5.955c1.639,1.652,4.304,1.66,5.956,0.021l4.287-4.254c3.154-3.13,7.279-1.831,9.969,0.838
                                c1.435,1.424,2.224,3.312,2.224,5.32c0,2.009-0.788,3.897-2.224,5.321l-13.51,13.402c-6.181,6.13-9.077,3.253-10.314,2.025
                                c-1.652-1.639-4.321-1.627-5.961,0.02c-1.639,1.652-1.631,4.321,0.021,5.961c2.839,2.813,6.076,4.209,9.467,4.209
                                c4.159,0,8.546-2.092,12.721-6.235l13.513-13.406C67.328,25.719,69,21.706,69,17.436C69,13.169,67.328,9.156,64.285,6.138
                                L64.285,6.138z M64.285,6.138"/>
                        </g>
                    </g>
                    </svg>
                        </span>
            </div>
            <div class="mkdf-post-text-inner">
                <div class="mkdf-post-text-main">
                    <?php innovio_mikado_get_module_template_part('templates/parts/post-type/link', 'blog', '', $part_params); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="mkdf-post-additional-content">
        <?php the_content(); ?>
    </div>
    <div class="mkdf-post-info-bottom-left">
		<?php innovio_mikado_get_module_template_part('templates/parts/post-info/tags', 'blog', '', $part_params); ?>
    </div>
    <div class="mkdf-post-info-bottom-right">
		<?php innovio_mikado_get_module_template_part('templates/parts/post-info/comments', 'blog', '', $part_params); ?>
		<?php innovio_mikado_get_module_template_part('templates/parts/post-info/like', 'blog', '', $part_params); ?>
		<?php innovio_mikado_get_module_template_part('templates/parts/post-info/share', 'blog', '', $part_params); ?>
    </div>
</article>