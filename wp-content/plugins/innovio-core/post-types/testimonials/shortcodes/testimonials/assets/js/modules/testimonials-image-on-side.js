(function($) {
    'use strict';

    var testimonialsVertical = {};
    mkdf.modules.mkdfInitTestimonialsVertical = mkdfInitTestimonialsVertical;

    testimonialsVertical.mkdfOnDocumentReady = mkdfOnDocumentReady;

    $(document).ready(mkdfOnDocumentReady);

    /*
     All functions to be called on $(document).ready() should be in this function
     */
    function mkdfOnDocumentReady() {
        mkdfInitTestimonialsVertical();
    }

    /**
     * Initializes testimonials vertical logic
     */

    function mkdfInitTestimonialsVertical() {
        var holders = $('.mkdf-testimonials-holder.mkdf-testimonials-image-on-side');

        if(holders.length) {
            holders.each(function(){
                var holder = $(this),
                    swiperInstance = holder.find('.swiper-container'),
                    singleItem = holder.find('.mkdf-testimonial-content'),
                    maxHeight = 0;

                var calcHeight = function() {
                    singleItem.each(function(){
                        var thisImgHeight = $(this).find('.mkdf-testimonial-image').height();
                        var thisTextHeight = $(this).find('.mkdf-testimonial-text-holder').height();
                        if (thisImgHeight > thisTextHeight) {
                            if(thisImgHeight > maxHeight) {
                                maxHeight = thisHeight;
                            }
                        } else {
                            if(thisTextHeight > maxHeight) {
                                maxHeight = thisTextHeight;
                            }
                        }
                    });

                    return maxHeight;
                }


                var swiperSlider = new Swiper (swiperInstance, {
                    loop: true,
                    autoplay: {
                        delay: 3000,
                    },
                    direction: 'vertical',
                    slidesPerView: 1,
                    speed: 500,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                        clickable: true,
                    },
                    autoHeight: true,
                    // slideToClickedSlide: true,
                    // Responsive breakpoints
                    // breakpoints: {
                    //     // when window width is <= 768px

                    //     768: {
                    //         slidesPerView: 1,
                    //     },
                    // },
                    init: false
                });

                swiperSlider.on('slideChange', function() {
                });

                swiperSlider.on('transitionEnd', function() {
                });


                holder.waitForImages(function() {
                    swiperSlider.init();
                });

                $(window).on('resize', function() {
                });
            });
        }
    }

})(jQuery);