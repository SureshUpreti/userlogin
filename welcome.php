<?php  
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>
	<h1>Valid User</h1>
	<h2>Your Username is: <?php  echo $_SESSION["username"]; ?></h2>
	<h2>Your Password is: <?php  echo $_SESSION["password"]; ?></h2>
</body>
</html>