<!DOCTYPE html>
<html>
<head>
	<title>contoh</title>
</head>
<body>

<?php  

	function tambah(){
		$hewan = ["Anjing", "Sapi", "Gajah"];
		foreach($hewan as $binatang){
			echo $binatang;
		}
		return $binatang;
	}

	tambah();

?>

</body>
</html>