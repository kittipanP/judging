<?php

	require 'connectdb.php';

	$login_username = $_POST['username']; 
	$login_password = $_POST['password'];
	$login_email = $_POST['email'];

	//เข้ารหัส รหัสผ่าน
	$salt = 'lsse2rfkskregjlkj234dfg45fgh77'; 
	$hash_login_password = hash_hmac('sha256', $login_password, $salt); 

	//insert to DB
	//**use $hash_login_password insert to DB not $login_password
	$query = "INSERT INTO tb_login (login_username,login_password,login_email) VALUES ('$login_username', '$hash_login_password', '$login_email')";

	//run command
	$result = mysqli_query($dbcon, $query);

	if ($result) { //isn't there any error ?
		header("Location: index.php"); //redirect to index.php
	} else {     
		//display there is something wrong! then show the erors       
		echo "there is something wrong!". mysqli_error($dbcon); 
	}

	mysqli_close($dbcon);

?>