<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div action="" class="login">
		<h1>Login</h1>
		<form method="post" action="login_request.php">
			<label for="username">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="username" placeholder="Username" required>
			<label for="password">
				<i class="fas fa-lock"></i>
			</label><br><br>
			<input type="password" name="password" placeholder="Password" required>
			<input type="submit" value="Login">
		</form>
	</div>
</body>

</html>