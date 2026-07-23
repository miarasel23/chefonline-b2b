<?php
$to 		= 'tanvir.rahman@chefonline.co.uk, tanvir.se.chefonline@gmail.com';
$subject 	= 'Client Feedback';
$headers 	= "MIME-Version: 1.0" . "\r\n";
$headers   .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers   .= 'From:info@chefonline.co.uk <info@chefonline.co.uk>' . "\r\n";
$headers   .= 'Reply-To:"'.$to.'" <'.$to.'>' . "\r\n";
$body		= 'Pleashe check email from CO.UK LATEST LATEST LATEST';
mail($to, $subject, $body, $headers);
echo 'success';
?>