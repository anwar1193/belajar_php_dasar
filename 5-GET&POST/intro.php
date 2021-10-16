<?php  

	// Ada 3 Jenis Variable di php : variable local, global, super global

	$nama = "Munawar Ahmad"; //contoh variable local

	function tampil_nama(){
		global $nama; // dengan menuliskan global di depan variable, maka variable tersebut menjadi variable global
		echo $nama;
	}

	tampil_nama();

	echo "<br><br>";

	// variable Super Global ada 7, yaitu : $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
	// Ke-7 variable ini tipe datanya array associative, maka kita perlakukan sebagaimana array associative

	// Untuk melihat semua informasi data server
	// var_dump($_SERVER);
	// echo $_SERVER['SERVER_NAME'];

	var_dump($_GET);

?>

