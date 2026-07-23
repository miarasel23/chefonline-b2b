<style>
    .trustpilot-widget {
        background: #fff;
        border-radius: 8px;
        padding: 5px 10px 0;
    }
</style>

<div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Success
                    <i class="glyphicon glyphicon-thumbs-up"></i> Thank you for contacting us. We will get back to you soon.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!--section class="col_wrap" style="padding: 25px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div style="text-align: center;">
				 <h5>Secured by</h5>
				 <a href="https://registry.blockmarktech.com/certificates/182f9674-f48d-4172-8d5b-c3c904c1941f/" rel="noopener noreferrer" target="_blank">
					 <img src="https://www.chefonline.co.uk/assets/new_home/images/security-metrics06.png" class="foundation-logo img-responsive lazy" alt="Security metrics"  loading="lazy" style="width: 75px; margin: auto; height: auto;">
				 </a>
			</div>

			</div> 
		</div>
	</div>
</section-->

<!--Footer area starts Here -->
<footer id="footer" class="footer3">

    <!--Footer box starts Here -->

    <div class="footer clearfix">
        <div class="container">
            <div class="row">




                <!-- <div class="col-xs-12 col-sm-6 col-md-3">
               <div class="sign-up">
                  <h5>Contact Us</h5>
               </div>

               <?php
                include('footer-contact.php');
                ?>

            <form id="enquiry_form2" action="" class="footer-contact-form" method="post">
               <div class="row">
                  <div class="col-md-12">
                     <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>
                     <?php echo ((!empty($successMessage)) ? $successMessage : '') ?>
                     <input id="name2" name="name" class="name" type="text" placeholder="Name*" required="" />
                  </div>
                  <div class="col-md-12">
                     <input id="email2" name="email" class="email" type="email" placeholder="example@email.com*"
                        required="" />
                  </div>
                  <div class="col-md-12">
                     <textarea class="message" id="comment2" name="message" placeholder="Message*"
                        required=""></textarea>
                  </div>
                  <div class="col-md-12">
                     <input id="btn-submit" name="submit" class="comment-submit contact-btn" type="submit"
                        value="Submit">
                  </div>
               </div>
            </form>
         </div> -->




                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="sign-up mt-5">
                        <h5>Newsletter Signup</h5>
                        <p>Sign up for newsletter</p>
                        <form>
                            <input type="text" class="newsletter-input input-md newsletter-input mb-0"
                                placeholder="Enter your e-mail" maxlength="100" name="subscription_email" id="subscription_email">
                            <button onclick="subscribe(event);" class="fa fa-paper-plane"></button>

                            <div id="return_msg">&nbsp;</div>
                        </form>
                        <div id="successmsg"> You Have Added Successfully </div>
                    </div>

					<!--
                    <div class="sign-up mt-5">
                        <h5>SERVICE RATING</h5>

                        
                        <div class="trustpilot-widget" data-locale="en-GB" data-template-id="53aa8807dec7e10d38f59f32" data-businessunit-id="5ba77b4d28ce1900011616cf" data-style-height="115px" data-style-width="100%" data-theme="light">
                            <a href="https://uk.trustpilot.com/review/www.chefonline.co.uk" target="_blank" rel="noopener">Trustpilot</a>
                        </div>
                        

                    </div> -->


                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="our-address">
                        <h5>Quick Links</h5>
                        <div class="quick-list">
                            <ul>
                                <!--<li>
                                    <a href="about-us">About Us</a>
                                </li>
                                <li>
                                    <a href="contact">Contact Us</a>
                                </li>
                                <li>
                                    <a href="https://www.chefonline.co.uk/partner">Business Sign Up</a>
                                </li> -->
                                <li>
                                    <a target="_blank" href="https://www.chefonline.com/blog/">ChefOnline Blog</a>
                                </li>
                                <li>
                                    <a href="https://career.chefonline.com/" target="_blank">Career</a>
                                </li>
                                <li>
                                    <a href="faq">Faq</a>
                                </li>
                                <li>
                                    <a href="terms-conditions">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="terms-of-use">Terms of Use</a>
                                </li>
                                <li>
                                    <a href="privacy-policy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="cookie-policy">How do we use cookies?</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">

                    <div class="sign-up">
                        <h5>SOCIAL MEDIA</h5>
                        <p>Follow us on</p>
                        <!-- <h5>Follow Us</h5> -->
                        <!-- <p>Follow us in social media</p> -->
                    </div>

                    <div class="quick-list footer-social-div">
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/ChefOnlinePartners/" target="_blank"> <i
                                        class="fa fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/chef-online" target="_blank"> <i
                                        class="fa fa-linkedin"></i> </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.youtube.com/channel/UC8rNSm4umip2dGbmlR7ph6g">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>

                                </a>
                            </li>
                        </ul>
                    </div>

                    <div style="margin-top: 15px;">
                        <h5>Secured by</h5>
                        <a href="https://registry.blockmarktech.com/certificates/de6ae7a4-a483-494a-964c-a70512f69ffb/" rel="noopener noreferrer" target="_blank">
                            <img src="https://www.chefonline.co.uk/assets/new_home/images/security-metrics06.png" class="foundation-logo img-responsive lazy" alt="Security metrics" loading="lazy" style="width: 75px; height: auto;">
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">

                    <div style="">
                        <!-- <h5>Partner with</h5> -->
                        <a href="https://www.google.com/partners/agency?id=8390177523" target="_blank">
                            <img src="https://www.gstatic.com/partners/badge/images/2025/PartnerBadge.png" style="max-width: 150px;"/>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Footer box ends Here -->
