<?php 

	$nama = null;

	if (isset($nama)){
		echo "isi variabel nama adalah : " . $nama;
	}else{
		echo "isset bernilai false";
	}

	echo "<br>";

	if(!empty($nama)){
		echo "isi variabel nama adalah : " . $nama;
	}else {
		echo "empty bernilai true";
	}

	echo "<br>";


	if(is_null($nama)){
		echo "variabel nama berisi null";
	}else {
		echo "Isi variabel nama adalah : ".$nama;
	}


	echo "<br>";

	$alamat = "Jal Raya Jalan Kemanggisan";

	if (TRUE == 1) {
		echo "benar<br>";
	}

	if (FALSE === 0) {
		echo "benar<br>";
	}else{
		echo "salah<br>";
	}


	//&& < AND
	//|| < OR

	if(strlen($alamat) < 5 || strpos($alamat,"Jalan") !== 0){
		echo "alamat tidak valid";
	}else{
		echo "alamat valid";
	}

	echo "<br>";

	$angka = 10;
	if(is_numeric($angka)){
		echo "Ini Angka";
	}else{
		echo "ini bukan angka";
	}


 ?>