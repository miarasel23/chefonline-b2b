<!-- <meta http-equiv="refresh" content="0;url=https://www.chefonline.co.uk/partner" /> -->

<script src='https://www.google.com/recaptcha/api.js'></script>

<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro');

.input {
    /*border: 1px solid #c8c8c8; 
    padding: 10px;
    font-family: 'Source Sans Pro', sans-serif !important;*/
	border: none;
    padding: 10px;
    font-family: 'Source Sans Pro', sans-serif !important;
    border-radius: 10px;
    height: 40px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
	font-size: 16px !important;
}
#type_of_outlet{
    /*border: 1px solid #c8c8c8; 
    padding: 10px;
    font-family: 'Source Sans Pro', sans-serif !important;*/
    border: none;
    padding: 10px;
    font-family: 'Source Sans Pro', sans-serif !important;
    border-radius: 10px;
    background-color: #fff;
    height: 44px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    font-size: 16px !important;
}

body .contact-area.partnerForm select{
	border-radius: 10px;
    height: 44px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
	border: none;
}

.liketojoin-header{
	padding: 10px 0px;
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
    padding: 4px 24px !important;
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

#contact_form label {
    font-family: 'Karla', sans-serif;
    font-weight: 300;
}

#form ul {
    list-style-type: none;
    list-style-position: outside;
    margin: 0 auto;
}

li.form-element {
    margin: 15px 0px 3px 0px;
}

#form ul li label {}

input {
    width: 100%;
    height: 34px;
    margin: 0;
    padding: 2px;
    -moz-transition: width .25s;
    -webkit-transition: width .25s;
    -o-transition: width .25s;
    transition: width .25s;
}

.input-inline {
    display: block;
    float: left;
    height: 15px !important;
    line-height: 40px !important;
    margin: 2px 10px 0 0 !important;
    width: 15px !important;
}

.text-inline {
    display: inline-block;
    float: left;
    line-height: 18px;
    position: relative;
    font-family: 'Source Sans Pro', sans-serif !important;
}

.text-inline a {
    color: #000000;
}

input:required {
    background: #fff url("../images/red_asterisk.png") no-repeat 98% center;
}

input:focus {
    /* add this to the already existing style */
    background: #fff;
}

input:focus:invalid {
    /* when a field is considered invalid by the browser */
    background: #fff url("../images/invalid.png") no-repeat scroll 98% center;
    border-color: #89c7f4;
    box-shadow: 0 0 5px #89c7f4;
}

input:required:valid {
    /* when a field is considered valid by the browser */
    background: #fff url(../images/valid.png) no-repeat 98% center;
    box-shadow: 0 0 5px #5cd053;
    border-color: #28921f;
}

select {
    width: 100%;
    height: 34px;
    /* margin-top: 10px; */
    margin-bottom: 10px;
    border-radius: 0;
    padding: 2px;
    /* box-shadow: 0 1px 1px 0 #123456; */
    font-family: 'Fauna One', serif;
    font-size: 18px;
    color: #222;
    -moz-transition: width .25s;
    -webkit-transition: width .25s;
    -o-transition: width .25s;
    transition: width .25s;
    padding: 0 10px !important;
    font-family: 'Source Sans Pro', sans-serif !important;
    color: #6f6f6f;
    font-size: 15px;
}

select:focus {
    width: 100%;
}

input[type=button] {
    background-color: #3C599B;
    border: 1px solid #fff;
    font-family: 'Fauna One', serif;
    font-weight: 700;
    font-size: 18px;
    color: #fff;
}

input#contact_info_submit {
    padding: 5px;
    width: 60%;
    height: 40px;

    transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
}

input#contact_info_submit:hover {
    background-color: #ffffff;
    color: #3C599B;
    cursor: pointer;
}



/*Form Field Hints*/
.form_hint {
    background: #d45252;
    border-radius: 3px 3px 3px 3px;
    color: white;
    margin-left: 8px;
    padding: 1px 6px;
    z-index: 999;
    /* hints stay above all other elements */
    position: absolute;
    /*allows proper formatting if hint is two lines */
    display: none;
}

