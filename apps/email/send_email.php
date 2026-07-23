<?php 
if($_POST) {
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_website = $_POST['website'];
    $subject= "SRS SEO Inquiry";
    $messages = $_POST['message'];
    $htservername=$_SERVER['HTTP_HOST'];
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <info@srs-apps.co.uk>' . "\r\n";
	$headers .= 'Bcc: fuad.hasan@chefonline.co.uk' . "\r\n";
	//$headers .= 'Bcc: sazzad.hossain@chefonline.co.uk' . "\r\n";
	$to       = "generalenquiries@chefonline.co.uk";
	//$to       = "sazzad.hossain@chefonline.co.uk";
	$message  = "<b>Name:</b> $user_name <br><br> <b>Email Address:</b> $user_email <br><br> <b>Phone Number:</b> $user_phone <br><br> <b>Website:</b> $user_website <br><br> <b>Messages:</b> $messages ";
	$message .="</hr>";
	$message .="<br><br>";
	$message .="<p style='text-align:center'>";
	$message .="This email was sent from "."<a href='$htservername'>$htservername</a>";
	$message .="</p>";
	$email_succ= mail($to, $subject, $message, $headers);
	if($email_succ){
		echo "1";
	} else if(!$email_succ){
		echo "0";
	} else {
	 echo "not sent";
	}
 }