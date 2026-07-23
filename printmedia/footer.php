<!-- ========================= FOOTER ============================== -->
<footer id="contact_us">
    <div class="container">
        <div class="contact-box wow rotateIn animated" data-wow-offset="10" data-wow-duration="1.5s">

            <!-- EXPANDED CONTACT FORM -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- FORM -->
                    <form class="contact-form" id="contact_form" method="post" role="form">
                        <div class="row">
                            <div class="col-md-4">
                                <input class="form-control input-box" id="name" type="text" name="name" placeholder="Your Name"> </div>
                            <div class="col-md-4">
                                <input class="form-control input-box" id="email" type="email" name="email" placeholder="Your Email"> </div>
                            <div class="col-md-4">
                                <input class="form-control input-box" id="phone" type="text" name="phone" placeholder="Your Phone" maxlength="14" onkeypress="return validatePhone(event);">
                                <script>
                                    function validatePhone(event) {
                                        if (event.keyCode == 8 || event.keyCode == 46 || event.charCode == 43) {
                                            return true;
                                        } else if (event.charCode < 48 || event.charCode > 57) {
                                            return false;
                                        } else return true;
                                    }
                                </script>
                                <!-- <input class="form-control input-box" id="subject" type="text" name="subject" placeholder="Subject"> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control input-box" id="business" type="text" name="business" placeholder="Business Name">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control input-box" id="postcode" type="text" name="postcode" placeholder="Postcode">
                            </div>
                        </div>
                        <div class="row">   
                            <div class="col-md-12">
                                <textarea class="form-control textarea-box" name="message" id="message" rows="8" placeholder="Message"></textarea>
                            </div>
                        </div>     
                        <div class="col-md-12">
                            <!-- Success message -->
                            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
                        </div>
                        <div class="col-md-6 no-pad-left">
                            <div class="recaptcha">
                                <!-- <div id="err-captch f-hidden-inline">Please complete the security check.</div> -->
                                <div class="g-recaptcha" data-sitekey="6Lc5LU8UAAAAAAfeOoxQUnaFaae0ZlnIWbCEUGf9"></div>
                            </div>
                        </div>
                        <div class="col-md-6 no-pad-right ladda-mobile">
                            <button class="btn btn-primary standard-button2 ladda-button" type="submit" id="btn-submit" name="submit" data-style="expand-left">Send Message</button>
                        </div>    
                    </form>
                    <!-- /END FORM -->
                </div>
            </div>
            <!-- /END EXPANDED CONTACT FORM -->
        </div>

    </div>
    <!-- /END CONTAINER -->
</footer>
<!-- /END FOOTER -->

<section id="bottom-footer">
    <div class="footer">
      <div class="container">
         <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-3 text-left">
            <h5>SOCIAL MEDIA</h5>
            <p>Follow us on</p>
            <div class="social-list">
              <ul class="social list-inline list-unstyled">
                <li>
                  <a href="https://www.facebook.com/ChefOnlinePartners/" target="_blank"> <i class="fa fa-facebook"></i> </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/company/chef-online" target="_blank"> <i class="fa fa-linkedin"></i> </a>
                </li>
                <li>
                  <a target="_blank" href="https://www.instagram.com/chefonlineuk">
                     <i class="fa fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a target="_blank" href="https://www.youtube.com/channel/UC8rNSm4umip2dGbmlR7ph6g">
                     <i class="fa fa-youtube" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 text-left">
            <div class="sign-up">
              <h5>Newsletter Signup</h5>
              <p>Sign up for newsletter</p>
              <form>
                <input type="text" class="newsletter-input input-md newsletter-input mb-0" placeholder="Enter your e-mail" maxlength="100" name="subscription_email" id="subscription_email">
                <button onclick="subscribe(event);" class="fa fa-paper-plane"></button>
                 <div id="return_msg">&nbsp;</div>
              </form>
              <div id="successmsg" style="display:none;">You Have Added Successfully </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2 col-md-offset-1 text-left">
            <div class="our-address">
              <h5>Quick Links</h5>
              <div class="quick-list">
                <ul class="list-unstyled">
                  <li>
                     <a href="https://www.chefonline.com/about-us">About Us</a>
                  </li>
                  <li>
                   <a href="https://www.chefonline.com/contact">Contact Us</a>
                  </li>
                  <li>
                     <a href="https://www.chefonline.com/business-registration">Business Sign Up</a>
                  </li>                        
                  <li>
                     <a target="_blank" href="https://blog.chefonline.com/">ChefOnline Blog</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4  col-md-2 col-md-offset-1 text-left">
            <div class="our-address">
              <h5>Quick Links</h5>
              <div class="quick-list">
                <ul class="list-unstyled">
                  <li>
                     <a href="https://www.chefonline.com/faq">Faq</a>
                  </li>  
                  <li>
                     <a href="https://www.chefonline.com/terms-conditions">Terms &amp; Conditions</a>
                  </li>               
                  <li>
                     <a href="https://www.chefonline.com/privacy-policy">Privacy Policy</a>
                  </li>
                  <li>
                     <a href="https://www.chefonline.com/cookie-policy">How do we use cookies?</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
         </div>
      </div>
    </div>
</section>

<!-- ========================= SCRIPTS ============================== -->
<script src="js/printmedia.js"></script>
</body>

</html>