<?php 
	
	require("db.php");

	$id = $_GET['id'];
	mysqli_query($connection, "DELETE FROM articles WHERE id=$id");

	header("location:index.php");

 ?>