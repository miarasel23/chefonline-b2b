      <footer>
        <div class="footer-top">        
            <div class="uk-map">
            </div>
        <div class="container">
          <div class="row">
              <div class="col-md-3 col-sm-3">
                <h4>Our Location</h4>
                <!-- <p><strong>SRS Apps</strong> <br>
                A Product Of <a class="colour-red" target="_blank" href="http://www.chefonline.com/">ChefOnline</a>
                </p> -->
                <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;218A Brick Lane, London, E1 6SA </p>
                <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;<img src="https://www.chefonline.com/apps/images/app_sales_email.jpg" alt="APPs Email"></p>
                <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;<img src="https://www.chefonline.com/apps/images/app_support_email.jpg" alt="Apps Email"></p>
                <p><i class="fa fa-phone-square"></i>&nbsp;&nbsp;<a href="tel:02035985956" class="transition">0203 598 5956</a> / <a href="tel:03303801000" class="transition">0330 380 1000</a></p>
              </div>
              <div class="col-md-3 col-sm-3 subscribe">
                <h4>Quick Links</h4>                                        
                  <ul class="footer-menu">
                    <li><a href="about-us">About Us</a></li>
                    <li><a href="cookie-policy">How do we use cookies?</a></li>
                    <li><a href="privacy-policy">Privacy Policy</a></li>
                    <!-- <li><a href="ios-apps">iOS Apps</a></li>
                    <li><a href="android">Android Apps</a></li>
                    <li><a href="cross-platform">Cross-Platform</a></li> -->
                    <li><a href="our-work">Our Work</a></li>
                    <li><a href="contact">Contact Us</a></li>
                  </ul>
                  <!-- <p>Stay informed about our latest features, updates and packages</p>  -->
              </div>
              <div class="col-md-3 col-sm-3">
                <h4>Download ChefOnline App</h4>
                <ul class="download-app">
                  <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.chefonline.chefonline"><img src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/apps/images/android-button.png" alt="SRS App Android Button"></a></li>
                  <li><a target="_blank" href="https://itunes.apple.com/us/app/chefonline/id1007229418?mt=8"><img src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/apps/images/apple-button.png" alt="SRS App Apple Button"></a></li>
                </ul>
                <div class="subscribe-srs-apps"> 
                    <input type="email" class="form-control" placeholder="Enter your e-mail" maxlength="100" name="subscription_email" id="subscription_email" required="required">
                     <button onclick="subscribe(event);" class="btn btn-subscribe">Subscribe</button>
                </div> 
                <div id="return_msg">&nbsp;</div>
              </div>
              <div class="col-md-3 col-sm-3">
                <h4>Get in touch</h4>
                <ul class="social">
                  <li><a href="https://www.facebook.com/srsapps" target="_blank"><span class="livicon" data-n="facebook" data-s="20" data-c="#ed1b34" data-hc="#282a2b"></span></a></li>
                  <li><a href="https://twitter.com/SRS_ChefOnline" target="_blank"><span class="livicon" data-n="twitter" data-s="20" data-c="#ed1b34" data-hc="#282a2b"></span></a></li>
                  <li><a href="https://www.linkedin.com/company/chef-online" target="_blank"><span class="livicon" data-n="linkedin" data-s="20" data-c="#ed1b34" data-hc="#282a2b"></span></a></li>

                </ul>
              </div>
          </div>
        </div>        
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
              <p>©<?php echo date("Y");?> SRS Apps, All Rights Reserved </p>
            </div>
          </div>
        </div>
      </div>   
    </footer> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/apps/js/bootstrap.min.js"></script>
    <script src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/apps/js/livicons-1.4.min.js"></script>
    <script src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/apps/js/raphael.min.js"></script>
    <script src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/apps/js/owl.carousel.js"></script>
    <script src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/apps/js/toastr.min.js"></script>
    <script src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/apps/js/custom.js"></script>
      <script type="text/javascript">
        function subscribe(e){
        
            e.preventDefault();
            var email = document.getElementById('subscription_email').value;
            var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
        
             if(pattern.test(email)){
                document.getElementById('return_msg').innerHTML = "<img src='https://www.srs-apps.co.uk/images/loader.gif' height='16' width='16'>";
                var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 ) {
                        if( xmlhttp.responseText == 1 ){
                            document.getElementById('return_msg').innerHTML = 'You are successfully subscribed.';
                        }else if ( xmlhttp.responseText == 2 ){
                            document.getElementById('return_msg').innerHTML = 'Your email already in subscription list.';
                        }else{
                            document.getElementById('return_msg').innerHTML = 'Subscription Failed. Please Try Later';
                        }
                        document.getElementById('subscription_email').value = "";
                    }
                }
                xmlhttp.open("POST", "subscribe.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("email=" + email);
            }else{
                document.getElementById('return_msg').innerHTML = "Invalid E-mail Address";
            } 
        
        }
        // jQuery(document).ready(function() { 
        //     var containerEl = document.querySelector('.grapgic-wrapper');

        //     var mixer = mixitup(containerEl);
        // }); 
    </script>
  </body>
</html>