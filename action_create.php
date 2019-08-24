<?php 
	require("db.php");	


	$title = $_POST['title'];
	$category_id = $_POST['category_id'];
	$content = $_POST['content'];
	$date = date("Y-m-d");

	mysqli_query($connection, "INSERT INTO articles(title, category_id, content, date) VALUES ('$title','$category_id','$content','$date')");

	header("location:index.php");
 ?>