<html>
	<head>
		<meta charset="utf-8"
		<title></title>

		<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<div>
		<h1>Register</h1>

		<!-- register form send data to register.php -->
		<form action="register.php" method="POST">
			<label for="username">Username: </label>
			<input type="text" name="username" required autofocus>
			<label for="password">Password: </label>
			<input type="password" name="password" required>
			<label for="email">Email: </label>
			<input type="email" name="email" placeholder="example@domain.com" required>
			<br><br>
			<input type="submit" name="Register">
		</form>
		<br>
		<br>
		<a href="index.php">Back to Home</a>
		</div>
	</body>
</html>