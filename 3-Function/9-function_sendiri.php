<?php  

	function salam($waktu="datang",$nama="admin"){
		return "Selamat $waktu, $nama";
	}

?>

<h1><?php echo salam("Pagi", "Munawar"); ?></h1>