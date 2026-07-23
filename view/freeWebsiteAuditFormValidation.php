<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Welcome
                </h4>
            </div>

            <div class="modal-body">

                <P id="msg"></P>

            </div>

        </div>
    </div>
</div>

<?php 

	$Name_pattern = "/^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$/";
	$email_pattern = "/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";
	$postcode_pattern = "/^[A-Za-z]{1,2}[0-9R][0-9A-Za-z]?[\s]?[0-9][ABD-HJLNP-UW-Z abd-hjlnp-uw-z]{2}$/";
	$phone_pattern = "/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/";
	
	$Business_Owner_length = 50;
	$BusinessEmail_length = 40;
	$BusinessPhone_length = 15;
	$RestaurantName_length = 100;
	$BusinessAddress_length = 200;
	$PostCode_length = 11;
	
	$Country = "United Kingdom";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	extract($_POST);

    $how_did_you_know_value = '';
    if($how_did_you_know == 'Other'){
        $how_did_you_know_value = $how_did_you_know_other;
    }else{
        $how_did_you_know_value = $how_did_you_know;
    }
	
	// ------------------- CHECK INPUT VALUE FIELD -------------------------------
    //Check Business Owner Name
	$Business_Owner_Error = 1; // Initialized: has an in Business Owner Name

	if (empty($OwnerName)) {
		$error_BusinessOwner = "Business Owner Name cann't be empty";
	}
	elseif (strlen($OwnerName)>$Business_Owner_length) {		
		$error_BusinessOwner = "length Cann't be more than ".$Business_Owner_length." character long"; 
	}
	elseif (!preg_match($Name_pattern,$OwnerName)) {
		$error_BusinessOwner = "Pattern not matched with the correct format"; 
	}
	else{
		$Business_Owner_Error = 0; // No Error in Business Owner Name
	}

    //Check Business Owner Name
    $Business_Owner_Error = 1; // Initialized: has an in Business Owner Name

    if (empty($OwnerName)) {
        $error_BusinessOwner = "Business Owner Name cann't be empty";
    }
    elseif (strlen($OwnerName)>$Business_Owner_length) {
        $error_BusinessOwner = "length Cann't be more than ".$Business_Owner_length." character long";
    }
    elseif (!preg_match($Name_pattern,$OwnerName)) {
        $error_BusinessOwner = "Pattern not matched with the correct format";
    }
    else{
        $Business_Owner_Error = 0; // No Error in Business Owner Name
    }

    //Business Owners - Email
	$Business_OwnersEmail_Error = 1; // Initialized: has an Error in Business Owners - Email

	if(empty($BusinessEmail)) {
		$error_BusinessOwnerEmail = "Field cann't be blank";
	}
	elseif(strlen($BusinessEmail)>$BusinessEmail_length){
		$error_BusinessOwnerEmail = "Length Can't be more than ".$BusinessEmail_length." character long";
	}
	elseif(!preg_match($email_pattern,$BusinessEmail)){
		$error_BusinessOwnerEmail = "Pattern not matched with the correct format";
	}
	else{
		$Business_OwnersEmail_Error = 0; //No Error in Business Owners - Email
	}
	
	//Personal Contact - Phone 
	$Business_Phone_Error = 1; // Initialized: has an Error in Business Contact - Telephone

	if(empty($BusinessPhone)) {
		$error_BusinessPhone = "Field cann't be blank";
	}
	elseif(strlen($BusinessPhone)>$BusinessPhone_length){
		$error_BusinessPhone = "Length Can't be more than ".$BusinessPhone_length." character long";
	}
	elseif(!preg_match($phone_pattern,$BusinessPhone)){
		$error_BusinessPhone = "Pattern not matched with the correct format"; 
	}
	else{
		$Business_Phone_Error = 0; // No Error in Business Phone
	}	

	//Check Restaurant Name 
	$RestaurantName_Error = 1; // Initialized: has an in Business Owner Name

	if(empty($RestaurantName)){
		$error_BusinessName = "Restaurant Name Can't be blank";
	}
	elseif(strlen($RestaurantName)>$RestaurantName_length){
		$error_BusinessName = "Restaurant Name Can't be ".$RestaurantName_length." character long";		
	}
	else{
		$RestaurantName_Error = 0;
	}
	
	//Check Business Phone 
	$RestaurantPhone_Error = 1; // Initialized: has an Error in Restaurant - Phone

	// if(empty($RestaurantPhone)) {
	// 	$error_RestaurantPhone = "Field cann't be blank";
	// }
	// else
	if(strlen($RestaurantPhone)>$BusinessPhone_length){
		$error_RestaurantPhone = "Length Can't be more than ".$BusinessPhone_length." character long";
	}
	elseif(!preg_match($phone_pattern,$RestaurantPhone)){
		if(!empty($RestaurantPhone)) {
			$error_RestaurantPhone = "Pattern not matched with the correct format"; 
		}
	}
	else {
		$RestaurantPhone_Error = 0; // No Error in Business Phone
	}

	//Check Restaurant Address 
	$BusinessAddress_Error = 1; // Initialized: has an in Restaurant Address

	if(empty($BusinessAddress1)){
		$error_BusinessAddress = "Business Address Can't be blank";
	}
	elseif(strlen($BusinessAddress1)>$BusinessAddress_length){
		$error_BusinessAddress = "Business Address Can't be ".$BusinessAddress_length." character long";		
	}
	else{
		$BusinessAddress_Error = 0; // No Error in Restaurant Address
	}		

	//Check PostCode 
	$PostCode_Error = 1; // Initialized: has an Error in Post Code
	if (strlen($BusinessPostcode)>$PostCode_length) {
		$error_PostCode = "Length Can't be more than ".$PostCode_length." character long";
	}	
	else{
		$PostCode_Error = 0; // No Error in Post Code
	}
	
	//Checkbox value
	$Checkbox_Error = 1; // No check in checkbox
	if(!isset($TermsAgree)){
		$error_checkbox = "You must agree with our terms and conditions";
	}
	else{
		$Checkbox_Error = 0; // Checkbox is checked		
	}
	
	if($Business_Owner_Error == 0 && $Business_OwnersEmail_Error == 0 && $Business_Phone_Error == 0 && $RestaurantName_Error == 0 && $PostCode_Error == 0 && $Checkbox_Error == 0) {  

    	$res_id 	= 0;
  		$email 		= $BusinessEmail;
  		$platform 	= 1;
  	    $mobile 	= $BusinessPhone;
  	    $want_newsletter = 1;
		if( $_POST['want_newsletter'] == 'on' ):
			$want_newsletter = 0;
		endif;

		$want_text_message = 1;
		if( $_POST['want_text_message'] == 'on' ):
			$want_text_message = 0;
		endif;

		$to 	 = "$BusinessEmail";
		$subject = "Free Website Audit Request";

		$message = '
			<!DOCTYPE html><html><head>
			<meta charset="UTF-8">
			<title>Business Confirmation</title>
			</head>
			<body><center>
			<table width="600" border="0" cellpadding="0" cellspacing="10">
			<tbody>
			<tr>
				<td bgcolor="#0F0F0F" style="text-align:left;">
						<p style="color:#fff;padding:20px;text-align:left;font-size:18px;font-family:Arial,Helvetica,sans-serif">Thank you for free website audit request! We will contact you soon!</p>
					</td>
			</tr>
			<tr>
				<td style="border:1px solid;padding:15px">
				<table width="800" border="0">
				<tbody>
				<tr>
					<td colspan="3"  style="text-align:left;">
						<span style="color:#1c2256;font-family:Arial,Helvetica,sans-serif;font-size:20px;line-height:25px"><u>WEBSITE AUDIT DETAILS</u></span>
					</td>
				</tr>
				<tr>
					<td colspan="2"  style="text-align:left;">
						<span style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold">Name:</span>
					</td>
					<td  style="text-align:left;">
						<span style="font-family:Arial,Helvetica,sans-serif;font-size:16px">'.$OwnerName.'</span>
					</td>
				</tr>
				
				<tr>
					<td colspan="2"  style="text-align:left;">
					<span style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold">Website/Domain:</span>
					</td>
					<td  style="text-align:left;">
						<span style="font-family:Arial,Helvetica,sans-serif;font-size:16px">'.$RestaurantName.'</span>
					</td>
				</tr>
				<tr>
					<td colspan="2"  style="text-align:left;">
						<span style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold">Mobile Number:</span>
					</td>
					<td  style="text-align:left;">
						<span style="font-family:Arial,Helvetica,sans-serif;font-size:16px">'. $BusinessPhone.'</span>
					</td>
				</tr>
				<tr>
				<tr>
					<td colspan="2"  style="text-align:left;">
						<span style="font-family:Arial,Helvetica,sans-serif;font-size:16px;font-weight:bold">E-mail:</span>
					</td>
					<td  style="text-align:left;">
						<span style="font-family:Arial,Helvetica,sans-serif;font-size:16px">'. $BusinessEmail.'</span>
					</td>
				</tr>';

		$message .= '</table>
		</body>
		</html>
		';

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   
	$headers .= 'From:hello1@chefonline.co.uk <hello1@chefonline.co.uk>' . "\r\n";

	$headers .= 'Bcc: hello1@chefonline.co.uk' . "\r\n";

	$email_succ= mail($to,$subject,$message,$headers);

	  if($email_succ){ 
	  	?>

<script type='text/javascript'>
bootstrapModal();

function bootstrapModal() {

    $('#myModal').modal('show');

    $('#msg').html(
        'Thank you very much for your interest. Your enquiry has been sent. A member of staff will contact you shortly.'
    );
    setTimeout('window.location.href = "home"; ', 5000);

}
</script>
<?php }else{ ?>
<script type='text/javascript'>
bootstrapModal2();

function bootstrapModal2() {

    $('#myModal').modal('show');

    $('#msg').html('Email sending failed. Please try again later.');
    setTimeout('window.location.href = "home"; ', 5000);

}
</script>

<?php   }

	}//End of filter Data

}//End of POST

?>