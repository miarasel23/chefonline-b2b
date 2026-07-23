<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro');

.input {
    border: 1px solid #c8c8c8;
    box-shadow: none;
    padding: 10px;
    font-family: 'Source Sans Pro', sans-serif !important;
}

.head-text {
    font-family: 'Source Sans Pro', sans-serif !important;
}

#general_info_submit {
    background-color: #ed193a;
    border: 1px solid #ed193a;
    border-radius: 3px;
    color: #ffffff;
    font-family: "Roboto", sans-serif !important;
    font-weight: bold;
    padding: 8px 24px !important;
    text-transform: uppercase;
    transition: all 0.3s ease 0s;
    width: auto;
}

#general_info_submit:hover {
    background-color: #fff;
    border: 1px solid #ed193a;
    color: #ed193a;
    box-shadow: none;
}

.package-dropdown .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
    overflow: inherit;
    font-size: 13px;
}

.package-dropdown .bootstrap-select .dropdown-toggle .filter-option {
    padding-left: 13px;
}

.package-dropdown .bootstrap-select>.dropdown-toggle.bs-placeholder,
.package-dropdown .bootstrap-select>.dropdown-toggle.bs-placeholder:hover,
.package-dropdown .bootstrap-select>.dropdown-toggle.bs-placeholder:focus,
.package-dropdown .bootstrap-select>.dropdown-toggle.bs-placeholder:active,
.package-dropdown button.btn.dropdown-toggle.btn-default {
    line-height: 10px;
    border-radius: 0px;
}
</style>

<div class="title-banner service-banner spacetop">
    <div class="banner-property business-register parallax">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="#" class="shipping">ChefOnline</a>
                        <h1>Digital Marketing - Get A Quote</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'digitalMarketingGetAQuoteFormValidation.php'; ?>

