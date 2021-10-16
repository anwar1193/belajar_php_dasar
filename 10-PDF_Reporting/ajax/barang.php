<?php  

	usleep(500000); //supaya load nya agak lama sehingga loader tampil 500000 = 0.5 detik

	require '../fungsi.php';

	$keyword = $_GET['keyword'];
	$query = "SELECT * FROM tbl_barang WHERE 
				kode_barang LIKE '%$keyword%' OR
				nama_barang LIKE '%$keyword%'
			";
	$data_barang = tampil_barang($query);
	

?>

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