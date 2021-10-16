<?php  

	session_start();
	if(!isset($_SESSION['login'])){
		header('location:login.php');
		exit;
	}

	require 'fungsi.php';

	if(isset($_POST['submit'])){
		if(tambah_barang($_POST) > 0){
			echo '<script>
				alert("Data Barang Tersimpan");
				document.location.href = "index.php";
			</script>';
		}else{
			echo '<script>
				alert("Data Barang Gagal Disimpan");
				document.location.href = "index.php";
			</script>';
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>

	<h2>Form Tambah Data</h2>

	<form method="post" action="" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="kode_barang">Kode Barang : </label>
				<input type="text" name="kode_barang" id="kode_barang" required>
			</li>

			<li>
				<label for="nama_barang">Nama Barang : </label>
				<input type="text" name="nama_barang" id="nama_barang" required>
			</li>

			<li>
				<label for="stok">Stok Barang : </label>
				<input type="text" name="stok" id="stok" required>
			</li>

			<li>
				<label for="gambar">Gambar : </label>
				<input type="file" name="gambar" id="gambar">
			</li>
		</ul>

		<button type="submit" name="submit">Simpan Data</button>
	</form>

</body>
</html>