<?php

$errors = [];
$errorMessage = '';
$successMessage = '';
$captcha = $_POST['g-recaptcha-response'];
$message = "Your request has been sent successfully";

$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcKxxIjAAAAAH417jnuJWgdF8iIk5nM9byGcvHf&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

// echo $response['success'];
// echo '<pre>';
// print_r($response);
// echo '</pre>';
// exit;

if($response['success'] == false)
    {
        echo '<h2>Invalid Google Captcha</h2>';
        header('Location: https://www.chefonline.com/black-friday-offers#info?black_friday_offer_message=Invalid Captcha', true, 200);
    }
else
    {
        if(isset($_POST['black_friday_offer_query'])) {
            $name = $_POST['name'];
            $email = $_POST['email']; // this is the sender's Email address
            $phone = $_POST['phone'];
            $selected_offer = $_POST['selected_offer'];
            $year = date('Y');
            $subject = "ChefOnline Offer Confirmation";
            
            $to = 'hello1@chefonline.co.uk,'.$email;
            
            $message = "
                        <table bgcolor='#D7D7D7' align='center' border='0' cellpadding='0' cellspacing='0' style='width:100%;padding:0;background:#D7D7D7; margin:0; padding:0;'>
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

                                                                <span style='color:#000;'><b>Name : </b> $name</span>
                                                                
                                                                <br />

                                                                <b>Email : </b> <a href='mailto:$email' style='color:#000;'>$email</a>
                                                                
                                                                <br />
                                                                
                                                                <span style='color:#000;'><b>Phone : </b> $phone</span>
                                                                
                                                                <br />
                                                                
                                                                <span style='color:#000;'><b>Interested Offer : </b> $selected_offer</span>
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
                                                    <td><p style='color:#fff; text-align:center; margin:10px; padding:0; font-size:10px;font-family:Verdana, Geneva, sans-serif;'>  © ".$year." ChefOnline. ALL Rights Reserved.   </p></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
            ";

            $headers = 'From:' . $email. "\r\n" ;
            $headers .='Reply-To: hello1@chefonline.co.uk'. "\r\n" ;
            $headers .='X-Mailer: PHP/' . phpversion();
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";                           
            mail($to, $subject, $message, $headers);

            $successMessage = "<p style='color: green;'>Thank you for your message.</p>";
            
            echo "<script type='text/javascript'>
            $(document).ready(function(){
            $('#myModal3').modal('show');
            });
            </script>";
        }

        header('Location: https://www.chefonline.com/black-friday-offers#info?black_friday_offer_message=Your request has been sent successfully', true, 200);

    }


?>