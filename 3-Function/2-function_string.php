<?php 
	// Kumpulan Function string pada php

	$nama = "Munawar Ahmad";

	echo "String Sample : ".$nama;
	echo "<br><br>";

	// 1. strlen() : menghitung jumlah karakter
	echo "Jumlah Karakter dari 'Munawar Ahmad' adalah : ".strlen($nama);  
	echo "<br><br>";

	// 2. str_word_count() : menghitung jumlah kata
	echo "Jumlah kata pada 'Munawar Ahmad' adalah : ".str_word_count($nama);
	echo "<br><br>";

	// 3. strrev() : membalik karakter
	echo "Kebalikan dari 'Munawar Ahmad' adalah : ".strrev($nama);
	echo "<br><br>";

	// 4. strpos() : mencari karakter/kata yang dimaksud mulai dari nomor berapa
	echo "Kata 'Ahmad' dari 'Munawar Ahmad' Dimulai dari karakter ke : ".strpos($nama, "Ahmad");
	echo "<br><br>";

	// 5. str_replace() : mengubah/mengganti string sebagian
	echo "Ganti Kata 'Munawar' menjadi 'Muneeb' pada Kata 'Munawar Ahmad', hasilnya menjadi : ".str_replace("Munawar", "Muneeb", $nama);
	echo "<br><br>";

	// 6. addcslashes() : menambahkan backslash di depan(sebelum) karakter/huruf yang di seleksi
	echo "Pada 'Munawar Ahmad', jika setiap huruf 'a' nya di beri backslash, menjadi : ".addcslashes($nama, "a");
	echo "<br><br>";

	// 7. addslashes() : menambahkan backslash di depan & belakang kata/karakter yang diberi kutip dua ("")
	echo 'Pada Kalimat Aku Cinta Kamu, tambahkan backslash di kata Cinta, hasilnya : '.addslashes('Aku "Cinta" Kamu');
	echo "<br><br>";

	// 8. explode() : untuk memecah string
	$file = "namaFile.jpg";
	$pecahkan = explode('.', $file);
	$nama_file = $pecahkan[0];
	$extensi_file = end($pecahkan); //bisa juga $pecahkan[1];
	echo "Pada namaFile.jpg , dipecah menjadi ".$nama_file." dan ".$extensi_file;

	echo "<br><br>";

	// 9. strtolower() : membuat huruf jadi kecil semua
	echo "Nama $nama, jika hurufnya kecil semua menjadi : ".strtolower($nama);
	echo "<br><br>";

	// 10. strtoupper() : membuat huruf jadi besar semua
	echo "Nama $nama, jika hurufnya besar semua menjadi : ".strtoupper($nama);
	echo "<br><br>";

	// 11. round() : membuat pembulatan netral (jika 0.5-0.9 maka akan dibulatkan ke atas, jika 0.4 ke bawah akan dibulatkan ke bawah)
	echo "Nilai 1.5 jika dibulatkan netral menjadi : ".round(1.5)." sedangkan 1.4 menjadi : ".round(1.4);
	echo "<br><br>";

	// 12. ceil() : membuat pembulatan ke atas
	echo "Nilai 3.2 jika dibulatkan ke atas menjadi : ".ceil(3.2);
	echo "<br><br>";

	// 13. floor() : membuat pembulatan ke bawah
	echo "Nilai 4.9 jika dibulatkan ke bawah menjadi : ".floor(4.9);
	
?>