$(document).ready(function(){
	$("#contact_form").submit(function(ev){

		/*var serl_data= $(this).serialize();
		alert(serl_data);*/
		/*var Error_color = '#FCF';
		
		var OwnerName = $("#OwnerName").val();
		var BusinessEmail = $("#BusinessEmail").val();
		
		var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		// Returns successful data submission message when the entered information is stored in database.
		var dataString = 'OwnerName1='+ OwnerName + '&BusinessEmail1=' + BusinessEmail;
		
		$('#OwnerName').on('focus', function() {
		  $(this).css('background-color', '#FFFFFF');
		});
		
		$('#BusinessEmail').on('focus', function() {
		  $(this).css('background-color', '#FFFFFF');
		});

		//Check Business Owner Name		
		if(OwnerName==''){
			$('#OwnerName').css('background-color', Error_color);
			document.getElementById('OwnerNameErr').innerHTML = 'Business Name can\'t be blank';
		}
		else{
			$('#OwnerName').css('background-color', '#FFFFFF');
			document.getElementById('OwnerNameErr').innerHTML = '';
		}
		
		//Check Email Address
		if(BusinessEmail==''){
			$('#BusinessEmail').css('background-color', Error_color);
			document.getElementById('BusinessEmailErr').innerHTML = 'Email address cann\'t be blank!';
		}
		else if(!email_filter.test(BusinessEmail)){
			$('#BusinessEmail').css('background-color', Error_color);
			document.getElementById('BusinessEmailErr').innerHTML = 'Email address is not valid!';
		}
		else{
			$('#BusinessEmail').css('background-color', '#FFFFFF');
			document.getElementById('BusinessEmailErr').innerHTML = '';
		}*/
		/*
		else
		{
			// AJAX Code To Submit Form.
			$.ajax({
			type: "POST",
			url: "ajax_general_info_submit.php",
			data: dataString,
			cache: false,
			success: function(result){
					document.getElementById('name').value=null;
					document.getElementById('email').value=null;
					document.getElementById('confirm_email').value=null;
					document.getElementById('password').value=null;
					document.getElementById('confirm_password').value=null;
					
					alert(result);
					//document.getElementById("UploadSuccess").innerHTML="<span>The image has been uploaded</span>";

					window.setTimeout(function() {
				    	window.location.href = 'contact_info.html';
					}, 500);
				}
			});
		}
		return false;*/
	});
});