<div class="aboutus-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>">Home</a></li>
                    <li class="active">Digital Marketing - Get A Quote</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div id="mainform">
                <div id="form">
                    <form id="contact_form" action="digital-marketing-get-a-quote" method="post"
                        onsubmit="return FormValidationDigitalMarketing();">
                        <ul>
                            <li class="form-element col-md-6">
                                <input id="OwnerName" class="input" name="OwnerName" type="text" placeholder="Name"
                                    pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" maxlength="50"
                                    value='<?php echo $val = (isset($OwnerName)) ? $OwnerName : null; ?>'
                                    onkeypress='return validChar(event);' required>
                                <div class="warning-message" id="OwnerNameErr">
                                    <?php echo $msg = (isset($error_BusinessOwner)) ? $error_BusinessOwner : null;?>
                                </div>
                            </li>

                            <li class="form-element col-md-6">
                                <input id="RestaurantName" class="input" name="RestaurantName" type="text"
                                    placeholder="Website / Company Name"
                                    value='<?php echo $val = (isset($RestaurantName)) ? $RestaurantName : null; ?>'
                                    maxlength="100" required>
                                <div class="warning-message" id="RestaurantNameErr">
                                    <?php echo $msg = (isset($error_BusinessName)) ? $error_BusinessName : null;?></div>
                            </li>

                            <li class="form-element col-md-6">
                                <input id="BusinessPhone" class="input" name="BusinessPhone" type="text"
                                    placeholder="Mobile Number"
                                    value='<?php echo $val = (isset($BusinessPhone)) ? $BusinessPhone : null; ?>'
                                    pattern="^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$"
                                    maxlength="15" onkeypress='return validateQty(event);' required>
                                <div class="warning-message" id="BusinessPhoneErr">
                                    <?php echo $msg = (isset($error_BusinessPhone)) ? $error_BusinessPhone : null;?>
                                </div>
                            </li>

                            <!-- <li class="form-element col-md-6">
                                <input id="RestaurantPhone" class="input" name="RestaurantPhone" type="text"
                                    placeholder="Business Phone Number"
                                    value='<?php echo $val = (isset($RestaurantPhone)) ? $RestaurantPhone : null; ?>'
                                    pattern="^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$"
                                    maxlength="15" onkeypress='return validateQty(event);'>
                                <div class="warning-message" id="RestaurantPhoneErr">
                                    <?php echo $msg = (isset($error_RestaurantPhone)) ? $error_RestaurantPhone : null;?>
                                </div>
                            </li> -->

                            <li class="form-element col-md-6">
                                <input id="BusinessEmail" class="input" name="BusinessEmail" type="text"
                                    placeholder="Email"
                                    value='<?php echo $val = (isset($BusinessEmail)) ? $BusinessEmail : null; ?>'
                                    pattern="^([a-z0-9_\.-]+)@([\da-z\.-]+){3,6}\.([a-z\.]{2,6})$" maxlength="50"
                                    required>
                                <div class="warning-message" id="BusinessEmailErr">
                                    <?php echo $msg = (isset($error_BusinessOwnerEmail)) ? $error_BusinessOwnerEmail : null;?>
                                </div>
                            </li>

                            <!-- <li class="form-element col-md-6">
                                <input id="BusinessAddress1" class="input" name="BusinessAddress1" type="text"
                                    placeholder="Business Address" maxlength="200"
                                    value='<?php echo $val = (isset($BusinessAddress1)) ? $BusinessAddress1 : null; ?>'
                                    required>
                                <div class="warning-message" id="BusinessAddressErr">
                                    <?php echo $msg = (isset($error_BusinessAddress)) ? $error_BusinessAddress : null;?>
                                </div>
                            </li> -->

                            <li class="form-element col-md-6 package-dropdown">
                                <select id="package" name="package" class="selectpicker" required>
                                    <option value="">Select Package</option>
                                    <option value="SEO Platinum">SEO Platinum</option>
                                    <option value="SMM Platinum">SMM Platinum</option>
                                </select>

                                <div class="warning-message" id="packageErr">
                                    <?php echo $msg = (isset($error_package)) ? $error_package : null;?>
                                </div>
                            </li>

                            <!-- <li class="form-element col-md-6">
                                <input id="BusinessPostcode" class="input" name="BusinessPostcode" type="text"
                                    placeholder="Postcode" maxlength="11"
                                    value='<?php echo $val = (isset($BusinessPostcode)) ? $BusinessPostcode : null; ?>'
                                    pattern="^[A-Za-z]{1,2}[0-9R][0-9A-Za-z]?[\s]?[0-9][ABD-HJLNP-UW-Z abd-hjlnp-uw-z]{2}$">
                                <div class="warning-message" id="BusinessPostcodeErr">
                                    <?php echo $msg = (isset($error_PostCode)) ? $error_PostCode : null;?></div>
                            </li> -->



                            <!--                             

                            <li class="form-element col-md-4">
                                <select id="epos_product" name="epos_product[]" class="selectpicker" multiple
                                    data-live-search="true" required>
                                    <optgroup label="Enterprise EPoS Packages">
                                        <option value="Enterprise EPoS Packages - ChefOnline Enterprise EPoS">
                                            ChefOnline Enterprise EPoS
                                        </option>
                                        <option value="Enterprise EPoS Packages - Pro Enterprise EPoS - Yuno">
                                            Pro Enterprise EPoS - Yuno
                                        </option>
                                        <option value="Enterprise EPoS Packages - Pro Enterprise EPoS - Sango">
                                            Pro Enterprise EPoS - Sango
                                        </option>
                                    </optgroup>

                                    <optgroup label="EPoS Packages">
                                        <option value="EPoS Packages - ChefOnline EPoS">ChefOnline EPoS</option>
                                        <option value="EPoS Packages - Nino">Nino</option>
                                        <option value="EPoS Packages - Yuno">Yuno</option>
                                        <option value="EPoS Packages - Sango">Sango</option>
                                        <option value="EPoS Packages - Sango i3">Sango i3</option>
                                    </optgroup>

                                    <optgroup label="Add ons">
                                        <option value="Add ons - Handheld Waiter Tab">Handheld Waiter Tab</option>
                                        <option value="Add ons - Thermal Receipt Printer">Thermal Receipt Printer
                                        </option>
                                        <option value="Add ons - Electronic Cash Drawer">Electronic Cash Drawer</option>
                                        <option value="Add ons - Modem">Modem</option>
                                        <option value="Add ons - Month OSM+">Month OSM+</option>
                                        <option value="Add ons - Post Code Database License">Post Code Database License
                                        </option>
                                    </optgroup>
                                </select>

                                <div class="warning-message" id="epos_productErr">
                                    <?php echo $msg = (isset($error_epos_product)) ? $error_epos_product : null;?>
                                </div>
                            </li> -->



                            <!-- <li class="form-element col-md-4">
                                <input id="Country" name="Country" class="input" type="text" value="United Kingdom"
                                    disabled="disabled">
                            </li> -->

                            <!-- <li class="form-element col-md-4">
                                <select name="how_did_you_know" id="how_did_you_know" class="input how_did_you_know"
                                    onchange="others_how_did_you_know(this.value);">
                                    <option value="" disabled selected hidden>How did you know about ChefOnline EPoS?
                                    </option>
                                    <option value="Social media">Social media</option>
                                    <option value="Friends">Friends</option>
                                    <option value="Newspaper">Newspaper</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div id="new-how_did_you_know_other"></div>
                            </li> -->

                            <li class="form-element col-md-6">
                                <label for="TermsAgree" class="pull-left" style="font-weight:normal;">
                                    <input id="TermsAgree" class="input input-inline" name="TermsAgree" type="checkbox"
                                        value="agree">
                                    <span id="TermsText" class="text-inline">I have read and accept the <a
                                            target="_blank" href="https://www.chefonline.com/terms-conditions"><u>terms
                                                and conditions</u>.</a></span>
                                    <div class="warning-message" id="CheckTermsErr">
                                        <?php echo $msg = (isset($error_checkbox)) ? $error_checkbox : null;?></div>
                                </label>

                                <div class="form-group">
                                   <div id="err-captch" style="display: none; color: red;">Please complete the security check.</div>
                                   <div class="g-recaptcha" name="recaptcha" data-sitekey="6Lc5LU8UAAAAAAfeOoxQUnaFaae0ZlnIWbCEUGf9"></div>
                                </div>

                                

                                <!-- <label class="pull-left" for="want_newsletter" style="font-weight:normal;">
                                    <input class="input-inline" id="want_newsletter" name="want_newsletter"
                                        type="checkbox"> <span class="text-inline">I do not want to receive any
                                        Newsletter.</span>
                                </label> -->

                                <!-- <div class="clearfix"></div> -->

                                <!-- <label class="pull-left" for="want_text_message" style="font-weight:normal;">
                                    <input class="input-inline" id="want_text_message" name="want_text_message"
                                        type="checkbox"><span class="text-inline"> I do not want to get any Text
                                        Message.</span>
                                </label> -->
                            </li>

                            <li class="form-element col-md-6">
                                <input class="pull-right" id="general_info_submit" type="submit" value="Submit">
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('contact_form').addEventListener('submit', function(e) {
    var captcha = grecaptcha.getResponse();

    if (captcha.length === 0) {
        // prevent submit
        e.preventDefault();

        // show your existing error message
        document.getElementById('err-captch').style.display = 'block';
        document.getElementById('err-captch').innerText = 'Please complete the security check.';
        return false;
    } else {
        // hide error if already completed
        document.getElementById('err-captch').style.display = 'none';
    }
});
</script>


