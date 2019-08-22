<?php 
	session_start();
	$last_username ="";
	if(isset($_COOKIE['last_username'])){
		$last_username = $_COOKIE['last_username'];
	}

	if (isset($_SESSION['username'])) {
		header("location: Home.php");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form action="do_login.php" method="post">
	<p>
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $last_username; ?>">
	</p>

	<p>
		<label>Password</label>
		<input type="password" name="password">
	</p>

	<p>
		<input type="checkbox" name="remember"> Remember Me
	</p>

	<p>
		<input type="submit" value="Login">
	</p>
</form>
</body>
</html>