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
                    <h1>ChefOnline | Contact Us</h1>
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
   <!--banner Section ends Here -->
   <!--Section area starts Here -->

   <section id="section">
      <!--Section box starts Here -->
      <div class="section">
         <div class="comment-drop-box ">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <ul class="breadcrumb">
                        <li><a href="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>">Home</a></li>
                        <li class="active">Contact us</li>
                     </ul>
                  </div>

                  <div class="col-md-12">

                  <h4 class="text-center">Email us with your enquiry or kindly call us at 0330 380 1000</h4>

                  <p class="text-justify">
                  Our support teams work diligently around the clock to ensure that our services are not only customized to your requirements, but if you have feedback regarding any aspect, we are here to help. Customer satisfaction is our top priority. <span class="read-more-content">Read more...</span> <span class="more-content"> As such, we highly encourage you to get in touch with us if you have any queries regarding ChefOnline and/or our partner restaurants.<br><br>

                  When submitting the form here, it would help our investigation if you include as much detail as possible regarding your feedback that we have a clear picture of what you are looking for. Our customer services are online 24/7. As such, we hope to get back to you with your answer as quickly as possible. Thank you for your time and patience.<br><br>

                  If you are a restaurant owner or associate, and wish to get in touch with us regarding questions or registration queries about your business, we will be pleased to help you here.</span> <span class="read-less-content">Read less.</span>
                  </p>
               </div>

               </div>
            </div>


               <div class="contact-form-box">
                <div class="container"> 
                   <div class="row">
                      <!-- <div class="col-md-12 padding-15">
                        <h4 class="text-center">Email us with your enquiry or kindly call us at 0330 380 1000</h4>
                      </div>
                      <br>
                      <br> -->
                     <div class="col-md-10 col-md-offset-1">
                        <div class="enqiry">
                        <div class="contact-title">
                           <h4>General Enquiry</h4>

                        </div>
                           <form id="enquiry_form" method="post">
                              <div class="row">
                                <div class="col-md-4">
                                  <?php echo $user_nameErr; ?>
                                  <input id="name" name="name" class="name" type="text" placeholder="Name*" />
                                </div>
                                <div class="col-md-4">
                                <?php echo $user_emailErr; ?>
                                  <input id="email" name="email" class="email" type="email" placeholder="example@email.com*" />
                                </div>
                                <div class="col-md-4">
                                  <?php echo $user_restaurant_nameErr; ?>
                                  <input type="text" placeholder="Restaurant Name*" id="restaurant_name" name="restaurant_name" class="restaurant_name">
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                <?php echo $user_postcodeErr; ?>
                                  <input type="text" placeholder="Postcode*" id="postcode" name="postcode" class="postcode">
                                </div>
                                <div class="col-md-6">
                                <?php echo $user_telephoneErr; ?>
                                  <input type="text" placeholder="(Area Code) + (Your Phone Number)*" id="telephone" name="telephone" class="telephone">
                                </div>
                              </div>
                              <!-- <div class="col-md-12">
                              <?php //echo $subjectErr; ?>
                        <input id="subject" name="subject" class="subject" type="text" placeholder="Subject*" />
                        </div> -->
                              <div class="row">
                                <div class="col-md-12">
                                  <?php echo $messagesErr; ?>
                                  <textarea class="message" id="comment" name="comment" placeholder="Message*"></textarea>
                                </div>
                              </div>
                            <div class="col-md-12">

                           <!-- <div class="alert alert-success" role="alert" id="success">Success
                              <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.
                           </div> -->
                           <div id="myModal" class="modal fade" role="dialog">
                             <div class="modal-dialog">

                               <!-- Modal content-->
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 </div>
                                 <div class="modal-body">
                                   <p>Success
                              <i class="glyphicon glyphicon-thumbs-up"></i> Thank you for contacting us. We will get back to you soon.</p>
                                 </div>
                                 <div class="modal-footer">
                                   <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
                                 </div>
                               </div>

                             </div>
                           </div>

                           </div>
                           
                           <div class="row">
                             <div class="col-md-6">
                               <div class="form-group">
                                   <div id="err-captch" style="display: none; color: red;">Please complete the security check.</div>
                                   <div class="g-recaptcha" name="recaptcha" data-sitekey="6Lc5LU8UAAAAAAfeOoxQUnaFaae0ZlnIWbCEUGf9"></div>
                               </div>
                             </div>

                                <div class="col-md-6">
                                  <input id="btn-submit" name="submit" class="comment-submit contact-btn pull-right" type="submit" value="Submit">

                                </div>
                           </div>

                           </form>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
               <div class="footer-contact">
                  <div class="container">
                     <div class="row">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-12 text-center">
                             <div class="add-area">
                                 <div class="arrow bounce"></div>
                                 <h3>Customer Support</h3>
                                 <ul class="list-unstyled">
                                     <li>T: <a href="tel:03303801000">0330 380 1000</a></li>
                                     <li><img src="assets/images/customer-support-contact.jpg" width="165" height="15" class="footer-contact-img" alt="contact"></li>
                                     <li>Mon - Fri: 9:30 am - 11:00 pm
                                         <br>Sat - Sun: 10:00 am - 11:00 pm</li>
                                 </ul>
                             </div>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                          <div class="add-area">
                              <div class="arrow bounce"></div>
                              <h3>Sales and Marketing</h3>
                              <ul class="list-unstyled">
                                  <li>T:  <a href="tel:02035985956">0203 598 5956</a></li>
                                  <li><img src="assets/images/hello-chefonline-com.png" width="144" height="16" class="footer-contact-img" alt="contact"></li>
                              </ul>
                          </div>
                         </div>
                         <!--
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                     <div class="add-area">
                                        <div class="arrow bounce"></div>
                                        <h3>EPoS Customer Support</h3>
                                        <ul class="list-unstyled">
                                           <li>T: <a href="tel:03303801000">0330 380 1000</a></li>
                                           <li><img src="assets/images/epos-contact.jpg" class="footer-contact-img" alt="contact"></li>
                                           <li>Mon - Fri: 9:30 am - 11:00 pm
                                           <br>Sat - Sun: 10:00 am - 11:00 pm</li>
                                        </ul>
                                     </div>
                                  </div>
                         -->
                     </div>
                  </div>

               </div>
               <div class="contact-map">
                           <div class="location-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.384979789352!2d-0.07365748422938145!3d51.52449837963787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cb7ec0bb223%3A0x39660044e279fd66!2sChefOnline!5e0!3m2!1sen!2suk!4v1491377805428" width="100%" height="437px" frameborder="0" style="border:0; display:block"></iframe>
                           </div>
                </div>




         </div>
      </div>
      <!--Section box ends Here -->
   </section>
   <!--Section area ends Here -->
<script type="text/javascript">

      //Equal height box menu menu
      var varequalheight = function(container){
   var currentDiv = '';
   var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el,
        topPosition = 0;
    jQuery(container).each(function() {

      $el = jQuery(this);
      jQuery($el).height('auto')
      var topPostion = $el.position().top;

      if (currentRowStart != topPostion) {
        for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
          rowDivs[currentDiv].height(currentTallest);
        }
        rowDivs.length = 0; // empty the array
        currentRowStart = topPostion;
        currentTallest = $el.height();
        rowDivs.push($el);
      } else {
        rowDivs.push($el);
        currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
     }
      for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
        rowDivs[currentDiv].height(currentTallest);
      }
    });
   }

   jQuery(window).load(function() {
     varequalheight('.equal-height');
   });


   jQuery(window).resize(function(){
     varequalheight('.equal-height');
   });


</script>