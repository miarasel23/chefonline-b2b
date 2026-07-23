
$(document).ready(function() {
    var $ = jQuery;
    $("#enquiry_form").validate({
        errorPlacement: function(error, element) {
            if (element.attr("name") == "name")
                error.insertBefore(".name");
            else if (element.attr("name") == "email")
                error.insertBefore(".email");
            else if (element.attr("name") == "restaurant_name")
                error.insertBefore(".restaurant_name");
            else if (element.attr("name") == "postcode")
                error.insertBefore(".postcode");
            else if (element.attr("name") == "telephone")
                error.insertBefore(".telephone");
            else if (element.attr("name") == "comment")
                error.insertBefore(".message");
            else
                error.insertBefore(element);
        },
        rules: {
            name: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            restaurant_name: {
                required: true,
                minlength: 3
            },
            postcode: {
                required: true,
                minlength: 3
            },
            telephone: {
                required: true,
                minlength: 11,
                maxlength: 11
            },
            comment: {
                required: true,
                minlength: 5
            },
        },
        messages: {
            name: "Please provide Your Name",
            email: "Please provide Your Email Address",
            restaurant_name: "Please provide Restaurant name.",
            postcode: "Please provide postcode.",
            telephone: "Invalid Mobile Number",
            comment: "Please leave a message"
        },
        submitHandler: submitForm4
    });

    function submitForm4() {
        var data = $("#enquiry_form").serialize();
        $.ajax({
            type: 'POST',
            url: 'contactform',
            data: data,
            beforeSend: function() {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success: function(data) {
                //console.log(data);
                //alert('aaaaaaaaa');
                if (data) {
                    $('#myModal').modal('show');
                    setTimeout('window.location.href = "contact"; ', 5000);
                } else {
                    alert('Something wrong');
                }
            }
        });
    }
});


// Contact Form validation
jQuery(document).ready(function() {

    jQuery("#enquiry_form").click(function() {
        var response = grecaptcha.getResponse();
        var error = false;
        if (response == "") {
            jQuery('#err-captch').show(500);
            jQuery('#err-captch').delay(4000);
            jQuery('#err-captch').animate({
                height: 'toggle'
            }, 500, function() {
                // Animation complete.
            });
            error = true; // change the error state to true
        }

        if (error == false) {
            return true;
        } else {
            return false;
        }

    });
});