.form_hint::before {
    content: "\25C0";
    /* left point triangle in escaped unicode */
    color: #d45252;
    position: absolute;
    top: 1px;
    left: -6px;
}

input:focus+.form_hint {
    display: inline;
}

input:required:valid+.form_hint {
    background: #28921f;
}

/* change form hint color when valid */
input:required:valid+.form_hint::before {
    color: #28921f;
}

/* change form hint arrow color when valid */

.form-element i {
    color: #ed193a;
    margin-right: 10px;
    font-size: 17px;
}

.warning-message p {
    color: red;
}

.clear-left {
    clear: left;
}

#general_info_submit {
    margin-top: 20px;
}

.contact-overlay {
    background: rgba(0, 0, 0, 0.4);
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}

body .partnerForm.contact-area {
    padding: 0em 0 2em;
}

#form ul {
    padding: 0px;
}

@media screen and (min-width: 992px) {
    #order-page-title.contact {
        padding-bottom: 40px;
    }

    #order-page-title.page-title-style2 {
        padding-top: 80px;
        padding-bottom: 40px;
        position: relative;
    }
}

@media (max-width: 767px) {
    body #order-page-title.page-title-style2 {
        /* padding: 125px 0 0 !important; */
    }

    #form ul {
        margin: 0px;
        padding: 0px;
    }

    #form .pull-right {
        float: left !important;
    }

    body .partnerRegistration .contact-banner {
        padding: 0px;
    }
	
	.contact-overlay {
    	background: white;
	}
	
	.liketojoin-header .text-overwrite {
		color: #5b6268ff !important;
	}
}
 
#order-page-title.contact.page-title-style2.partnerRegistration h1 {
    font-weight: bold;
    font-size: 36px;
    line-height: 40px;
}

#order-page-title.contact.page-title-style2.partnerRegistration h3 {
    color: #fff;
    font-weight: 600;
    font-size: 28px;
}

#order-page-title.contact.page-title-style2.partnerRegistration h2 {
    color: #fff;
    font-size: 16px;
    line-height: 24px;
    margin-top: 45px;
}

.contact-area.partnerForm select {
    border: 1px solid #c8c8c8;
    box-shadow: none;
}

#advantage-section {
    position: relative;
    padding: 8px 45px 8px;
}

#advantage-section .advantage-section-background-image {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0) url(https://www.chefonline.co.uk//images/advantage-background.jpg) no-repeat scroll center center/cover;
    background-attachment: fixed;
}

#advantage-section .advantage-section-background-image::after {
    background: #000;
    content: "";
    height: 100%;
    left: 0;
    opacity: 0.8;
    position: absolute;
    top: 0;
    width: 100%;
}

#advantage-section .advantage-section-content {
    position: relative;
    color: #fff;
    width: 62%;
    margin: 16px auto;
}

#advantage-section .advantage-section-content h3 {
    text-align: center;
    font-weight: bold;
    font-size: 32px;
    margin: 20px auto;
}

#advantage-section .advantage-section-content h3 span {
    color: #ed1a3b;
}

#advantage-section .advantage-section-content .advantage-details {
    margin: 24px auto;
}

#advantage-section .advantage-section-content .advantage-details i {
    display: inline-block;
    font-size: 23px;
    margin-right: 10px;
}

#advantage-section .advantage-section-content .advantage-details h4 {
    display: inline-block;
    font-weight: bold;
    font-size: 24px;
    line-height: 34px;
}

#advantage-section .advantage-section-content .advantage-details p {
    font-size: 16px;
    line-height: 28px;
}

#advantage-section .advantage-section-content .advantage-contact {
    text-align: center;
}

#advantage-section .advantage-section-content .advantage-contact a.join-button {
    display: inline-block;
    margin: 16px auto;
    color: #fff;
    font-weight: bold;
    font-size: 15px;
    background-color: #ed1a3b;
    padding: 10px 24px;
    border-radius: 25px;
    border: 1px solid #ed1a3b;
}

