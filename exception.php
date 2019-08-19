<?php 

	$uang_budi = 5000;


	$uang_makan = 500;
	$ongkos_pulang = 4000;

	

	try {
			if($uang_makan + $ongkos_pulang > $uang_budi){
		throw new Exception("Uang Budi kurang!");		
		} else {
			$uang_budi -= $uang_makan;
			// $uang_budi = $uang_budi - $uang_makan;
		}
		echo "Budi sudah makan siang";
	} catch (Exception $a){
		echo $a->getMessage();
	} finally {
		$uang_budi -= $ongkos_pulang;
	}

	echo "Budi sudah sampai di rumah dengan sisa uang : $uang_budi";

 ?>