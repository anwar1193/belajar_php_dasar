<?php  

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username=='admin' && $password=='admin'){
			header('Location:halaman_admin.php');
			exit;
		}else{
			$error = true;
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<h2>HALAMAN LOGIN</h2>

<?php if(isset($error)) : ?>
	<p style="color: red; text-align: italic">Kombinasi Username dan Password Salah !</p>
<?php endif; ?>

<form method="post" action="">

	<ul>
		<li>
			<label for="username">Masukan Username :</label>
			<input type="text" name="username" id="username">
		</li>

		<li>
			<label for="password">Masukan Password :</label>
			<input type="password" name="password" id="password">
		</li>
	</ul>

	<button type="submit" name="submit">LOGIN</button>

</form>

</body>
</html>