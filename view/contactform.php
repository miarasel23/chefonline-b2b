
<?php

$user_name;
$user_email;
$restaurant_name;
$postcode;
$telephone;
$messages;
$captcha;
if(isset($_POST['name']))
  $user_name=$_POST['name'];
if(isset($_POST['email']))
  $user_email=$_POST['email'];

if(isset($_POST['restaurant_name']))
  $restaurant_name=$_POST['restaurant_name'];
if(isset($_POST['postcode']))
  $postcode=$_POST['postcode'];
if(isset($_POST['telephone']))
  $telephone=$_POST['telephone'];

if(isset($_POST['comment']))
  $messages=$_POST['comment'];
if(isset($_POST['g-recaptcha-response']))
  $captcha=$_POST['g-recaptcha-response'];

if(!$captcha){
  echo '<h2>Please check the the captcha form.</h2>';
  exit;
}
// if (filter_var($user_email, FILTER_VALIDATE_EMAIL)){
//   echo '<h2>Please enter the valid email.</h2>';
//   exit;
// }
$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lc5LU8UAAAAAFdG6DWYpIpgmmXgIUB4qtgsyawE&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
if($response['success'] == false)
{
  echo '<h2>Email sending failed</h2>';
  exit;
}
else
{

	    // $user_name = $_POST['name'];
	    // $user_email = $_POST['email'];
	    // $subject= $_POST['subject'];
	    // $messages = $_POST['comment'];
	    $htservername=$_SERVER['HTTP_HOST'];
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		//$headers .= 'From:business.registration@chefonline.co.uk <business.registration@chefonline.co.uk>' . "\r\n";
		$headers .= 'From:generalenquiries@chefonline.co.uk <generalenquiries@chefonline.co.uk>' . "\r\n";
		//$to       = 'business.registration@chefonline.co.uk';
        $to       = 'generalenquiries@chefonline.co.uk,'.$user_email;
		//$to       = 'sazzad.hossain@chefonline.co.uk,'.$user_email;
		$message  = "<table bgcolor='#D7D7D7' align='center' border='0' cellpadding='0' cellspacing='0' style='width:100%;padding:0;background:#D7D7D7; margin:0; padding:0;'>
    <tr>
        <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' width='620' style='width:620px;'>
                <tbody>
                    <tr style='width:100%;display:block'>
                        <td style='width:100%;display:block'><p style='height:30px; color:#fff; margin:0; padding:0; font-size:14px;font-family:Verdana, Geneva, sans-serif;'>&nbsp; </p></td>
                    </tr>
                </tbody>
            </table>
            
             <!-- logo section Start-->
            <table bgcolor='#f3f3f3' align='center' border='0' cellpadding='0' cellspacing='0' width='620' style='width:620px; background:#f3f3f3;'>
                <tbody>
                    <tr style='width:100%;display:block'>
                        <td style='width:100%;display:block'><p style='height:15px; color:#fff; margin:0; padding:0; font-size:4px;font-family:Verdana, Geneva, sans-serif;'>&nbsp; </p></td>
                    </tr>
                    <tr style='width:100%;display:block'>
                        <td style='width:100%;display:block' align='center'>&nbsp;
                            <p style='color:#fff; text-align:center; margin:0; padding:0;'> <img width='200' src='https://www.chefonline.com/assets/images/logo.png'/></p>&nbsp;
                        </td>
                    </tr>
                    <tr style='width:100%;display:block' id='blankSpace'>
                        <td style='width:100%;display:block' align='center'>
                            <p style='color:#fff; text-align:center; margin:0; padding:0; height:15px; font-size:4px;font-family:Verdana, Geneva, sans-serif;'>&nbsp;  </p>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <!-- logo section end-->
            
            
            <!-- customer greetings section start-->
            <table bgcolor='#fff'  align='center' border='0' cellpadding='0' cellspacing='0' width='620' style='width:620px; background:#fff;'>
                <tbody>
                    <tr style='width:100%;display:block' id='blankSpace'>
                        <td style='width:100%;display:block' align='center' colspan='3'>
                            <p style='color:#fff; text-align:center; margin:0; padding:0; height:15px; font-size:14px;font-family:Verdana, Geneva, sans-serif;'>&nbsp;  </p>
                        </td>
                    </tr>
                    <tr style='width:100%;display:block' id='blankSpace'>
                        <td style='width:15px;'>
                            <p style='color:#fff; text-align:center; margin:0; padding:0; height:15px; width:15px; font-size:14px;font-family:Verdana, Geneva, sans-serif;'>&nbsp;  </p>
                        </td>
                        <td>
                            <h3 style='color:#000; font-size:16px; text-align: center; margin:0; padding:0; font-family:Verdana, Geneva, sans-serif; line-height:20px; margin-bottom:20px;'>Thank you for contacting us. We will get back to you soon.</h3> <br />
                            <p style='color:#000; text-align: center; margin:0; padding:0; font-size:14px;font-family:Verdana, Geneva, sans-serif; line-height:20px; margin-bottom:20px;'><b>Here are your enquiry details: </b>
                                <br />
                                <br /></p>
                                <p style='color:#000; text-align: left; margin:5px; padding:0; font-size:14px;font-family:Verdana, Geneva, sans-serif; line-height:20px;'>
                                    <span style='color:#000;'><b>Name:</b> $user_name</span>
                                    <br />
                                    <b>Email Address:</b> <a href='mailto:$user_email' style='color:#000;'>$user_email</a>
                                    
                                    <br />
                                    <span style='color:#000;'><b>Restaurant Name:</b> $restaurant_name</span>
                                    <br />
                                    <span style='color:#000;'><b>Postcode:</b> $postcode</span>
                                    <br />
                                    <span style='color:#000;'><b>Phone Number:</b> $telephone</span>
                                    <br />
                                    <span style='color:#000;'><b>Messages:</b> $messages</span>
                                </p>
                                <br />
                                <br />
                        </td>
                        <td style='width:15px;'>
                            <p style='color:#fff; text-align:center; margin:0; padding:0; height:15px; width:15px; font-size:14px;font-family:Verdana, Geneva, sans-serif;'>&nbsp;  </p>
                        </td>
                    </tr>
                    
                    <tr style='width:100%;display:block' id='blankSpace'>
                        <td style='width:100%;display:block' align='center' colspan='3'>
                            <p style='color:#fff; text-align:center; margin:0; padding:0; height:15px; font-size:14px;font-family:Verdana, Geneva, sans-serif;'>&nbsp;  </p>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <table align='center' border='0' cellpadding='0' cellspacing='0' width='620' style='width:620px;'>
                <tbody>
                    <tr style='width:100%;display:block' id='blankSpace'>
                        <td style='width:100%;display:block' align='center' colspan='3'>
                            <p style='color:#fff; text-align:center; margin:0; padding:0; height:15px; font-size:14px;font-family:Verdana, Geneva, sans-serif;'> <img src='http://cobbc.com/wp-content/uploads/2017/03/table_footer.png' style='width:100%;' /> </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <table bgcolor='#444444' align='center' border='0' cellpadding='0' cellspacing='0' style='width:100%; background:#444444;'>
                <tbody>
                    <tr>
                        <td><p style='color:#fff; text-align:center; margin:10px; padding:0; font-size:10px;font-family:Verdana, Geneva, sans-serif;'>  © 2021 ChefOnline. ALL Rights Reserved.   </p></td>
                    </tr>
                </tbody>
            </table>
            
        </td>
    </tr>
</table>";
		$message .="</hr>";
		$message .="<br><br>";
		$message .="<p style='text-align:center'>";
		$message .="This email was sent from "."<a href='$htservername'>$htservername </a>";
		$message .="</p>";
        // print_r($message);
        // exit;
		//$email_succ= mail($to, 'ChefOnline Enquiry', $message, $headers);
	if($email_succ){
		echo "sent";
	 }else if(!$email_succ){
		echo "Email sending failed";
	}else{
		echo "not sent";
	}
	

 }
?>