<?php  
	
	session_start();
	if(!isset($_SESSION['login'])){
		header('location:login.php');
		exit;
	}
	
	require 'fungsi.php';
	$id = $_GET['id'];

	if(hapus_barang($id) > 0){
		echo '<script>
			alert("Data Barang Berhasil Dihapus");
			document.location.href = "index.php";
		</script>';
	}else{
		echo '<script>
			alert("Data Barang Gagal Dihapus");
			document.location.href = "index.php";
		</script>';
	}

?>