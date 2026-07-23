<?php
echo 1; exit;
$con = mysqli_connect("77.68.43.27","bash_script","8kpTa4CPGq9UH.M%5!","srs_admin");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
	echo 'ok';
}
exit;
?>