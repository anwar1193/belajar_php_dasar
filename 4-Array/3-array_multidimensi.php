<?php  

	// Contoh Array Multi Dimensi (Versi Array Numerik)
	$mahasiswa = [
			["Munawar Ahmad", "1201065", "Sistem Informasi", "Pal X"],
			["Azwar Anas", "1201112", "Sistem Informasi", "Telanaipura"],
			["Muhamad Husein", "1201113", "Sistem Informasi", "Tangkit"]
	];

	// Contoh Array Multidimensi (Versi Array Associative)
	$film = [
		["judul"=>"Para Pencari Tuhan", "producer"=>"Shinta Purnama", "channel"=>"SCTV", "gambar"=>"shinta.jpg" ],
		["judul"=>"Rumah Bidadari", "producer"=>"Munawar Ahmad", "channel"=>"SCTV", "gambar"=>"anwar.jpg" ]
	];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Array Multidimensi</title>
</head>
<body>

	<h2>Data Mahasiswa (Cara Menampilkan array numerik)</h2>

	<?php foreach($mahasiswa as $mhs) : ?>
		<ul>
			<li><?php echo $mhs[0] ?></li>
			<li><?php echo $mhs[1] ?></li>
			<li><?php echo $mhs[2] ?></li>
			<li><?php echo $mhs[3] ?></li>
		</ul>
	<?php endforeach; ?>


	<h2>Data Film (Cara menampilkan array associative)</h2>

	<?php foreach($film as $f) : ?>
		<ul>
			<li>Judul : <?= $f['judul'] ?></li>
			<li>Producer : <?= $f['producer'] ?></li>
			<li>Channel : <?= $f['channel'] ?></li>
			<li>Gambar : <img src="<?= $f['gambar'] ?>" width="100px"> </li>
		</ul>
	<?php endforeach; ?>

</body>
</html>