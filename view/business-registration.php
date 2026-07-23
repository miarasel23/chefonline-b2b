<?php 

@ob_start();
session_start(); 
?>
<?php
   require_once('db_config.php');
?>


<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro');

.input {
  border: 1px solid #c8c8c8;
  box-shadow: none;
  padding: 10px;
  font-family: 'Source Sans Pro', sans-serif !important;
}

.head-text{
      font-family: 'Source Sans Pro', sans-serif !important;
}

#general_info_submit {
  background-color: #ed193a;
  border: 1px solid #ed193a;
  border-radius: 3px;
  color: #ffffff;
  font-family: "Roboto",sans-serif !important;
  font-weight: bold;
  padding: 8px 24px !important;
  text-transform: uppercase;
  transition: all 0.3s ease 0s;
  width: auto;
}
#general_info_submit:hover{
    background-color: #fff;
    border: 1px solid #ed193a;
    color: #ed193a;
    box-shadow: none;
}

#contact_form label {
  font-family: 'Karla', sans-serif;
  font-weight: 300;
}


</style>

<?php 
 require 'phpFormValidation.php'; 
?>

<!--banner Section starts Here -->
<div class="showcase visble-sm visible-md visible-lg">
    <section id="video-bg">
        <div class="video-background">
            <video loop autoplay poster="video/big-buck-bunny.jpg" preload="none" muted="true">
                <source type="video/mp4" src="assets/video/banner.mp4"></source>
                <source type="video/webm" src="video/NUVOCafe.webm"></source>
                <source type="video/ogg" src="video/NUVOCafe.ogv"></source>
            </video>
        </div>
        <div class="container allservices">
            <div class="row" id="video-main">
                <div class="col-md-12 text-center top50 bottom50">
                    <h1>ChefOnline | Business Registration</h1>
                </div>

                <div class="col-xs-12 col-sm-3 col-lg-3">
                    <div class="box1">
                        <div class="icon">
                            <div class="image">
                                <span class="livicon" data-n="globe" data-s="32" data-c="#ffffff" data-hc="#ffffff"></span>
                            </div>
                            <div class="info">
                                <h4 class="title top20">Online Food Ordering System</h4>
                                <p>List your menu online, process orders & reservation make easy</p>
                                <div class="more top20 bottom10"> <a title="Title Link" href="online-ordering-system"> Read More <i class="fa fa-angle-double-right"></i> </a> </div>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3 col-lg-3">
                    <div class="box1">
                        <div class="icon">
                            <div class="image">
                                <span class="livicon" data-n="laptop" data-s="32" data-c="#ffffff" data-hc="#ffffff"></span>
                            </div>
                            <div class="info">
                                <h4 class="title top20">EPoS Systems</h4>
                                <p>A compatible, easy and secure system which brings all aspects of your online business</p>
                                <div class="more top20 bottom10"> <a title="Title Link" href="cloud-epos-system"> Read More <i class="fa fa-angle-double-right"></i> </a> </div>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
                <!-- /Boxes de Acoes -->
                <!-- Boxes de Acoes -->
                <div class="col-xs-12 col-sm-3 col-lg-3">
                    <div class="box1">
                        <div class="icon">
                            <div class="image">
                                <span class="livicon" data-n="laptop" data-s="32" data-c="#ffffff" data-hc="#ffffff"></span>
                            </div>
                            <div class="info">
                                <h4 class="title top20">Digital Marketing</h4>
                                <p>Ingenious solutions, growing consumerism demand and ever evolving digital strategy</p>
                                <div class="more top20 bottom10"> <a title="Title Link" href="digital-marketing"> Read More <i class="fa fa-angle-double-right"></i> </a> </div>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-lg-3">
                    <div class="box1">
                        <div class="icon">
                            <div class="image">
                                <span class="livicon" data-n="cellphone" data-s="32" data-c="#ffffff" data-hc="#ffffff"></span>
                            </div>
                            <div class="info">
                                <h4 class="title top20">Print Media</h4>
                                <p>Let your Restaurant Menu speak on behalf of you!</p>
                                <div class="more top20 bottom10"> <a title="Title Link" href="print-media"> Read More <i class="fa fa-angle-double-right"></i> </a> </div>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="aboutus-section">
      <div class="container">
         <div class="row">
               <div class="col-md-12">
                     <ul class="breadcrumb">
                        <li><a href="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>">Home</a></li>
                        <li class="active">Business Registration</li>
                     </ul>

                  <!-- <div class="heading">
                      <h3>Business Registration Form</h3>
                      </div> -->
                  </div>
               </div>


            <div class="row">
            <!-- sazzad -->
               <div id="mainform">
                  <div id="form">
                     <!-- <h3 class="head-text">Business Registration Form</h3> -->
                        <form id="contact_form" action="business-registration" method="post" onsubmit="return FormValidation();">
                     <ul>
                            <li class="form-element col-md-6">
                              <label><i class="fa fa-pencil"></i>Contact Name</label><input id="OwnerName" class="input" name="OwnerName" type="text" placeholder="" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" maxlength="50" value='<?php echo $val = (isset($OwnerName)) ? $OwnerName : null; ?>' onkeypress='return validChar(event);' required>
                                <!--<span class="form_hint">Enter your Name.</span>-->
                                <div class="warning-message" id="OwnerNameErr"><?php echo $msg = (isset($error_BusinessOwner)) ? $error_BusinessOwner : null;?></div>
                           </li>
                            
                           <li class="form-element col-md-6">
                              <label><i class="fa fa-envelope"></i>Contact Email</label><input id="BusinessEmail"class="input" name="BusinessEmail" type="text" placeholder=""  value='<?php echo $val = (isset($BusinessEmail)) ? $BusinessEmail : null; ?>' pattern="^([a-z0-9_\.-]+)@([\da-z\.-]+){3,6}\.([a-z\.]{2,6})$" maxlength="50" required>
                                <!--<span class="form_hint">What is your email address?</span>-->
                                <div class="warning-message" id="BusinessEmailErr"><?php echo $msg = (isset($error_BusinessOwnerEmail)) ? $error_BusinessOwnerEmail : null;?></div>
                           </li>

                           <li class="form-element col-md-6">
                              <label><i class="fa fa-phone"></i>Contact Number</label><input id="BusinessPhone" class="input" name="BusinessPhone" type="text" placeholder="" value='<?php echo $val = (isset($BusinessPhone)) ? $BusinessPhone : null; ?>' pattern="^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$" maxlength="15" onkeypress='return validateQty(event);' required>
                                <!--<span class="form_hint">What is your Phone Number?</span>-->
                                <div class="warning-message" id="BusinessPhoneErr"><?php echo $msg = (isset($error_BusinessPhone)) ? $error_BusinessPhone : null;?></div>
                           </li>

                           <li class="form-element col-md-6">
                              <label><i class="fa fa-pencil"></i>Business Name</label><input id="RestaurantName" class="input" name="RestaurantName" type="text" placeholder=""  value='<?php echo $val = (isset($RestaurantName)) ? $RestaurantName : null; ?>' maxlength="100" required>
                                <!--<span class="form_hint">What is your Restaurant Name?</span>-->
                                <div class="warning-message" id="RestaurantNameErr"><?php echo $msg = (isset($error_BusinessName)) ? $error_BusinessName : null;?></div>
                           </li>

                           <li class="form-element col-md-6">
                              <label><i class="fa fa-phone"></i>Business Phone Number</label><input id="RestaurantPhone" class="input" name="RestaurantPhone" type="text" placeholder="" value='<?php echo $val = (isset($RestaurantPhone)) ? $RestaurantPhone : null; ?>' pattern="^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$" maxlength="15" onkeypress='return validateQty(event);' required>
                                <!--<span class="form_hint">What is your Restaurant Phone Number?</span>-->
                                <div class="warning-message" id="RestaurantPhoneErr"><?php echo $msg = (isset($error_RestaurantPhone)) ? $error_RestaurantPhone : null;?></div>
                           </li>

                           <li class="form-element col-md-6">
                              <label><i class="fa fa-map-marker"></i>Business Address</label><input id="BusinessAddress1" class="input" name="BusinessAddress1" type="text" placeholder="" maxlength="200" value='<?php echo $val = (isset($BusinessAddress1)) ? $BusinessAddress1 : null; ?>' required>
                                <!--<span class="form_hint">What is your Restaurant Address?</span>-->
                                <div class="warning-message" id="BusinessAddressErr"><?php echo $msg = (isset($error_BusinessAddress)) ? $error_BusinessAddress : null;?></div>
                           </li>

                           <li class="form-element col-md-6">
                              <label><i class="fa fa-location-arrow"></i>Town/City</label><input id="BusinessCity" class="input" name="BusinessCity" type="text" placeholder=""  maxlength="50" value='<?php echo $val = (isset($BusinessCity)) ? $BusinessCity : null; ?>' required>
                                <!--<span class="form_hint">Which city your Restaurant placed?</span>-->
                                <div class="warning-message" id="BusinessCityErr"><?php echo $msg = (isset($error_BusinessCity)) ? $error_BusinessCity : null;?></div>                    
                           </li>

                           <li class="form-element col-md-6">
                              <label><i class="fa fa-map-signs"></i>Post Code</label><input id="BusinessPostcode" class="input" name="BusinessPostcode" type="text" placeholder=""  maxlength="11" value='<?php echo $val = (isset($BusinessPostcode)) ? $BusinessPostcode : null; ?>' pattern="^[A-Za-z]{1,2}[0-9R][0-9A-Za-z]?[\s]?[0-9][ABD-HJLNP-UW-Z abd-hjlnp-uw-z]{2}$" required>
                                <!--<span class="form_hint">What is the postcode?</span>-->
                                <div class="warning-message" id="BusinessPostcodeErr"><?php echo $msg = (isset($error_PostCode)) ? $error_PostCode : null;?></div>
                           </li>

                           <li class="form-element col-md-6">
                              <input id="Country" name="Country" class="input" type="text" value="United Kingdom" disabled="disabled">
                           </li>
                         <li class="form-element col-md-6">
                             <select name="how_did_you_know" id="how_did_you_know" class="input how_did_you_know" onchange="others_how_did_you_know(this.value);" required>
                                 <option value="" disabled selected hidden>How did you know about ChefOnline? *</option>
                                 <option value="Social media">Social media</option>
                                 <option value="Friends">Friends</option>
                                 <option value="Newsletter">Newsletter</option>
                                 <option value="Other">Other</option>
                             </select>
                             <div id="new-how_did_you_know_other"></div>

                             
                         </li>

                           <li class="form-element col-md-6">
                            <label for="TermsAgree" class="pull-left" style="font-weight:normal;">
                              <input id="TermsAgree" class="input input-inline" name="TermsAgree" type="checkbox" value="agree">
                                <span id="TermsText" class="text-inline">I have read and accept the <a target="_blank" href="https://www.chefonline.com/terms-conditions"><u>terms and conditions</u>.</a></span>
                                <div class="warning-message" id="CheckTermsErr"><?php echo $msg = (isset($error_checkbox)) ? $error_checkbox : null;?></div>
                            </label>
                            
                            <label class="pull-left" for="want_newslatter" style="font-weight:normal;">
                                <input class="input-inline" id="want_newslatter" name="want_newslatter" type="checkbox"> <span class="text-inline">I do not want to receive any Newsletter.</span>
                            </label>
                            <div class="clearfix"></div>
                            <label class="pull-left" for="want_text_message" style="font-weight:normal;">
                                <input class="input-inline" id="want_text_message" name="want_text_message" type="checkbox"><span class="text-inline"> I do not want to get any Text Message.</span>
                            </label>
							   <br><br>
							   
							   <div id="err-captch" style="display: none; color: red;">Please complete the security check.</div>                            
							 	<div class="g-recaptcha" name="recaptcha" data-sitekey="6Lc5LU8UAAAAAAfeOoxQUnaFaae0ZlnIWbCEUGf9"></div>                            

                           </li>
                           
                         <li class="form-element col-md-6">						  
							 
                             <input class="pull-right" id="general_info_submit" type="submit" value="Submit">
                         </li>

                         <!-- <li>
                            <input id="general_info_submit" type="submit" value="Submit">
                          </li> -->
                     </ul>
                        </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- .container -->
      </div>
      <!-- Features Section starts here -->
   </div>

