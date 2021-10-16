<?php  

	function rupiah($nominal){
		$result = "Rp ".number_format($nominal,0,',','.'); // number_format($variable, angka belakang koma, 'koma', 'titik');
		return $result;
	}

	echo rupiah(2500000);

?>