#advantage-section .advantage-section-content .advantage-contact a.join-button:hover {
    color: #ed1a3b;
    background-color: #fff;
    border: 1px solid #ed1a3b;
}

#advantage-section .advantage-section-content .advantage-contact p {
    font-size: 16px;
    line-height: 25px;
}

#advantage-section .advantage-section-content .advantage-contact p a {
    color: #fff;
}

#advantage-section .advantage-section-content .advantage-contact p a:hover {
    color: #ed1a3b;
}


/*--------media query-------*/

@media only screen and (max-width: 1400px) {
    #advantage-section .advantage-section-content {
        width: 87%;
    }
}


/*--------media query-------*/

@media only screen and (max-width: 1024px) {
    #order-page-title.contact.page-title-style2.partnerRegistration h2 {
        font-size: 16px;
        line-height: 22px;
    }
    #advantage-section .advantage-section-content {
        width: 100%;
    }
}


/*--------media query-------*/

@media only screen and (max-width: 991px) {
    #order-page-title.contact.page-title-style2.partnerRegistration .contact-banner {
        text-align: center;
    }
    #order-page-title.contact.page-title-style2.partnerRegistration h1 {
        font-size: 33px;
        line-height: 36px;
    }
    #order-page-title.contact.page-title-style2.partnerRegistration h3 {
        font-size: 26px;
    }
    #order-page-title.contact.page-title-style2.partnerRegistration h2 {
        margin-top: 35px;
    }
    #advantage-section .advantage-section-content .advantage-details {
        text-align: center;
    }
    #advantage-section .advantage-section-content .advantage-details h4 {
        font-size: 19px;
    }
    #advantage-section .advantage-section-content .advantage-details i {
        font-size: 20px;
    }
}


/*--------media query-------*/

