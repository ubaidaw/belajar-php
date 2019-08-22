<?php 
	$counter=0;
	if(isset($_COOKIE['counter'])){
		$counter = $_COOKIE['counter'] + 1;
	}
	setcookie("counter",$counter,time() + 3600);
	echo "Anda sudah mengunjungi website ini sebanyak : ".$_COOKIE['counter'];

	echo "<br>";
	session_start();

	if(isset($_SESSION['is_logged'])){
		echo "Sudah login";
	}else{
		echo "Belum login";
		$_SESSION['is_logged'] = true;
	}
 ?>