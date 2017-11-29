<?php
	
	//connect database ('host', 'user', 'pass', 'database name')
	$dbcon = mysqli_connect('localhost', 'root', 'Kp5610761!', 'logindb');

	if (mysqli_connect_errno()) { //is there any error in this connection?
		echo "Cannot connect Database MySQL". mysqli_connect_error(); //display "Cannot connect Database MySQL" then show the system errors
		exit;
	}
	mysqli_set_charset($dbcon, 'utf8');


?>