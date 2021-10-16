<?php  
	
	/* 
		Syarat Variable :
		1. Tidak boleh diawali dengan angka, tapi boleh mengandung angka
	*/

	// Contoh variable
	$nama = "Munawar Ahmad";

	/* 
		Penulisan Dengan kutip dua ("") sedikit lebih sakti dari kutip satu (''), karena dengan menggunakan kutip dua,
		kita bisa menggunakan konsep INTERPOLASI (yaitu untuk mengecek, apakah di dalam string itu terdapat variable atau tidak), jika ada string, isi dari string nya bisa ditampilkan
	*/

	// Contoh penulisan dengan kutip dua ("") :
	echo "Dengan Kutip Dua (Interpolasi) : Halo Nama Saya $nama";

	echo "<br>";

	// Contoh penulisan dengan kutip satu ('');
	echo 'Dengan Kutip Satu : Halo Nama Saya $nama';

	echo "<br><br>";



	// Operator Aritmatika (+ , - , * , / , %)
	echo "contoh Operator Aritmatika : <br>";

	$angka1 = 10;
	$angka2 = 20;
	echo $angka1 * $angka2;

	echo "<br><br>";



	// Operator Penggabung String / Concat ,Yaitu titik (.)
	echo "contoh Operator Penggabung String / Concat : <br>";

	$nama_depan = "Munawar";
	$nama_belakang = "Ahmad";
	echo $nama_depan." ".$nama_belakang;

	echo "<br><br>";



	// Operator Penugasan / Assignment : (= , +=, -=, *=, /=, %=, .=)
	echo "contoh Operator Penugasan/Assignment : <br>";

	$nilai1 = 10;
	$nilai1 += 5;
	echo $nilai1;

	echo "<br>";

	$nama_saya = "Munawar";
	$nama_saya .= " ";
	$nama_saya .= "Ahmad";
	echo $nama_saya; 

	echo "<br><br>";



	// Operator Perbandingan (> , < , >= , <= , == , !=)
	echo "contoh operator perbandingan : <br>";
	var_dump(5 > 3);

	echo "<br><br>";



	// Operator Identitas (=== , !==)
	echo "contoh operator identitas : <br>";
	var_dump(1 === "1"); //hasilnya akan false, karna integer dan string beda

	echo "<br><br>";



	// Operator Logika (&& , || , !)
	echo "contoh operator logika : <br>";
	$x = 10;
	var_dump($x > 5 && $x % 2 == 0);
	/*
		hasil diatas adalah true, karena ada dua kondisi yang nilainya benar,
		kondisi pertama, 10 memang lebih besar dari 5
		kondisi kedua, sisa pembagian 10/2 adalah 0 (10 habis dibagi 2)
	*/


?>