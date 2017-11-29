<?php
	include 'session.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo "User Code".$_SESSION['login_id'];
		echo "<br>";
		echo "Wellcome $s_login_username E-mail $s_login_email";
	?>
	<hr>
	<a href="logout.php">Log Out</a>

</body>
</html>