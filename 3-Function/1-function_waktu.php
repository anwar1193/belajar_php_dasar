<?php  

	// 1. Function Date
	// Untuk menampilkan tanggal dengan format tertentu

	// C ontoh :
	echo "1. Function Date, contoh : menampilkan hari dan tanggal <br>";
	echo date("l, d-M-Y"); // ini contoh pakai 4 paramter (l , d , M , Y), di function date minimal pakai 1 parameter

	echo "<br><br>";


	// ..............................................................................

	// 2. Function Time
	// time() / secara default menampilkan UNIX Timestamp / EPOCH Time
	// EPOCH Time yaitu waktu/detik yang sudah berlalu sejak 01-01-1970 (waktu yang disepakati bersama sebagai waktu pertama di dunia komputer)

	// Contoh :

	echo "2a. tampilan time() secara default : ".time();

	echo "<br>";

	echo "2b. tampilkan hari ini, dengan bantuan time() : ".date('l', time());

	echo "<br>";

	echo "2c. tampilkan 3 hari ke depan dari hari ini, hari dan tanggal berapa : ".date('l, d-m-Y', time() + 60*60*24*3);

	echo "<br>";

	echo "2d. tampilkan 20 hari yang lalu dari hari ini, hari dan tanggal berapa : ".date('l, d-m-Y', time() - 60*60*24*20);

	echo "<br>";

	$tanggal = '2022-04-01';

	echo "2e. tampilkan 2 hari setelah tanggal yang ada di variable, dimana variable tanggal = 2022-04-01, maka 2 hari setelahnya adalah tanggal ".date('Y-m-d', strtotime($tanggal) + 60*60*24*2);


	echo "<br><br>";

	// ...............................................................................

	// 3. Function mktime
	//  Membuat/Menentukan sendiri waktu yang kita inginkan menjadi epoch time
	// Ada 6 parameter -> mktime(0,0,0,0,0,0)
	// Yaitu : jam, menit, detik, bulan, tanggal, tahun

	// Contoh : Mencari Hari Lahir Shinta
	$waktu_epoch_shinta1 = mktime(0,0,0,7,14,1996);
	echo "3a. Mencari hari lahir Shinta, 14-07-1996 adalah hari ".date("l", $waktu_epoch_shinta1);

	echo "<br><br>";


	// Mencari Selisih Hari
	$hari1 = mktime(0,0,0,5,14,2021);
	$hari2 = mktime(0,0,0,5,19,2021);
	$selisih0 = $hari2-$hari1;
	$selisih = $selisih0 / (60*60*24);
	echo "14-05-2021 s/d 19-05-2021, Selisih Harinya : ".$selisih." Hari";
	echo "<br><br>";


	// ...............................................................................

	// 4. Function strtotime
	// Mengubah string yang kita masukkan menjadi epoch time

	// Contoh : Mencari Hari Lahir Muneeb
	$ttl_muneeb = "21 des 2018";
	echo "4a. Muneeb Lahir Pada Hari ".date("l", strtotime($ttl_muneeb));
?>