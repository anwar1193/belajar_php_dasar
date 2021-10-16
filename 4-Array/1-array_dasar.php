<?php  
	// Array adalah Variable yang bisa menampung banyak nilai
	// Elemen pada array boleh memiliki tipe data yang berbeda
	// Ada 2 Gaya Penulisan Array, Cara Lama & Cara Baru

	// Contoh Cara Lama
	$hari = array("Senin", "Selasa", "Rabu", "Kamis");

	// Contoh Cara Baru
	$bulan = ["Januari", "Februari", "Maret", "April"];

	// Contoh Array Dengan Tipe Data Berbeda
	$arr1 = ["Ayam", 100, "Goreng"];

	// Pemanggilan Array Dengan var_dump() :
	echo "Hasil Pemanggilan Array dengan var_dump() : <br>";
	var_dump($hari);

	echo "<br><br>";

	// Pemanggilan Array Dengan print_r() :
	echo "Hasil Pemanggilan Array Dengan print_r() : <br>";
	print_r($bulan);

	echo "<br><br>";

	// Pemanggilan Salah Satu Nilai Array :
	echo "Contoh Pemanggilan Salah Satu Nilai Array : <br>";
	echo $hari[1]."<br>";
	echo $arr1[2]."<br>";

	echo "<br><br>";


	// Menambahkan Elemen Pada array
	echo "Array Sebelumnya : <br>";
	$arr_menu = ["Bakso" , "Sate" , "Mie Ayam"];
	var_dump($arr_menu);

	echo "<br><br>";

	$arr_menu[] = "Nasi Goreng"; //menambahkan array di paling belakang
	echo "Array Setelah Di Tambah : <br>";
	var_dump($arr_menu);

?>