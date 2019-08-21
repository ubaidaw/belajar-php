<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register</title>
</head>
<body>
	<form method="POST" action="action-register.php">
		<p>
			<label> Username </label>
			<input type="text" name="username">
		</p>

		<p>
			<label>Gender</label>
			<input type="radio" name="gender" value="Male"> Male 
			<input type="radio" name="gender" value="Female"> Female
		</p>
		 
		 <input type="submit" value="Register">
	</form>
</body>
</html>