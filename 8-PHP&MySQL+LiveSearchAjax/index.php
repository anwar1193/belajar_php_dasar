<?php  

	session_start();
	require 'fungsi.php';

	if(!isset($_SESSION['login'])){
		header('location:login.php');
		exit;
	}


	$data_barang = tampil_barang("SELECT * FROM tbl_barang");

	if(isset($_POST['cari'])){
		$data_barang = cari($_POST['keyword']);
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP - MySQLi</title>
</head>
<body>

<a href="logout.php">Logout</a>

<h2>Data Barang (CRUD Gaya WPU)</h2>

	<a href="tambah_data.php">Tambah Data</a><br><br>

	<form method="post" action="">
		<input type="text" placeholder="Masukan Keyword Pencarian" name="keyword" size="40" autocomplete="off" id="keyword">
		<button type="submit" name="cari" id="tombol-cari">Cari data</button>
	</form>

	<div id="container"> <!-- div ini sebagai tempat penampungan data yang disimpan di file ajax/barang.php -->

		<table border="1" cellpadding="10" cellspacing="0" style="margin-top: 10px">
			<tr>
				<th>NO</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Stok</th>
				<th>Gambar</th>
				<th>Action</th>
			</tr>

			<?php  
				$no = 1;
				foreach($data_barang as $row_barang) :
			?>

			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row_barang['kode_barang'] ?></td>
				<td><?php echo $row_barang['nama_barang'] ?></td>
				<td><?php echo $row_barang['stok'] ?></td>
				<td><img src="img/<?php echo $row_barang['gambar'] ?>" width="50px"></td>
				<td>
					<a href="edit_barang.php?id=<?php echo $row_barang['id'] ?>">Edit</a> |
					<a href="hapus_barang.php?id=<?php echo $row_barang['id'] ?>" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
				</td>
			</tr>

			<?php endforeach; ?>
		</table>

	</div>
	

<script src="myScript.js"></script>

</body>
</html>