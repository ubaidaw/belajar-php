<?php 

	$nama_depan = "Budi";
	$nama_belakang = "Andi";


	echo $nama_depan . " ".$nama_belakang;

	echo "<br>";

	echo strlen("Selamat Datang");

	echo "<br>";

	echo strpos("Jalan Raya","a", 4);
	//			 0123456789

	echo "<br>";

	echo strtolower("HAI");

	echo "<br>";

	echo strtoupper("hello");

	echo "<br>";

	$nama = "Siti Tono";

	echo substr($nama, 5);

	echo "<br>";

	echo strrev("hai");

	echo "<br>";

	$salam = "Selamat Pagi";

	echo $salam;

	echo "<br>";

	echo str_replace("Pagi", "Malam", $salam);


 ?>