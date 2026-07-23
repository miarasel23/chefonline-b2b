
<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$formcontent="From: $name \nEmail: $email \nPhone: $phone";
$recipient = "hello@chefonline.com";
$subject = "Claim Offer";
$mailheader = "From: $email \r\n";

if(mail($recipient, $subject, $formcontent, $mailheader)) {
    print "<p class='success'>You have claimed the offer. We will get back to you soon.</p>";
    } else {   	
        print "<p class='error'>Problem in Sending Mail.</p>";
    }	
?>