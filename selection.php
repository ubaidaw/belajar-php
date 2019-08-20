<?php 

	$nilai = 0;

	if($nilai > 60){
		echo "Anda sudah lulus";
	} 
	elseif($nilai == 0){
		echo "Anda tidak mengerjakan ujian";
	}
	else {
		echo "Anda tidak lulus, selamat belajar kembali";
	}

	echo "<br>";

	$warna_lampu = "merah";


	switch ($warna_lampu){
		case "merah" :
			//statement
			echo "Berhenti";
			break;
		case "kuning" :
			echo "Hati - hati";
			break;
		case "hijau" :
			echo "Jalan";
			break;
		default :
			echo "Lampu tidak jelas";
			break;
	}

 ?>