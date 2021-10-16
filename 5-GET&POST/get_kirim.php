<!DOCTYPE html>
<html>
<head>
	<title>Latihan GET</title>
</head>
<body>

<?php  

	$film = [
		["judul"=>"Para Pencari Tuhan", "producer"=>"Shinta Purnama", "gambar"=>"shinta.jpg"],
		["judul"=>"Rumah Bidadari", "producer"=>"Munawar Ahmad", "gambar"=>"anwar.jpg"]
	];

?>

<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>NO</th>
		<th>Judul Film</th>
		<th>Action</th>
	</tr>

	<?php 
		$no=1;
		foreach($film as $f) : 
	?>

	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $f['judul'] ?></td>
		<td>
			<a href="get_terima.php?judul=<?php echo $f['judul'] ?>&producer=<?php echo $f['producer'] ?>&gambar=<?php echo $f['gambar'] ?>">Lihat Detail</a>
		</td>
	</tr>

	<?php endforeach; ?>

</table>

</body>
</html>