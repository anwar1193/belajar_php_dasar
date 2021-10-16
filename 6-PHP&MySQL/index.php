<?php  

	session_start();
	require 'fungsi.php';

	if(!isset($_SESSION['login'])){
		header('location:login.php');
		exit;
	}

	// Konfigurasi Pagination

	// step 1 : tentukan berapa data per halaman yang ingin di tampilkan
	$jumlahDataPerHalaman = 2;

	// step 2 : tentukan ada berapa jumlah halaman (total data / data per halaman)
	// cari total data
	$jumlahData = count(tampil_barang("SELECT * FROM tbl_barang"));
	$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman); //ceil untuk pembulatan ke atas, misal hasil pembagian 1,2 berarti jumlah halaman = 2

	// step 3 : menentukan halaman ke berapa yang sedang aktif
	$halamanAktif = (isset($_GET['halaman']) ? $_GET['halaman'] : 1); // jika ada GET['halaman'] yang dikirim, maka halaman terisi dengan halaman terpilih, kalo kosong default halaman 1

	// step 4 : tentukan awal data
	$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

	// step 5 : tambahkan LIMIT pada query nya
	$data_barang = tampil_barang("SELECT * FROM tbl_barang LIMIT $awalData, $jumlahDataPerHalaman");

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
		<input type="text" placeholder="Masukan Keyword Pencarian" name="keyword" size="40" autocomplete="off">
		<button type="submit" name="cari">Cari data</button>
	</form>

	<!-- Navigasi Pagination -->

	<!-- Panah Prev -->
	<?php if($halamanAktif > 1) : ?>
		<a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
	<?php endif; ?>

	<?php for($i=1 ; $i<=$jumlahHalaman ; $i++) : ?>
		<?php if($i == $halamanAktif) : ?>
			<a href="?halaman=<?= $i ?>" style="font-weight: bold; color: red"><?= $i ?></a>
		<?php else : ?>
			<a href="?halaman=<?= $i ?>"><?= $i ?></a>
		<?php endif; ?>
	<?php endfor; ?>

	<!-- Panah Next -->
	<?php if($halamanAktif < $jumlahHalaman) : ?>
		<a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
	<?php endif; ?>

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

	
	

</body>
</html>