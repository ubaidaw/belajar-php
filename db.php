<?php 

	$connection = mysqli_connect("localhost","root","","crud");

	if(!$connection){
		echo "Gagal konek ke server!";
	}
 ?>