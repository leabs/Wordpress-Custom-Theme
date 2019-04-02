

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/accordion.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();  ?>/timeline/js/vendor/venobox/venobox.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();  ?>/timeline/js/timeliner.js"></script>
	<script>
		$(document).ready(function() {
			$.timeliner({
				timelineContainer:'#timeline',
			});
			$('.venobox').venobox();
		});

	</script>
<script type="text/javascript">
	
	jQuery(document).ready(function(){
		jQuery('.mkdf-logo-wrapper a, .mkdf-mobile-logo-wrapper a').append('<img itemprop="image" class="dark-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.png" alt="logo" style="display:none;margin-top:-70px;">');
        jQuery('body.page-id-34 .mkdf-logo-wrapper a img,body.page-id-34 .mkdf-mobile-logo-wrapper a img').css('display','none');


        jQuery('body.page-id-34 .mkdf-mobile-logo-wrapper a img.dark-logo').css({
        	opacity: '0',
        	display: 'initial'
        });
       
        jQuery('body.page-id-34 .mkdf-logo-wrapper a,body.page-id-34 .mkdf-mobile-logo-wrapper a').addClass('platform_logo');

        //css('background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/nav-logo-dark.png)');
        jQuery('body.page-id-34 .mkdf-logo-wrapper a img.dark-logo,body.page-id-34 .mkdf-mobile-logo-wrapper a').css('display','block');


		jQuery(window).scroll(function(){
		var scroll = jQuery(window).scrollTop();

		if(scroll>=10){jQuery('.mkdf-fixed-wrapper').addClass('fixed')}else{jQuery('.mkdf-fixed-wrapper').removeClass('fixed')}

    if(scroll>= 10){

    	jQuery('body.page-id-34 .mkdf-logo-wrapper a img.dark-logo').css('display','none');
    	jQuery('.mkdf-logo-wrapper a img.mkdf-normal-logo').css('display','none');
    	jQuery('.mkdf-logo-wrapper a img.dark-logo').css('display','block');
    }else{jQuery('.mkdf-logo-wrapper a img.mkdf-normal-logo').css('display','block');
         jQuery('.mkdf-logo-wrapper a img.dark-logo').css('display','none');
         jQuery('body.page-id-34 .mkdf-logo-wrapper a img.dark-logo').css('display','block');
         jQuery('body.page-id-34 .mkdf-logo-wrapper a img.mkdf-normal-logo').css('display','none');

     }

    if(scroll>=10){jQuery('.mkdf-mobile-header .mkdf-vertical-align-containers').css('display','none')}else{jQuery('.mkdf-mobile-header .mkdf-vertical-align-containers ').css('display','block')}

    	if(scroll>= 500){jQuery('#mkdf-back-to-top').addClass('top_on')}else{jQuery('#mkdf-back-to-top').removeClass('top_on')}
    	


    });





jQuery('#mkdf-back-to-top').click(function(){
	$("html, body").animate({scrollTop: 0}, 1000);
});

jQuery('a.dark-link').click(function(){
	jQuery('html').css('scroll-behavior','smooth');
});

jQuery('.mkdf-mobile-header .mkdf-mobile-menu-opener').click(function(){

	jQuery('.mkdf-mobile-nav').toggleClass('mobile_menu');
});







jQuery('#accordion div:nth-child(1)').addClass('one');
jQuery('#accordion div:nth-child(2)').addClass('two');
jQuery('#accordion div:nth-child(3)').addClass('three');

jQuery('#accordion .one p').click(function(){

jQuery('#accordion .one article.price-info').toggleClass('display_block');

});
jQuery('#accordion .two p').click(function(){

jQuery('#accordion .two article.price-info').toggleClass('display_block');

});
jQuery('#accordion .three p').click(function(){

jQuery('#accordion .three article.price-info').toggleClass('display_block');

});



	});
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/Owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('section#owl_carousal div.owl-carousel').owlCarousel({
			margin: 20,
			nav:true,
			loop:true,
			autoplay:true,
			autoplayTimeout:1000,
			responsive:{
				0:{
					items:1
				},

				768:{
					items:2
				},

				992:{
					items:3
				},

				1200:{
					items:4
				}
			}
		});
	});
</script>







<?php do_action( 'innovio_mikado_get_footer_template' );