<script type="text/javascript">


function FormValidation(){
       var $=jQuery;
        var Error_color = '#FCF';
        
        var OwnerName = jQuery("#OwnerName").val();
        var BusinessEmail = jQuery("#BusinessEmail").val();
        var BusinessPhone = $("#BusinessPhone").val();  
        var RestaurantName = $("#RestaurantName").val();                
        var RestaurantPhone = $("#RestaurantPhone").val();  
        var BusinessAddressOne = $("#BusinessAddress1").val();  
        var BusinessCity = $("#BusinessCity").val();
        var BusinessPostcode = $("#BusinessPostcode").val();
        var howDidYouKnow = $("#how_did_you_know").val();
        //var CheckAgree = $("#TermsAgree").val();
        //alert(CheckAgree);
        
        var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var postcode_filter = /^[A-Za-z]{1,2}[0-9R][0-9A-Za-z]?[\s]?[0-9][ABD-HJLNP-UW-Z abd-hjlnp-uw-z]{2}$/;
        var phone_filter = /^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/;
        
        var dataString = $("#contact_form").serialize();
        
        /*$('.inp').on('focus',function(){
            $(this).removeClass('error');
        });*/
        
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
        
        $('#BusinessCity').on('focus', function() {
          $(this).css('background-color', '#FFFFFF');
        });
        
        $('#BusinessPostcode').on('focus', function() {
          $(this).css('background-color', '#FFFFFF');
        });
        
        $('#how_did_you_know').on('focus', function() {
          $(this).css('background-color', '#FFFFFF');
        });

                
        //Check Business Owner Name     
        if(OwnerName==''){
            //$('.inp').addClass('error');
            document.getElementById('OwnerNameErr').innerHTML = 'Owner Name can\'t be blank';
            return false;
        }
        else{
            $('#OwnerName').css('background-color', '#FFFFFF');
            document.getElementById('OwnerNameErr').innerHTML = '';
        }
        
        //Check Email Address
        if(BusinessEmail==''){
            $('#BusinessEmail').css('background-color', Error_color);
            document.getElementById('BusinessEmailErr').innerHTML = 'Email address cann\'t be blank!';
            return false;           
        }
        else if(!email_filter.test(BusinessEmail)){
            $('#BusinessEmail').css('background-color', Error_color);
            document.getElementById('BusinessEmailErr').innerHTML = 'Email address is not valid!';
            return false;           
        }
        else{
            $('#BusinessEmail').css('background-color', '#FFFFFF');
            document.getElementById('BusinessEmailErr').innerHTML = '';
        }
        
        //Check Phone Number
        if(BusinessPhone==''){
            $('#BusinessPhone').css('background-color', Error_color);
            document.getElementById('BusinessPhoneErr').innerHTML = 'Business Phone Number cann\'t be blank!';
            return false;           
        }
        else if(!phone_filter.test(BusinessPhone)){
            $('#BusinessPhone').css('background-color', Error_color);
            document.getElementById('BusinessPhoneErr').innerHTML = 'Business Phone Number is not valid!';
            return false;           
        }
        else{
            $('#BusinessPhone').css('background-color', '#FFFFFF');
            document.getElementById('BusinessPhoneErr').innerHTML = '';
        }


        //Check Restaurant Name
        if(RestaurantName==''){
            $('#RestaurantName').css('background-color', Error_color);
            document.getElementById('RestaurantNameErr').innerHTML = 'Restaurant Name cann\'t be blank!';
            return false;           
        }
        else{
            $('#RestaurantName').css('background-color', '#FFFFFF');
            document.getElementById('RestaurantNameErr').innerHTML = '';
        }
        
        
        //Check Restaurant Phone Number
        if(RestaurantPhone==''){
            $('#RestaurantPhone').css('background-color', Error_color);
            document.getElementById('RestaurantPhoneErr').innerHTML = 'Business Phone Number cann\'t be blank!';
            return false;           
        }
        else if(!phone_filter.test(RestaurantPhone)){
            $('#RestaurantPhone').css('background-color', Error_color);
            document.getElementById('RestaurantPhoneErr').innerHTML = 'Business Phone Number is not valid!';
            return false;           
        }
        else{
            $('#RestaurantPhone').css('background-color', '#FFFFFF');
            document.getElementById('RestaurantPhoneErr').innerHTML = '';
        }
        

        //Check Business Address
        if(BusinessAddressOne==''){
            $('#BusinessAddress1').css('background-color', Error_color);
            document.getElementById('BusinessAddressErr').innerHTML = 'Restaurant Address cann\'t be blank!';
            return false;           
        }
        else{
            $('#BusinessAddress1').css('background-color', '#FFFFFF');
            document.getElementById('BusinessAddressErr').innerHTML = '';
        }

        //Check Restrurant City
        if(BusinessCity==''){
            $('#BusinessCity').css('background-color', Error_color);
            document.getElementById('BusinessCityErr').innerHTML = 'Restaurant City cann\'t be blank!';
            return false;           
        }
        else{
            $('#BusinessCity').css('background-color', '#FFFFFF');
            document.getElementById('BusinessCityErr').innerHTML = '';
        }
        

        //Check PostCode
        if(!postcode_filter.test(BusinessPostcode) && BusinessPostcode !=''){
            $('#BusinessPostcode').css('background-color', Error_color);
            document.getElementById('BusinessPostcodeErr').innerHTML = 'Business Postcode is not valid!';
            return false;           
        }
        else{
            $('#BusinessPostcode').css('background-color', '#FFFFFF');
            document.getElementById('BusinessPostcodeErr').innerHTML = '';
        }
        
        if (howDidYouKnow == 'Other') {
            var knowOther = $('#how_did_you_know_other').val();
            if (knowOther == '') {
                $('#how_did_you_know_other').css('border', "1px solid #ff0034");
                return false;           
            } else {
                $('#how_did_you_know_other').css('border', '1px solid #c8c8c8');
            }
        }
        
        //Check Check box
        if($('#TermsAgree').is(":checked")==false){
            document.getElementById('CheckTermsErr').innerHTML = 'You must agree with our terms and conditions';
            return false;
        }
                                        
        
}//End of Form Validation

