(function($){
    "use strict";

    jQuery(document).ready(function(){

        jQuery(".owl-single").each(function(){
            jQuery(this).slick({
                //autoplay: true,
                dots: true,
                autoplaySpeed: 3000
            });
        });


        jQuery(".article-carousel").each(function(){
            var number = jQuery(this).data('number');
            var dots = jQuery(this).data('dots');
            var arrows = jQuery(this).data('arrows');
            var table = jQuery(this).data('table');
            var mobile = jQuery(this).data('mobile');
            var mobilemin = jQuery(this).data('mobilemin');
            jQuery(this).slick({
                dots: dots,
                slidesToShow: number,
                arrows: arrows,
                autoplay: true,
                autoplaySpeed: 2500,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: table
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: mobile
                        }
                    },
                    {
                        breakpoint: 440,
                        settings: {
                            slidesToShow: mobilemin
                        }
                    }
                ]

            });
        });


        jQuery(".article-carousel-center").each(function(){
            var number = jQuery(this).data('number');
            var dots = jQuery(this).data('dots');
            var arrows = jQuery(this).data('arrows');
            jQuery(this).slick({
                dots: dots,
                slidesToShow: number,
                arrows: arrows,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed:2500,
                centerMode: true,
                variableWidth: true,
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 767,
                        settings: {
                            variableWidth: false
                        }
                    },
                    {
                        breakpoint: 568,
                        settings: {
                            centerMode: false,
                            variableWidth: false
                        }
                    }
                ]
            });
        });
        jQuery('.mega-menu').slicknav({
            prependTo   :'#goody-header',
            label       :''
        });
        //sticky sidebar
        $('.sidebar').theiaStickySidebar({additionalMarginTop: 0, additionalMarginBottom: 0, minWidth: 992});


        // Sticky Menu ------------------------------------------------------------------------------------------------/
        jQuery(".btn-mini-search").on( 'click', function(){
            jQuery(".header-content-right .searchform-wrap").removeClass('goody-hidden');
        });
        jQuery(".btn-mini-close").on( 'click', function(){
            jQuery(".header-content-right .searchform-wrap").addClass('goody-hidden');
        });

        // CANVAS MENU ------------------------------------------------------------------------------------------------/
        var menuWrap = jQuery('body').find('.button-offcanvas'),
            mainWrapper = jQuery('body'),
            iconClose = jQuery('.canvas-menu .btn-close'),
            canvasOverlay = jQuery('.canvas-overlay');

        // Function Canvas Menu
        function menuCanvas(){
            mainWrapper.toggleClass('canvas-open');
        }
        // Call Function Canvas
        menuWrap.on( 'click', function(){
            menuCanvas();
        });

        // Click icon close
        iconClose.on( 'click', function(){
            menuCanvas();
        });

        // Click canvas
        canvasOverlay.on( 'click', function(){
            menuCanvas();
        });

        // parallax ---------------------------------------------------------------------------------------------------/


        // Quantity ---------------------------------------------------------------------------------------------------/
        jQuery(".quantity .add-action").live( 'click', function(){
            if( jQuery(this).hasClass('qty-plus') ) {
                jQuery("[name=quantity]",'.quantity').val( parseInt(jQuery("[name=quantity]",'.quantity').val()) + 1 );
            }
            else {
                if( parseInt(jQuery("[name=quantity]",'.quantity').val())  > 1 ) {
                    jQuery("input",'.quantity').val( parseInt(jQuery("[name=quantity]",'.quantity').val()) - 1 );
                }
            }
        } );

        // Accordion Category------------------------------------------------------------------------------------------/

        if($('.product-categories li.cat-parent')[0]){
            $('.product-categories li.cat-parent>a').after('<span class="triggernav"><i class="expand-icon"></i></span>');
            toggleMobileNav('.triggernav', '.widget_product_categories .product-categories li ul');
        }

        function toggleMobileNav(trigger, target) {
            jQuery(target).each(function () {
                jQuery(this).attr('data-h', jQuery(this).outerHeight());
            });
            jQuery(target).addClass('unvisible');
            var h;
            jQuery(trigger).on("click", function () {
                h = 0;
                jQuery(this).prev('a').toggleClass('active');
                jQuery(this).toggleClass('active');
                jQuery.this = jQuery(this).next(target);
                if (jQuery.this.hasClass('unvisible')) {
                    //Get height of this item
                    if (jQuery.this.has("ul").length > 0) {
                        h = parseInt(jQuery.this.attr('data-h')) - parseInt(jQuery.this.find(target).attr('data-h'));
                    }
                    else {
                        h = parseInt(jQuery.this.attr('data-h'));
                    }
                    //resize for parent
                    jQuery.this.parents(target).each(function () {
                        jQuery(this).css('height', jQuery(this).outerHeight() + h);
                    })
                    //set height for this item
                    jQuery.this.css('height', h + "px");
                }
                else {
                    jQuery.this.find(target).not(':has(.unvisible)').addClass('unvisible');
                    //resize for parent when this item hide
                    h = jQuery.this.outerHeight();
                    jQuery.this.parents(target).each(function () {
                        jQuery(this).css('height', jQuery(this).outerHeight() - h);
                    })
                }
                jQuery.this.toggleClass('unvisible');
            });
        }
        //Facebook Comments ------------------------------------------------------------------------------------------//
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    });
    
    


})(jQuery);

