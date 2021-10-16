<?php  

	// Hapus Session
	session_start();
	session_unset();
	session_destroy();

	// Hapus Cookie
	setcookie('id', '', time()-3600);
	setcookie('username', '', time()-3600);

	header('location:login.php');
	exit;
?>