function validChar(event) {
    var key = window.event ? event.keyCode : event.which;
    /*if (key == 8 || key==43) {
        return true;
    }
    else */if ( key > 48 && key < 57 ) {
        return false;
    }
    else return true;
};

function validateQty(event) {
    var key = window.event ? event.keyCode : event.which;
    if (key == 8 || key==43) {
        return true;
    }
    else if ( key < 48 || key > 57 ) {
        return false;
    }
    else return true;
};
</script>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">Benefits of Joining ChefOnline</h2>

      <div class="benefits">
        <h3>Social Media Marketing</h3>
        <p class="text-justify">
        Our expert social media marketers know precisely what your business needs to get the boost you have earned. We use the latest technology and best-trained experts to analyze your business, and then promote high-quality advertisements to the audience who are most likely to be interested in your business.
        </p>
      </div>

      <div class="benefits">
        <h3>Personalized Websites</h3>
        <p class="text-justify">
        Having a personalized website that advertises your restaurant is an important advantage that every business can benefit from. Our expert web developers create landing and homepages for restaurants and bespoke businesses using customized templates and the latest coding techniques.
        </p>
      </div>

      <div class="benefits">
        <h3>High-End Technology</h3>
        <p class="text-justify">
        ChefOnline uses the latest technology across the board to ensure that every product and service work seamlessly together. Our EPoS systems, for example, use a customized form of hardware and software to create a user experience that is not only easy but flexible, reliable and always at hand.
        </p>
      </div>

      <div class="benefits">
        <h3>New Customers</h3>
        <p class="text-justify">
        We believe that customers respond to quality above all else, and the best way to retain existing customers and attract new crowds is by displaying the aspects of your business that present the best value to your clients. At the same time, we work behind the scenes to ensure a steady flow of constant improvement to help you give your customers the best experience there is.
        </p>
      </div>

    </div>
  </div>
</div>

