<?php 
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == "admin" && $password == "admin"){
		
		if(isset($_POST['remember'])){
			setcookie("last_username",$username, time() + 3600 *24);
		}else{
			setcookie("last_username","", time() - 1);
		}

		$_SESSION['username'] = $username;


		header("location:Home.php");
	}else{
		header("location:login.php");
	}


 ?>