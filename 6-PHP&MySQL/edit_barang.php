<?php  

	session_start();
	if(!isset($_SESSION['login'])){
		header('location:login.php');
		exit;
	}

	require 'fungsi.php';

	if(isset($_POST['submit'])){
		if(update_barang($_POST) > 0){
			echo '<script>
				alert("Data Barang Berhasil Diupdate");
				document.location.href = "index.php";
			</script>';
		}else{
			echo '<script>
				alert("Data Barang Gagal Diupdate");
				document.location.href = "index.php";
			</script>';
		}
	}

	// tampilkan untuk isian form
	$id = $_GET['id'];
	$data_barang = tampil_barang("SELECT * FROM tbl_barang WHERE id=$id")[0];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>

	<h2>Form Update Data</h2>

	<form method="post" action="" enctype="multipart/form-data">
		<ul>

			<input type="hidden" name="id" value="<?php echo $data_barang['id'] ?>">
			<input type="hidden" name="gambar_lama" value="<?php echo $data_barang['gambar'] ?>">

			<li>
				<label for="kode_barang">Kode Barang : </label>
				<input type="text" name="kode_barang" id="kode_barang" required value="<?php echo $data_barang['kode_barang'] ?>">
			</li>

			<li>
				<label for="nama_barang">Nama Barang : </label>
				<input type="text" name="nama_barang" id="nama_barang" required value="<?php echo $data_barang['nama_barang'] ?>">
			</li>

			<li>
				<label for="stok">Stok Barang : </label>
				<input type="text" name="stok" id="stok" required value="<?php echo $data_barang['stok'] ?>">
			</li>

			<li>
				<label for="gambar">Gambar : </label><br>
				<img src="img/<?= $data_barang['gambar'] ?>" width="50"><br>
				<input type="file" name="gambar" id="gambar">
			</li>
		</ul>

		<button type="submit" name="submit">Update Data</button>
	</form>

</body>
</html>