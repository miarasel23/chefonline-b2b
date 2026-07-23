<?php
 if($_POST)
 {
  $user_name = $_POST['name'];
  $user_email = $_POST['email'];
  $user_phone = $_POST['phone'];
  $business_name = $_POST['business'];
  $post_code = $_POST['postcode'];  
  $subject= 'SRS Printmedia Enquiry';
  $messages = $_POST['message'];
  $htservername=$_SERVER['HTTP_HOST'];
 // echo "$user_name.' '.$user_email.' '.messages";
    $headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <info@srsprintmedia.co.uk>' . "\r\n";
	$to       = "newenquiries@chefonline.com";
	$message  = "<b>Name:</b> $user_name <br><br> <b>Email Address:</b> $user_email <br><br> <b>Phone Number:</b> $user_phone <br><br> <b>Business Name:</b> $business_name <br><br> <b>Postcode:</b> $post_code <br><br> <b>Messages:</b> $messages ";
	$message .="</hr>";
	$message .="<br><br>";
	$message .="<p style='text-align:center'>";
	$message .="This email was sent from "."<a href='$htservername'>$htservername </a>";
	$message .="</p>";
	
    $email_succ= mail($to, $subject, $message, $headers);
	if($email_succ){
		echo "sent";
	 }else if(!$email_succ){
		echo "Email sending failed";
	}else{
		echo "not sent";
	}
	

 }
?>