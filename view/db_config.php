<?php 
	$db_host = "localhost";
	$db_name = "srs_registration";
	$db_user = "srs_registration";
	$db_pass = "3I5w9?zo";
	
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}




?>