@media only screen and (max-width: 480px) {
    #order-page-title.contact.page-title-style2.partnerRegistration h1 {
        font-size: 28px;
        line-height: 30px;
    }
    #order-page-title.contact.page-title-style2.partnerRegistration h3 {
        font-size: 20px;
    }
    #order-page-title.contact.page-title-style2.partnerRegistration h2 {
        font-size: 14px;
        margin-top: 32px;
    }
    #advantage-section .advantage-section-content .advantage-details i {
        font-size: 20px;
    }
    #advantage-section .advantage-section-content .advantage-details h4 {
        font-size: 18px;
    }
	
	
	
	.liketojoin-header .text-overwrite {
		color: #5b6268ff !important;
	}
}	
	
	.advantage-section h3, h4 , p, span {
	color:white;
	}
	
	.page-title-style2 {
    background: url(https://www.chefonline.co.uk/images/page-title.jpg) center bottom;
		}
</style>

<!--
<section id="order-page-title" class="contact page-title-style2 partnerRegistration">
    <div class="contact-overlay"></div>
    <div class="container inner-img">
        <div class="order-top-section">
            <div class="Page-title">
                <div class="row single-restaurant-top-section">
                    <div class="col-md-12">
                        <div class="contact-banner liketojoin-header">
                            <h1 itemprop="name" style="display: none">Partner | ChefOnline</h1>
                            <h3 class="text-overwrite">Let's Start Our Journey Together</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<div class="row single-restaurant-top-section">
	<div class="col-md-12">
		<div class="contact-banner liketojoin-header">
			<h1 itemprop="name" style="display: none">Partner | ChefOnline</h1>
			<!-- <h3 class="text-overwrite" style="text-align: center;color: #5b6268ff">Let's Start Our Journey Together</h3> -->
            <h3 class="text-overwrite" style="text-align: center;color: #5b6268ff">Grow Your Business</h3>
		</div>
	</div>
</div>

<section class="contact-area partnerForm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div id="mainform">
                        <div id="form">
                            <!-- "https://www.chefonline.co.uk/storage-business-details" -->
                           <form action="https://www.chefonline.co.uk/storage-business-details_v1" method="post" onsubmit="return FormValidation();">
                                <div class="col-md-12"></div>
                                <ul>

                                    <li class="form-element col-md-6">
                                        <label style="color: #5b6268ff"><i class="fa fa-pencil"></i>Name</label>
                                        <input type="text" class="input" id="name" name="name" maxlength="50" required>
                                        <div class="warning-message" id="OwnerNameErr"></div>
                                    </li>

                                    <li class="form-element col-md-6">
                                        <label style="color: #5b6268ff"><i class="fa fa-pencil"></i>Business Name</label>
                                        <input type="text" class="input" id="business_name" name="business_name" maxlength="100" required>
                                        <div class="warning-message" id="RestaurantNameErr"></div>
                                    </li>

                                    <li class="form-element col-md-6">
                                        <label style="color: #5b6268ff"><i class="fa fa-phone"></i>Phone Number</label>
                                        <input
                                            type="text"
                                            class="input"
                                            id="phone_number"
                                            name="phone_number"
                                            pattern="^07[0-9]{9}$"
                                            minlength="11"
                                            maxlength="11"
                                            placeholder=""
                                            required
                                            oninvalid="this.setCustomValidity('Invalid number')"
                                            oninput="this.setCustomValidity('')"
                                        >
                                        <div class="warning-message" id="RestaurantPhoneErr"></div>
                                    </li>


                                    <li class="form-element col-md-6">
                                        <label style="color: #5b6268ff"><i class="fa fa-envelope"></i>Email ID</label>
                                        <!-- <input type="email" id="email" class="input" name="email"
                                                pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}(\.[a-zA-Z]{2,10})*$"
                                            maxlength="50" required> -->
                                        <input type="email" id="email" class="input" name="email"
    maxlength="50" required>
                                        <div class="warning-message"  id="BusinessEmailErr"></div>
                                    </li>



                                    <li class="form-element col-md-6">
                                        <label style="color: #5b6268ff"><i class="fa fa-cutlery"></i>Type Of Business</label>
                                        <select name="type_of_outlet" id="type_of_outlet">
                                            <option value="1">Restaurant</option>
                                            <option value="2">Takeaway</option>
                                            <option value="3" selected="selected">Restaurant &amp; Takeaway</option>
                                        </select>
                                        <div class="warning-message" id="type_of_outlet_err"></div>
                                    </li>

                                    <li class="form-element col-md-6">
                                        <label style="color: #5b6268ff"><i class="fa fa-map-marker"></i>Business Address</label>
                                        <input type="text" class="input" id="business_address" name="business_address" maxlength="100" required>
                                        <div class="warning-message" id="BusinessAddressErr"></div>
                                    </li>

                                    <li class="form-element col-md-6 clear-left">
                                        <label for="terms" class="pull-left" style="font-weight:normal;">
                                            <input type="checkbox" id="terms" name="terms" value="1" checked hidden>

                                            <span id="TermsText" class="text-inline" style="color:black">
                                                I have read and accepted the <a target="_blank" href="https://www.chefonline.com/terms-conditions"><u>terms and conditions</u></a>.
                                            </span>
                                            <div class="warning-message" id="CheckTermsErr"></div>
                                        </label>
                                        <div class="clearfix"></div>
                                    </li>

                                    <li class="form-element col-md-6">
                                        <div class="pull-right">

                                            <!-- REQUIRED reCAPTCHA FIX — ONLY CHANGE MADE -->
                                            <div class="g-recaptcha"
                                                data-sitekey="6Lc5LU8UAAAAAAfeOoxQUnaFaae0ZlnIWbCEUGf9"
                                                data-callback="recaptchaSuccess">
                                            </div>

                                            <input type="hidden" id="recaptcha_required" name="recaptcha_required" required>
                                            <div class="warning-message" id="CaptchaErr"></div>

                                        </div>

                                        <div class="clearfix"></div>
                                        <input class="pull-right" id="general_info_submit" type="submit" value="Submit">
                                    </li>

                                </ul>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>





                <section id="advantage-section">
                    <div class="advantage-section-background-image"></div>
                
                    <div class="advantage-section-content">
                        <h3 style="color:white">Advantage of Joining <span>ChefOnline</span></h3>
                
                        <div class="advantage-details">
                            <i class="fa fa-money"></i>
                            <h4>More Revenue</h4>
                            <p>
                                You will be able to add ChefOnline to your income sources. Our consumers are always looking for the
                                tastiest
                                and delectable restaurants in their area.
                            </p>
                        </div>
                
                        <div class="advantage-details">
                            <i class="fa fa-users"></i>
                            <h4>Dedicated Support Team</h4>
                            <p>
                                We're here to support you every step of the way, from developing your restaurant menus to delivering
                                weekly
                                reports and enhancing your business performance.
                            </p>
                        </div>
                
                        <div class="advantage-details">
                            <i class="fa fa-mobile"></i>
                            <h4>Partner App / Ordering Platform</h4>
                            <p>
                                You will have your own partner app and be able to track your orders and reservations as well as any
                                discounts or offers you may offer to customers.
                            </p>
                        </div>
                
                        <div class="advantage-contact">
                            <a class="join-button" href="#mainform">Join Us Today</a>
                
                            <p>Any Questions? Call: <a href="tel:03303801000">03303801000</a></p>
                        </div>
                    </div>
                </section>
  


