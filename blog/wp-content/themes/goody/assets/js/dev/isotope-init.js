(function($){
    "use strict";
    function goody_isotope(){
        var $grid =$('.affect-isotope').isotope({
            transitionDuration: '0.4s',
            masonry: {
                columnWidth:'.col-item'
            },
            fitWidth: true,
        });
        $grid.imagesLoaded().progress( function() {
            $grid.isotope('layout');
        });
    }
    jQuery(document).ready(function($) {
        goody_isotope();
        $("img.lazy").lazyload({
            threshold : 500
        });
    });

    jQuery(window).on( 'resize', function() {
        goody_isotope();
    }).resize();

    jQuery(window).load(function(){
        goody_isotope();
        $("img.lazy").lazyload({
            threshold : 500
        });
    });

})(jQuery);


