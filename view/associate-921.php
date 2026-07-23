
   <!--Section area starts Here -->

   <section id="section">
      <!--Section box starts Here -->
      <div class="section">
         <div class="comment-drop-box" style="padding: 0px 0px;">

           <div class="contact-form-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="https://www.artauk.com/web-assets/921.png" style="display: block; margin: auto;">
                    </div>
                </div>

                <br/>

                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="kh-who-we-are">
                            <h3 class="text-center kh-line">WHO WE ARE</h3>
                        </div>
                        <div>
                            <p class="text-center">The Tafida Raqeeb Foundation (TRF) was established as a subsequence of Tafida’s brain injury in 2019. Full information can be found in the website: www.tr-foundation.org.</p>
                        </div>
                    </div>
                </div> -->
               <div class="row">
                 <div class="col-md-12">
                    <div class="enqiry" style="width: 100%;">
                    <div class="contact-title">
                       <h4>General Enquiry</h4>

                    </div>
                       <form id="contact_form" method="post" action="">
                          <div class="row" id="error">
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <input id="restaurant_name" name="restaurant_name" class="restaurant_name" type="text" placeholder="Restaurant Name*" required />
                            </div>
                            <div class="col-md-4">
                              <input id="postcode" name="postcode" class="postcode" type="text" placeholder="postcode*" required />
                            </div>
                            <div class="col-md-4">
                              <input id="name" name="name" class="name" type="text" placeholder="Name*" required />
                            </div>
                            <div class="col-md-4">
                              <input id="email" name="email" class="email" type="email" placeholder="Email*" required/>
                            </div>
                            <div class="col-md-4">
                              <input type="text" placeholder="Phone*" id="telephone" name="telephone" class="telephone" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <textarea id="enquiry" name="enquiry" class="name" type="text" placeholder="Enquiry*" rows="3" required></textarea>

                            </div>
                          </div>

                        <div class="col-md-12">
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
                              <!-- <a href="javascript:void(0)" class="comment-submit contact-btn pull-right" onclick="getInTouch()">Submit</a> -->

                            </div>
                       </div>

                       </form>
                    </div>
                 </div>
                 </div>
              </div>
           </div>
         </div>
      </div>
      <!--Section box ends Here -->
   </section>
   <!--Section area ends Here -->


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




<?php



if ($_POST['name'] != "" && $_POST['email'] != "" && $_POST['telephone'] != "" && $_POST['enquiry'] != "") {
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $arr = ['status' => 0, 'text' => 'Invalid Email Address'];
    } else {
        $restaurant_name = $_POST["restaurant_name"];
        $postcode = $_POST["postcode"];
        $email = $_POST["email"];
        $name = $_POST['name'];
        $telephone = $_POST['telephone'];
        $enquiry = $_POST['enquiry'];
        $subject = "Get in Touch - TRF";

        // $to = 'manager@prideofasia.com, poffasia@gmail.com,'.$email;
        $to = $email;

        $message = "Hello $name, <br><br>";
        $message .= "Thank you for your enquiry. We will get back to you soon.<br><br>";
        $message .= "Details:<br>";
        $message .= "Name: $restaurant_name<br>";
        $message .= "Postcode: $postcode<br>";
        $message .= "Email: $email<br>";
        $message .= "Phone: $telephone<br>";
        $message .= "Enquiry: $enquiry<br>";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Chefonline associate partners 921<2024@artauk.com>' . "\r\n" . "CC: mohibbullah.chefonline@gmail.com, 2024@artauk.com";

        mail($to, $subject, $message, $headers);
        $arr = ['status' => 1, 'text' => 'Form submitted successfully.'];
    }
} else {
    $arr = ['status' => 0, 'text' => 'Some required field is empty. please try again.'];
}

// echo json_encode($arr);


?>


<script>
  $(document).ready(function () {
    <?php if(isset($arr) && $arr['status'] == 1): ?>
      // If form submission was successful, show the success modal
      $('#myModal').modal('show');
    <?php endif; ?>
  });
</script>
