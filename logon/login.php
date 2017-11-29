<?php
	require 'connectdb.php';

	//get data form index.php
	$login_username = mysqli_real_escape_string($dbcon, $_POST['username']); 
	$login_password = mysqli_real_escape_string($dbcon, $_POST['password']);


	//code a password
	$salt = 'lsse2rfkskregjlkj234dfg45fgh77';
	$hash_login_password = hash_hmac('sha256', $login_password, $salt);

	$sql = "SELECT * FROM tb_login WHERE login_username=? AND login_password=?";
	$stmt = mysqli_prepare($dbcon, $sql); //prepare sql

	//send paramitor first s = $login_username, seccond s = $hash_login_password that math with ..=? , ..=?
	mysqli_stmt_bind_param($stmt, "ss", $login_username, $hash_login_password);
	mysqli_execute($stmt); 
	$result_user = mysqli_stmt_get_result($stmt);
	if ($result_user->num_rows == 1) { //can login
		//keep session for uising in other page
		session_start();
		$row_user = mysqli_fetch_array($result_user, MYSQLI_ASSOC);
		$_SESSION['login_id'] = $row_user['login_id'];
		header("Location: ../index.php");
	} else { //cannot login
		echo "Wrong username or password. Try again.";
	}