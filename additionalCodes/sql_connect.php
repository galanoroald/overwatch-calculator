<?php
	$mysqli = mysqli_connect("localhost", "root", "", "overwatchcalc");
	/* check connection */
	
	if (!$mysqli) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		echo "ERROR! Connection Failed!";
		exit();
	} 
	
?>
