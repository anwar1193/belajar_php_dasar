<?php  
	// cek apakah nilai get tidak ada (untuk menghindari orang iseng menuliskan link secara langsung tanpa klik list)
	if(!isset($_GET['judul']) || !isset($_GET['producer']) || !isset($_GET['gambar'])){ //isset : apakah sudah pernah terbentuk/dipencet
		// redirect ke get_kirim
		header("Location:get_kirim.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>latihan GET</title>
</head>
<body>

	<h2>Detail Film</h2>

	<ul>
		<li>Judul Film : <?= $_GET['judul'] ?></li>
		<li>Producer : <?= $_GET['producer'] ?></li>
		<li>Gambar : <img src="<?= $_GET['gambar'] ?>" width="100px"></li>
	</ul>

	<a href="get_kirim.php">Kembali Ke List</a>

</body>
</html>