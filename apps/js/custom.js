topbar_action();

function topbar_action() {
    jQuery(window).scroll(function(event) {
        var scroll = jQuery(window).scrollTop();
        if (scroll > 1) {
            if (!jQuery("#header").hasClass("small-header")) {
                jQuery("#header").addClass("small-header");
            }
        } else {
            if (jQuery("#header").hasClass("small-header")) jQuery("#header").removeClass("small-header");
        }
    });
}
$(function() {
    $(".strategy-popover").popover({
        trigger: "hover"
    });
})
jQuery(function() {
    var url = window.location.href;
    jQuery("#header a").each(function() {
        if (url == (this.href)) {
            jQuery(this).closest("li").addClass("active");
        }
    });
});;
(function($) {
    var img_src_backup = $('.middle-part img').attr('src');
    $('.blog').on('mouseenter', function() {
        var img_src = $(this).attr('data-image');
        if (img_src) {
            $('.middle-part img').attr('src', img_src);
        }
    })
    $('.blog').on('mouseleave', function() {
        $('.middle-part img').attr('src', img_src_backup);
    })
})(jQuery)
$('#contctForm').on('submit', function(e) {
    e.stopPropagation();
    e.preventDefault();
    var data = $(this).serialize();
    $.ajax({
        url: 'email/send_email.php',
        type: 'POST',
        data: data,
        success: function(data) {
            if (data == '1') {
            	document.getElementById("contctForm").reset();
                toastr.success('One of our customer care officer will get back to you shortly.', 'Email successfully sent');
            } else {
                toastr.error('Try again letter or call us for instant support.', 'Failed!');
            }
        }
    })
});