<script>
const input = document.getElementById("phone_number");

input.addEventListener("input", function () {
    // Only digits
    let v = this.value.replace(/\D/g, "");

    // Force prefix 07
    if (!v.startsWith("07")) {
        v = "07" + v.replace(/^0*/, "");
    }

    // Limit to 11 digits total
    v = v.substring(0, 11);

    this.value = v;
})

document.getElementById("email").addEventListener("input", function () {

    const email = this.value.trim(); // <-- FIXED
    const emailErr = document.getElementById("BusinessEmailErr");

    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}(\.[a-zA-Z]{2,10})*$/;

    if (email === "") {
        emailErr.innerHTML = "Required";
        emailErr.style.color = "red";
    }
    else if (!emailRegex.test(email)) {
        emailErr.innerHTML = "Invalid email";
        emailErr.style.color = "red";
    } 
    else {
        emailErr.innerHTML = "";
    }
});
function recaptchaSuccess() {
    document.getElementById("recaptcha_required").value = "done";
    document.getElementById("CaptchaErr").innerHTML = "";
}

function FormValidation() {

    let valid = true;


    const phone = document.getElementById("phone_number").value.trim();
    const phoneErr = document.getElementById("RestaurantPhoneErr");
    const phoneRegex = /^07\d{9}$/;  // 07 + 9 digits

    if (!phoneRegex.test(phone)) {
        phoneErr.innerHTML = "Invalid number";
        phoneErr.style.color = "red";
        valid = false;
    } else {
        phoneErr.innerHTML = "";
    }

     // -------------------------
    // EMAIL VALIDATION ADDED
    // -------------------------
    const email = document.getElementById("email").value.trim();
    const emailErr = document.getElementById("BusinessEmailErr");

    // Regex supporting .com, .co.uk, multi-level domains
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}(\.[a-zA-Z]{2,10})*$/;

    if (!emailRegex.test(email)) {
        emailErr.innerHTML = "Invalid email";
        emailErr.style.color = "red";
        valid = false;
    } 
    else {
        emailErr.innerHTML = "";
    }


   

    if (!document.getElementById("terms").checked) valid = false;

    var captchaResponse = grecaptcha.getResponse();
    if (captchaResponse.length === 0) {
        document.getElementById("recaptcha_required").value = "";
        document.getElementById("CaptchaErr").innerHTML = "Please complete the reCAPTCHA.";
        valid = false;
    }

    return valid;
}


</script>

