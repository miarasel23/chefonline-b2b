
   <!--Section area starts Here -->

   <section id="section">
      <!--Section box starts Here -->
      <div class="section">
         <div class="comment-drop-box ">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <img src="assets/images/mega.png" style="width: 100%;" >
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="kh-who-we-are">
                            <h3 class="text-center kh-line" style="color: #1B1B6C">Mega Medical Camp Bangladesh 2024</h3>
                        </div>
                    </div>
                </div>
            </div>


           <div class="contact-form-box">
            <div class="container"> 
               <div class="row">
                 <div class="col-md-12">
                    <div class="enqiry" style="width: 100%;">
                    <div class="contact-title">
                       <h4>Registration</h4>

                    </div>
                       <form id="" method="post" action="">
                          <div class="row" id="error">
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <input id="name" name="name" class="name" type="text" placeholder="Patient Name*" required />
                            </div>
                            <div class="col-md-4">
                              <input type="number" placeholder="Age*" id="age" name="age" class="age" required>
                            </div>
                            <div class="col-md-4">
                              <input type="number" placeholder="Mobile Number*" id="telephone" name="telephone" class="telephone" required>
                            </div>
                            <!-- <div class="col-md-4">
                              <input id="email" name="email" class="email" type="email" placeholder="example@email.com*" required/>
                            </div> -->
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <input type="text" placeholder="Emergency contact name*" id="emergency_name" name="emergency_name" class="emergency_name" required>
                            </div>
                            <div class="col-md-4">
                              <input type="number" placeholder="Emergency contact number*" id="emergency_telephone" name="emergency_telephone" class="emergency_telephone" required>
                            </div>
                            <!-- <div class="col-md-4">
                              <input type="email" placeholder="Email*" id="email" name="email" class="email" required>
                            </div> -->
                            <!-- <div class="col-md-12">
                              <textarea id="enquiry" name="enquiry" class="name" type="text" placeholder="Enquiry*" rows="3" required></textarea>

                            </div> -->
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
                                   <i class="glyphicon glyphicon-thumbs-up"></i> Thank you for enquiry.</p>
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
                               <!-- <div class="form-group">
                                   <div id="err-captch" style="display: none; color: red;">Please complete the security check.</div>
                                   <div style="width: 100%;" class="g-recaptcha" name="recaptcha" data-sitekey="6Lc5LU8UAAAAAAfeOoxQUnaFaae0ZlnIWbCEUGf9"></div>
                               </div> -->
                             </div>

                            <div class="col-md-6">
                              <input id="btn-submit" name="submit" class="comment-submit contact-btn pull-right" type="submit" value="Submit">
                            </div>
                       </div>
                       
                       <div class="row">
                            <div class="col-12">
                                <span style="display: block; width: 100%;">a:: For help please dial: <a href="tel:+8801864956711">+8801864956711</a></span>
                                <br>
                                <span style="display: block; width: 100%;">a:: Supported by <a href="https://www.chefonline.com">chefonline</a></span>
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



<?php

// Database connection parameters
$servername = "18.135.191.8"; // Change this to your MySQL server hostname
$username = "srs_admin"; // Change this to your MySQL username
$password = "Q85vb03_g"; // Change this to your MySQL password
$database = "muhib_test_database"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variable to store success status
$status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace
    $name = trim($_POST["name"]);
    $age = trim($_POST["age"]);
    $telephone = trim($_POST["telephone"]);
    $emergency_name = trim($_POST["emergency_name"]);
    $emergency_telephone = trim($_POST["emergency_telephone"]);
    // $email = trim($_POST["email"]); // Assuming email is optional, comment out if not

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO info (name, age, phone, emergency_name, emergency_telephone) VALUES (?, ?, ?, ?, ?)");

    // Check if preparation succeeded
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sisss", $name, $age, $telephone, $emergency_name, $emergency_telephone);

    // Check if binding succeeded
    if ($stmt === false) {
        die("Error binding parameters: " . $stmt->error);
    }

    // Execute statement
    if ($stmt->execute()) {
        // Compose the email message to the organization
        $to_organization = "trf@chefonline.com";
        $subject_organization = "Mega Medical Camp Bangladesh 2024 - MMCBD24";
        $message_organization = "Patient Name: $name\n";
        $message_organization .= "Age: $age\n";
        $message_organization .= "Phone Number: $telephone\n";
        $message_organization .= "Emergency Contact Name: $emergency_name\n";
        $message_organization .= "Emergency Contact Number: $emergency_telephone\n";
        // if email field exist
        // $message_organization .= "Email: $email\n";

        // Set headers for organization email
        $headers_organization = 'From: MMCBD24 <trf@chefonline.com>' . "\r\n";
        $headers_organization .= 'Reply-To: MMCBD24 <trf@chefonline.com>' . "\r\n";
        $headers_organization .= 'X-Mailer: PHP/' . phpversion();

        // Send email to organization
        $organization_mail_status = mail($to_organization, $subject_organization, $message_organization, $headers_organization);

        // Compose the thank you email message to the user
        $to_user = $email;
        $subject_user = "Thank You for Registering - Mega Medical Camp Bangladesh 2024 - MMCBD24";
        $message_user = "Dear $name,\n\n";
        $message_user .= "Thank you for registering for the Mega Medical Camp Bangladesh 2024 (MMCBD24). We have received your information and will get back to you shortly.\n\n";
        $message_user .= "Best regards,\nYour Organization";

        // Send email to user
        $user_mail_status = mail($to_user, $subject_user, $message_user);

        // alert("Hello World");

        // Check if both emails were sent successfully
        if ($organization_mail_status && $user_mail_status) {
            // If both emails are sent successfully, set success status
            $status = "success";



            echo "<script>setTimeout(function(){window.location.reload(true);}, 10);</script>";
        } else {
            // If email sending fails, display an error message
            // echo "Error sending emails";
        }
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();

?>

<script>
  $(document).ready(function () {
    <?php if($status === "success"): ?>
      // If form submission was successful, show the success modal
      $('#myModal').modal('show');
    <?php endif; ?>
  });
</script>
