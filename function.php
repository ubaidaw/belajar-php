<?php 

	function salam($name = "bro"){
		echo "Selamat datang, $name!";
	}

	salam("Arkademian");
	echo "<br>";
	salam();

	function pangkatDua($number){
		return $number * $number;
	}

	echo "<br>";

	echo "Hasil dari pangkat 10 adalah : " .pangkatDua(10);

	echo "<br>";

	echo pow(10,3);
 ?>