<?php

	$mysqli = new mysqli("77.68.43.27", "srscontrollive", "e549cx*uYTvK_43(85d%gaGdKwM?rVzLPUkm;Bfy:h#nHC).{jsmout,ZEAG&/+X}", "srs_admin");

	/* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	
	$email = $_POST['email'];
	
	if( $email !='' ){
		
		$query = "SELECT * FROM `user` WHERE `email`= '$email'";
		$result = $mysqli->query($query);

		if( @mysqli_num_rows($result) > 0 ){
			echo 1;
		}else{

			$query = "SELECT * FROM `subscription` WHERE `subscription_email`= '$email'";
			$sql2 = $mysqli->query($query);
			
			
			if( @mysqli_num_rows($sql2) > 0 ){
				echo 1;
			}else{

				$query = "INSERT INTO `subscription` (`subscription_email`, `subscription_type`, `subscription_status`) VALUES ('$email','0',1)";
				$sql3 = $mysqli->query($query);
				
				if($sql3){
					echo 2;
				}else{
					echo 0;
				}

			}
		} 
	}else{
			redirect('PageNotFound');
	}