</footer>
<div class="copyright text-center">
    <div class="container">
        <div class="col-xs-12 col-sm-12 copyright-content">
            Copyright &copy; <?php echo date("Y"); ?> ChefOnline. All rights
            reserved.
        </div>
    </div>
</div>
<!--Footer area ends Here -->
</div>
<!--Wrapper Section Ends Here -->



<!--  -->

<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/equal-height.min.js">
</script>

<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

<script type="text/javascript"
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/assets/js/livicons-1.4.min.js">
</script>
<script type="text/javascript"
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/assets/js/jquery.themepunch.tools.min.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/jquery.appear.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/jquery.easing.min.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/jquery.magnific-popup.min.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/progress-bar.min.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/modernizr.custom.13711.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/owl.carousel.min.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/wow.min.js">
</script>
<!--  <script src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/isotope.pkgd.min.js">
</script> -->
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/imagesloaded.pkgd.min.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/count-to.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/bootsnav.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/YTPlayer.min.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/typed.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/jquery.ripples-min.js">
</script>
<!--<script src="<?php //echo "https://" . $_SERVER['SERVER_NAME'];
                    ?>/hayper/assets/js/particles.min.js">
</script>-->
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/hayper/assets/js/main.js">
</script>
<!--  -->
<script type="text/javascript"
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/assets/js/livicons-1.4.min.js">
</script>
<script
    src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/assets/js/raphael.min.js">
</script>

<script type="text/javascript">
    function subscribe(e) {

        e.preventDefault();
        var email = document.getElementById('subscription_email').value;
        var pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;

        if (pattern.test(email)) {
            document.getElementById('return_msg').innerHTML =
                "<img src='http://www.gtechsolution.co.uk/assets/images/loader.gif' height='16' width='16'>";
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    if (xmlhttp.responseText == 1) {
                        document.getElementById('return_msg').innerHTML = 'You are successfully subscribed.';
                    } else if (xmlhttp.responseText == 2) {
                        document.getElementById('return_msg').innerHTML = 'Your email already in subscription list.';
                    } else {
                        document.getElementById('return_msg').innerHTML = 'Subscription Failed. Please Try Later';
                    }
                    document.getElementById('subscription_email').value = "";
                }
            }
            xmlhttp.open("POST", "subscribe.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("email=" + email);
        } else {
            document.getElementById('return_msg').innerHTML = "Invalid E-mail Address";
        }

    }
    // jQuery(document).ready(function() {
    //     var containerEl = document.querySelector('.grapgic-wrapper');

    //     var mixer = mixitup(containerEl);
    // });
</script>

<script>
    $(".offer-discount-slider").owlCarousel({
        autoplay: true,
        slideSpeed: 2000,
        items: 4,
        margin: 15,
        loop: true,
        mouseDrag: true,
        dots: true,
        autoHeight: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 3
            },
            992: {
                items: 3
            }
        }
    });
</script>

</body>

</html>