<script type="text/javascript">
function FormValidationDigitalMarketing() {
    var $ = jQuery;
    var Error_color = '#FCF';

    var OwnerName = jQuery("#OwnerName").val();
    var BusinessEmail = jQuery("#BusinessEmail").val();
    var BusinessPhone = $("#BusinessPhone").val();
    var RestaurantName = $("#RestaurantName").val();
    var RestaurantPhone = $("#RestaurantPhone").val();
    var BusinessAddressOne = $("#BusinessAddress1").val();
    var epos_product = $("#epos_product").val();
    var BusinessPostcode = $("#BusinessPostcode").val();

    var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var postcode_filter = /^[A-Za-z]{1,2}[0-9R][0-9A-Za-z]?[\s]?[0-9][ABD-HJLNP-UW-Z abd-hjlnp-uw-z]{2}$/;
    var phone_filter =
        /^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/;

    var dataString = $("#contact_form").serialize();

    $('#OwnerName').on('focus', function() {
        $(this).css('background-color', '#FFFFFF');
    });

    $('#BusinessEmail').on('focus', function() {
        $(this).css('background-color', '#FFFFFF');
    });

    $('#BusinessPhone').on('focus', function() {
        $(this).css('background-color', '#FFFFFF');
    });

    $('#RestaurantName').on('focus', function() {
        $(this).css('background-color', '#FFFFFF');
    });

    $('#RestaurantPhone').on('focus', function() {
        $(this).css('background-color', '#FFFFFF');
    });

    $('#BusinessAddress1').on('focus', function() {
        $(this).css('background-color', '#FFFFFF');
    });

    $('#epos_product').on('focus', function() {
        $(this).css('background-color', '#FFFFFF');
    });
    $('#BusinessPostcode').on('focus', function() {
        $(this).css('background-color', '#FFFFFF');
    });

    //Check Business Owner Name     
    if (OwnerName == '') {
        //$('.inp').addClass('error');
        document.getElementById('OwnerNameErr').innerHTML = 'Owner Name can\'t be blank';
        return false;
    } else {
        $('#OwnerName').css('background-color', '#FFFFFF');
        document.getElementById('OwnerNameErr').innerHTML = '';
    }

    //Check Email Address
    if (BusinessEmail == '') {
        $('#BusinessEmail').css('background-color', Error_color);
        document.getElementById('BusinessEmailErr').innerHTML = 'Email address cann\'t be blank!';
        return false;
    } else if (!email_filter.test(BusinessEmail)) {
        $('#BusinessEmail').css('background-color', Error_color);
        document.getElementById('BusinessEmailErr').innerHTML = 'Email address is not valid!';
        return false;
    } else {
        $('#BusinessEmail').css('background-color', '#FFFFFF');
        document.getElementById('BusinessEmailErr').innerHTML = '';
    }

    //Check Phone Number
    if (BusinessPhone == '') {
        $('#BusinessPhone').css('background-color', Error_color);
        document.getElementById('BusinessPhoneErr').innerHTML = 'Business Phone Number cann\'t be blank!';
        return false;
    } else if (!phone_filter.test(BusinessPhone)) {
        $('#BusinessPhone').css('background-color', Error_color);
        document.getElementById('BusinessPhoneErr').innerHTML = 'Business Phone Number is not valid!';
        return false;
    } else {
        $('#BusinessPhone').css('background-color', '#FFFFFF');
        document.getElementById('BusinessPhoneErr').innerHTML = '';
    }

    //Check Restaurant Name
    if (RestaurantName == '') {
        $('#RestaurantName').css('background-color', Error_color);
        document.getElementById('RestaurantNameErr').innerHTML = 'Restaurant Name cann\'t be blank!';
        return false;
    } else {
        $('#RestaurantName').css('background-color', '#FFFFFF');
        document.getElementById('RestaurantNameErr').innerHTML = '';
    }

    //Check Restaurant Phone Number
    // if (RestaurantPhone == '') {
    //     $('#RestaurantPhone').css('background-color', Error_color);
    //     document.getElementById('RestaurantPhoneErr').innerHTML = 'Business Phone Number cann\'t be blank!';
    //     return false;
    // } else 
    if (!phone_filter.test(RestaurantPhone)) {
        $('#RestaurantPhone').css('background-color', Error_color);
        document.getElementById('RestaurantPhoneErr').innerHTML = 'Business Phone Number is not valid!';
        // return false;
    } else {
        $('#RestaurantPhone').css('background-color', '#FFFFFF');
        document.getElementById('RestaurantPhoneErr').innerHTML = '';
    }

    //Check Business Address
    if (BusinessAddressOne == '') {
        $('#BusinessAddress1').css('background-color', Error_color);
        document.getElementById('BusinessAddressErr').innerHTML = 'Restaurant Address cann\'t be blank!';
        return false;
    } else {
        $('#BusinessAddress1').css('background-color', '#FFFFFF');
        document.getElementById('BusinessAddressErr').innerHTML = '';
    }

    if (epos_product == '') {
        $('#epos_product').css('background-color', Error_color);
        document.getElementById('epos_productErr').innerHTML = 'EPoS Package cann\'t be blank!';
        return false;
    } else {
        $('#epos_product').css('background-color', '#FFFFFF');
        document.getElementById('epos_productErr').innerHTML = '';
    }

    //Check PostCode
    if (!postcode_filter.test(BusinessPostcode) && BusinessPostcode != '') {
        $('#BusinessPostcode').css('background-color', Error_color);
        document.getElementById('BusinessPostcodeErr').innerHTML = 'Business Postcode is not valid!';
        return false;
    } else {
        $('#BusinessPostcode').css('background-color', '#FFFFFF');
        document.getElementById('BusinessPostcodeErr').innerHTML = '';
    }

    //Check Check box
    if ($('#TermsAgree').is(":checked") == false) {
        document.getElementById('CheckTermsErr').innerHTML = 'You must agree with our terms and conditions';
        return false;
    }

} //End of Form Validation

function validChar(event) {
    var key = window.event ? event.keyCode : event.which;

    if (key > 48 && key < 57) {
        return false;
    } else return true;
};

function validateQty(event) {
    var key = window.event ? event.keyCode : event.which;
    if (key == 8 || key == 43) {
        return true;
    } else if (key < 48 || key > 57) {
        return false;
    } else return true;
};
</script>

<script type="text/javascript">
$('#epos_product').selectpicker({
    noneSelectedText: 'Select Package'
});
</script>