function FormValidation(){
		var Error_color = '#FCF';
		
		var OwnerName = $("#OwnerName").val();
		var BusinessEmail = $("#BusinessEmail").val();
		var BusinessPhone = $("#BusinessPhone").val();	
		var RestaurantName = $("#RestaurantName").val();				
		var RestaurantPhone = $("#RestaurantPhone").val();	
		var BusinessAddressOne = $("#BusinessAddress1").val();
    	var business_type = $("#business_type").val();
		//var BusinessCity = $("#BusinessCity").val();
		var BusinessPostcode = $("#BusinessPostcode").val();
		//var CheckAgree = $("#TermsAgree").val();
		//alert(CheckAgree);
											
		
		var email_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var postcode_filter = /^[A-Za-z]{1,2}[0-9R][0-9A-Za-z]?[\s]?[0-9][ABD-HJLNP-UW-Z abd-hjlnp-uw-z]{2}$/;
		var phone_filter = /^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/;
		
		var dataString = $("#contact_form").serialize();
		
		/*$('.inp').on('focus',function(){
			$(this).removeClass('error');
		});*/
		
		$('#OwnerName').on('focus', function() {
		  $(this).css('background-color', '#FFFFFF');
		});
		$('#business_type').on('focus', function() {
			$(this).css('background-color', '#FFFFFF');
		});
		$('#BusinessEmail').on('focus', function() {
		  $(this).css('background-color', '#FFFFFF');
		});
		
		$('#BusinessPhone').on('focus', function() {
		  $(this).css('background-color', '#FFFFFF');
		});
		
		$('#RestaurantName').on('focus', function() {
		  $(this).css('background-color', '#FFFFFF');
		});		
		
		$('#RestaurantPhone').on('focus', function() {
		  $(this).css('background-color', '#FFFFFF');
		});			
		
		$('#BusinessAddress1').on('focus', function() {
		  $(this).css('background-color', '#FFFFFF');
		});
		
		$('#BusinessCity').on('focus', function() {
		  $(this).css('background-color', '#FFFFFF');
		});
		
		$('#BusinessPostcode').on('focus', function() {
		  $(this).css('background-color', '#FFFFFF');
		});

				
		//Check Business Owner Name		
		if(OwnerName==''){
			//$('.inp').addClass('error');
			document.getElementById('OwnerNameErr').innerHTML = 'Business Name can\'t be blank';
			return false;
		}
		else{
			$('#OwnerName').css('background-color', '#FFFFFF');
			document.getElementById('OwnerNameErr').innerHTML = '';
		}
		//Check Business Owner Name
		if(business_type==''){
			//$('.inp').addClass('error');
			document.getElementById('business_typeErr').innerHTML = 'Business Name can\'t be blank';
			return false;
		}
		else{
			$('#business_type').css('background-color', '#FFFFFF');
			document.getElementById('business_typeErr').innerHTML = '';
		}
		//Check Email Address
		if(BusinessEmail==''){
			$('#BusinessEmail').css('background-color', Error_color);
			document.getElementById('BusinessEmailErr').innerHTML = 'Email address cann\'t be blank!';
			return false;			
		}
		else if(!email_filter.test(BusinessEmail)){
			$('#BusinessEmail').css('background-color', Error_color);
			document.getElementById('BusinessEmailErr').innerHTML = 'Email address is not valid!';
			return false;			
		}
		else{
			$('#BusinessEmail').css('background-color', '#FFFFFF');
			document.getElementById('BusinessEmailErr').innerHTML = '';
		}
		
		//Check Phone Number
		if(BusinessPhone==''){
			$('#BusinessPhone').css('background-color', Error_color);
			document.getElementById('BusinessPhoneErr').innerHTML = 'Business Phone Number cann\'t be blank!';
			return false;			
		}
		else if(!phone_filter.test(BusinessPhone)){
			$('#BusinessPhone').css('background-color', Error_color);
			document.getElementById('BusinessPhoneErr').innerHTML = 'Business Phone Number is not valid!';
			return false;			
		}
		else{
			$('#BusinessPhone').css('background-color', '#FFFFFF');
			document.getElementById('BusinessPhoneErr').innerHTML = '';
		}


		//Check Restaurant Name
		if(RestaurantName==''){
			$('#RestaurantName').css('background-color', Error_color);
			document.getElementById('RestaurantNameErr').innerHTML = 'Restaurant Name cann\'t be blank!';
			return false;			
		}
		else{
			$('#RestaurantName').css('background-color', '#FFFFFF');
			document.getElementById('RestaurantNameErr').innerHTML = '';
		}
		
		
		//Check Restaurant Phone Number
		if(RestaurantPhone==''){
			$('#RestaurantPhone').css('background-color', Error_color);
			document.getElementById('RestaurantPhoneErr').innerHTML = 'Business Phone Number cann\'t be blank!';
			return false;			
		}
		else if(!phone_filter.test(RestaurantPhone)){
			$('#RestaurantPhone').css('background-color', Error_color);
			document.getElementById('RestaurantPhoneErr').innerHTML = 'Business Phone Number is not valid!';
			return false;			
		}
		else{
			$('#RestaurantPhone').css('background-color', '#FFFFFF');
			document.getElementById('RestaurantPhoneErr').innerHTML = '';
		}
		

		//Check Business Address
		if(BusinessAddressOne==''){
			$('#BusinessAddress1').css('background-color', Error_color);
			document.getElementById('BusinessAddressErr').innerHTML = 'Restaurant Address cann\'t be blank!';
			return false;			
		}
		else{
			$('#BusinessAddress1').css('background-color', '#FFFFFF');
			document.getElementById('BusinessAddressErr').innerHTML = '';
		}

		//Check Restrurant City
		if(BusinessCity==''){
			$('#BusinessCity').css('background-color', Error_color);
			document.getElementById('BusinessCityErr').innerHTML = 'Restaurant City cann\'t be blank!';
			return false;			
		}
		else{
			$('#BusinessCity').css('background-color', '#FFFFFF');
			document.getElementById('BusinessCityErr').innerHTML = '';
		}
		

		//Check PostCode
		if(!postcode_filter.test(BusinessPostcode) && BusinessPostcode !=''){
			$('#BusinessPostcode').css('background-color', Error_color);
			document.getElementById('BusinessPostcodeErr').innerHTML = 'Business Postcode is not valid!';
			return false;			
		}
		else{
			$('#BusinessPostcode').css('background-color', '#FFFFFF');
			document.getElementById('BusinessPostcodeErr').innerHTML = '';
		}
		
		//Check Check box
		if($('#TermsAgree').is(":checked")==false){
			document.getElementById('CheckTermsErr').innerHTML = 'You must agree with our terms and conditions';
			return false;
		}
										
		
}//End of Form Validation

function validChar(event) {
    var key = window.event ? event.keyCode : event.which;
	/*if (key == 8 || key==43) {
    	return true;
	}
	else */if ( key > 48 && key < 57 ) {
    	return false;
	}
	else return true;
};

function validateQty(event) {
    var key = window.event ? event.keyCode : event.which;
	if (key == 8 || key==43) {
    	return true;
	}
	else if ( key < 48 || key > 57 ) {
    	return false;
	}
	else return true;
};