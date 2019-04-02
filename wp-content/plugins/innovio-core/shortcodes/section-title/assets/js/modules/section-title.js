(function($) {
    'use strict';

    var sectionTitle = {};
    mkdf.modules.sectionTitle = sectionTitle;

    sectionTitle.mkdfInitSectionTitle = mkdfInitSectionTitle;

    sectionTitle.mkdfOnWindowLoad = mkdfOnWindowLoad;

    $(window).load(mkdfOnWindowLoad);

    /*
     All functions to be called on $(window).load() should be in this function
     */
    function mkdfOnWindowLoad() {
        mkdfInitSectionTitle();
    }

    /**
     * Inti process shortcode on appear
     */
    function mkdfInitSectionTitle() {
        var holder = $('.mkdf-section-title-holder');
        var revHolder = $('.rev_slider');

        if(holder.length) {
            holder.each(function(){
                var thisHolder = $(this);

                if(thisHolder.closest(revHolder).length) {
                    //rev behavior
                    // thisHolder.closest(revHolder).bind("revolution.slide.onbeforeswap", function(e) {
                    //     thisHolder.removeClass('mkdf-section-title-appeared');
                    //     //thisHolder.addClass('mkdf-section-title-appeared');
                    // });
                    thisHolder.closest(revHolder).bind("revolution.slide.onchange", function(e) {
                        if(thisHolder.closest('.tp-revslider-slidesli').hasClass('active-revslide')) {
                            thisHolder.addClass('mkdf-section-title-appeared');
                        } else {
                            thisHolder.removeClass('mkdf-section-title-appeared');
                        }
                    });
                } else {
                    thisHolder.appear(function(){
                        thisHolder.addClass('mkdf-section-title-appeared');
                    },{accX: 0, accY: mkdfGlobalVars.vars.mkdfElementAppearAmount});
                }
            });
        }
    }

})(jQuery);