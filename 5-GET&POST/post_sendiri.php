<!DOCTYPE html>
<html>
<head>
	<title>Belajar POST</title>
</head>
<body>

	<?php if(isset($_POST['submit'])) : ?>
		Selamat Datang, <?php echo $_POST['nama']; ?>
	<?php endif; ?>

	<form method="post" action="">
		Masukkan Nama :
		<input type="text" name="nama">
		<button type="submit" name="submit">Kirim</button>
	</form>

</body>
</html>
