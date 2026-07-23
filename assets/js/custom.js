jQuery('.service-home').hover(function(){jQuery('i',this).addClass('animated bounceIn');},function(){jQuery('i',this).removeClass('animated bounceIn');});jQuery('.app-video').hover(function(){jQuery('i',this).addClass('animated bounceIn');},function(){jQuery('i',this).removeClass('animated bounceIn');});jQuery('.query').hover(function(){jQuery('img',this).addClass('animated bounceIn');},function(){jQuery('img',this).removeClass('animated bounceIn');});jQuery('.app-video').magnificPopup({disableOn:200,type:'iframe',mainClass:'mfp-fade',removalDelay:160,preloader:false,fixedContentPos:false});jQuery(window).load(function(){jQuery.noConflict()(function(){var jQuerycontainer=jQuery('#container-folio');if(jQuerycontainer.length){jQuerycontainer.waitForImages(function(){jQuerycontainer.isotope({itemSelector:'.blog-items',layoutMode:'fitRows',filter:'.video-gallery'});jQuery('#filters a').click(function(){var selector=jQuery(this).attr('data-filter');jQuerycontainer.isotope({filter:selector});jQuery(this).removeClass('active').addClass('active').siblings().removeClass('active');return false;});},null,true);}});});jQuery(window).load(function(){jQuery.noConflict()(function(){var jQuerycontainer=jQuery('#smart-portfolio');if(jQuerycontainer.length){jQuerycontainer.waitForImages(function(){jQuerycontainer.isotope({itemSelector:'.isotope-item',layoutMode:'fitRows',filter:'.restaurant-website'});jQuery('#filters-portfolio a').click(function(){var selector=jQuery(this).attr('data-filter');jQuerycontainer.isotope({filter:selector});jQuery(this).removeClass('active').addClass('active').siblings().removeClass('active');return false;});},null,true);}});});jQuery(document).ready(function(){topbar_action();});function topbar_action(){jQuery(window).scroll(function(event){var scroll=jQuery(window).scrollTop();if(scroll>200){jQuery("#header").addClass("navbar-fixed-top");}else{jQuery("#header").removeClass("navbar-fixed-top");}});}$('#form3').validate({rules:{email2:{required:true,email:true},},messages:{email2:"Please enter a valid email address.",},submitHandler:submitForm6});function submitForm6(){jQuery('#successmsg').show();jQuery('#form3')[0].reset();setTimeout(function(){jQuery('#successmsg').hide();},5000);}

    // jQuery(".welcome-box").owlCarousel({
    //     items : 5,
    //     rewindNav:true,
    //     loop: false,
    //     itemsDesktop : [1199,5],
    //     itemsDesktopSmall : [979,3],
    //     itemsTablet: [600,2],
    //     itemsMobile : [479,1],
    //     slideSpeed : 800,
    //     mouseDrag: true,
    //     pagination : true,
    //     navigation: true,
    //         navigationText: [
    //         "<span class='ti-angle-left'></span>",
    //         "<span class='ti-angle-right'></span>"
    //         ],        
    //     autoPlay : true        
    // });

    $('.welcome-box').owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        nav: false,
        autoplay : true,
        smartSpeed: 1000,
        responsiveClass:true,
        responsive:{
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            992:{
                items: 3
            },
            1200:{
                items: 5
            }            
        }
    })

$('.product-slider').owlCarousel({
    items: 1,
    loop: true,
    margin: 30,
    mouseDrag: true,
    dots: true,
    autoplay : true,
    smartSpeed: 1000,
    responsiveClass:true
    // responsive:{
    //     0:{
    //         items: 1
    //     },
    //     768:{
    //         items: 2
    //     },
    //     992:{
    //         items: 3
    //     },
    //     1200:{
    //         items: 5
    //     }
    //}
})
//jQuery('#portfolio-items').mixItUp();

function others_how_did_you_know(obj) {
    if (obj == 'Other') {
        // document.getElementById("designation").disabled = true;
        var designationfield = '<input type="text" name="how_did_you_know_other" id="how_did_you_know_other" class="input" placeholder="Other" required>';
        document.getElementById('new-how_did_you_know_other').innerHTML = designationfield;
    } else {
        document.getElementById('new-how_did_you_know_other').innerHTML = '';
    }
}