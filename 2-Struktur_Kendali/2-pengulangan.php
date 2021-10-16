<?php  

	// Materi Pengulangan antara lain : for, while, do.. while, foreach (pengulangan khusus array)

	// For

	// Format : for(nilai awal / inisiasi ; kondisi terminasi/saat berhenti/berapa kali mau diulang ; maju(++)/mundur(--))

	// Contoh : Menampilkan Hello World 10x menggunakan for
	for($i=0 ; $i<10 ; $i++){
		echo "Hello World Ke $i (Contoh For) <br>";
	}

	echo "<br><br>";


	// While

	$x = 0;
	while($x < 5){
		echo "Hello World ke $x (Contoh While) <br>";
		$x++;
	}

	echo "<br><br>";

	
	// Do While
	$z = 0;
	do{
		echo "Ini Contoh Do While ke $z <br>";
		$z++;
	}while($z < 5);


	echo "<br><br>";


	// Apa Perbedaan while dan do while?
	// while, jika kondisi nya bernilai false, maka perintah tidak dijalankan/tidak tampil, sedangkan
	// do while, jika kondisinya bernilai false, maka perintah akan di jalankan sekali


	// Contoh while bernilai false (tidak akan tampil apa2)
	$a = 10;
	while($a < 5){
		echo "Contoh while bernilai false";
		$a++;
	}


	// Contoh do while bernilai false (akan dieksekusi sekali)
	$b = 10;
	do{
		echo "Contoh do while bernilai false";
		$b++;
	}while($b < 5);

?>


<h2>Membuat Table Dengan Perulangan</h2>

<table border="1" cellpadding="10" cellspacing="0">
	<?php for($c=1 ; $c<=3 ; $c++) : ?>

	<tr>
		<?php for($d=1 ; $d<=5 ; $d++) : ?>
		<td><?php echo "$c , $d"; ?></td>
		<?php endfor; ?>
	</tr>

	<?php endfor; ?>
</table>