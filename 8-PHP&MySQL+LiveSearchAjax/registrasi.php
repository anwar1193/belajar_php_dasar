<?php  

	session_start();
	if(!isset($_SESSION['login'])){
		header('location:login.php');
		exit;
	}

	require 'fungsi.php';

	if(isset($_POST['register'])){
		if(register($_POST) > 0){
			echo "<script>
				alert('Pendaftaran Berhasil !');
			</script>";
		}else{
			echo mysqli_error($koneksi);
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>

<h2>Pendaftaran User</h2>

<form method="post" action="">

	<ul>
		<li>
			<label for="username">Username : </label>
			<input type="text" name="username" id="username" required autocomplete="off" size="40">
		</li>

		<li>
			<label for="password">Password : </label>
			<input type="password" name="password" id="password" required autocomplete="off" size="40">
		</li>

		<li>
			<label for="password2">Konfirmasi Password : </label>
			<input type="password" name="password2" id="password2" required autocomplete="off" size="40">
		</li>

		<li>
			<button type="submit" name="register">Register</button>
		</li>
	</ul>

</form>

</body>
</html>