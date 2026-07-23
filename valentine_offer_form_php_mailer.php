<?php
// PHPMailer compatibility for PHP 7.1.3
require 'PHPMailer/PHPMailerAutoload.php'; // Use PHPMailer 5.2.x

$errors = [];
$errorMessage = '';
$successMessage = '';
$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';
$year = date('Y');

// Google reCAPTCHA validation
$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcKxxIjAAAAAH417jnuJWgdF8iIk5nM9byGcvHf&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']), true);

if (!$response['success']) {
    header('Location: https://www.chefonline.com/offer/valentine-offer/2025#info?black_friday_offer_message=Invalid Captcha', true, 200);
    exit;
}

if (isset($_POST['black_friday_offer_query'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $selected_offer = isset($_POST['selected_offer']) ? $_POST['selected_offer'] : '';
    $subject = "ChefOnline Valentine Offer Confirmation";

    $adminEmail = "hello1@chefonline.co.uk";

    // Email message content
    $message = "
    <html>
    <head>
        <title>ChefOnline Valentine Offer Confirmation</title>
    </head>
    <body>
        <p>Thank you for contacting us. We will get back to you soon.</p>
        <p><b>Name:</b> $name</p>
        <p><b>Email:</b> $email</p>
        <p><b>Phone:</b> $phone</p>
        <p><b>Interested Offer:</b> $selected_offer</p>
        <br />
        <p>© $year ChefOnline. All Rights Reserved.</p>
    </body>
    </html>
    ";

    // PHPMailer Setup
    $mail = new PHPMailer();
    
    try {
        // SMTP Server Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Change if using a different provider
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com'; // Your email
        $mail->Password = 'your-email-password'; // Use App Password for Gmail
        $mail->SMTPSecure = 'tls'; // Can be 'ssl' for port 465
        $mail->Port = 587; // 587 for TLS, 465 for SSL
        
        // Email Headers
        $mail->setFrom('your-email@gmail.com', 'ChefOnline');
        $mail->addAddress($adminEmail); // Admin Email
        $mail->addAddress($email); // User Email

        // Email Format
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Send Email
        if ($mail->send()) {
            header('Location: https://www.chefonline.com/offer/valentine-offer/2025#info?black_friday_offer_message=Your request has been sent successfully', true, 200);
            exit;
        } else {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
}
?>
