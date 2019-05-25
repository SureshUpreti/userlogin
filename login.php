<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="form">
		<form action="process.php" method="POST">
			<p>
				<label>Username:</label>
				<input type="text" name="username" id="username">
			</p>
			<p>
				<label>Password:</label>
				<input type="password" name="password" id="password">
			</p>
			<p>
				<input type="submit" vlaue="Login" id="btn">
			</p>

		</form>
	</div>
</body>
</html>