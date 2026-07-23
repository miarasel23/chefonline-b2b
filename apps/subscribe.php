<?php

	$res_id 	= 0;
	$email 		= $_POST['email'];
	$platform 	= 7;
    $mobile = '';

	$data = [ 'rest_id' => $res_id, 'email' => $email, 'platform' => 7, 'mobile' => '' ];	
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.chefonline.co.uk/ExternalAPI");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec ($ch);

    echo json_decode($server_output);

