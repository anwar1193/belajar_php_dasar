<?php  

	session_start();
	require 'fungsi.php';

	// Cek Cookie
	if(isset($_COOKIE['id']) && isset($_COOKIE['username'])){
		$id = $_COOKIE['id'];
		$user_cookie = $_COOKIE['username'];

		// Ambil Username berdasarkan id
		$res = mysqli_query($koneksi, "SELECT username FROM tbl_user WHERE id=$id");
		$row = mysqli_fetch_assoc($res);
		$user_db = $row['username'];

		// Cocokan Cookie Username Dengan Data Username
		if($user_cookie === hash('sha256', $user_db)){
			// Jika kedua data username sama, maka buat session untuk otomatis login
			$_SESSION['login'] = true;
		}
	}

	// Cek Session
	if(isset($_SESSION['login'])){
		header('location:index.php');
		exit;
	}
	

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM tbl_user WHERE username='$username'";
		$result = mysqli_query($koneksi, $query);

		$cek = mysqli_num_rows($result);

		if($cek>0){
			$data = mysqli_fetch_assoc($result);

			// password verify kebelikan dari password hash
			if(password_verify($password, $data['password'])){ //jika password yang diinput dan yang di database sama
				$_SESSION['login'] = true; //buat session baru (nilai tidak harus true, boleh juga string atau data)

				// cek jika remember me di tekan
				if(isset($_POST['remember'])){
					// buat cookie  (2 cookie biar lebih aman)
					setcookie('id', $data['id'], time()+60*1); //waktu cookie 1 menit

					//supaya aman, cookie username di encrypt dengan fungsi hash()
					setcookie('username', hash('sha256', $data['username']), time()+60*1); 
				}

				header('location:index.php');
				exit;
			}else{
				$salah_password = true;
			}
		}else{
			$salah_username = true;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>

	<h2>Halaman Login</h2>

	<?php if(isset($salah_password)){ ?>
		<p style="color: red; font-style: italic;">Password yang Anda Masukkan Salah !</p>
	<?php } ?>

	<?php if(isset($salah_username)){ ?>
		<p style="color: red; font-style: italic;">Username yang Anda Masukkan Salah !</p>
	<?php } ?>

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
				<input type="checkbox" name="remember" id="remember">
				<label for="remember">Remember Me : </label>
			</li>

			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>
	</form>

</body>
</html>