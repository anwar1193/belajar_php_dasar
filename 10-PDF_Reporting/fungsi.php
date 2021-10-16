<?php  

	$koneksi = mysqli_connect('localhost', 'root', '', 'dbs_query') or die (mysqli_error($koneksi));

	function tampil_barang($query){
		global $koneksi; // wajib di jadikan global supaya $koneksi bisa terbaca di dalam function
		$result = mysqli_query($koneksi, $query) or die ('error fungsi');
		$rows = [];

		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}

		return $rows;
	}


	function tambah_barang($data){
		global $koneksi;

		// htmlspecialchars : supaya gak bisa di masukin sintaks html/css
		// mysqli_real_escape_string : supaya bisa masukin tanda kutip 1 (gak error) , format : mysqli_real_escape_string($koneksi, $data)

		$kode_barang = mysqli_real_escape_string($koneksi, htmlspecialchars($data['kode_barang']));
		$nama_barang = mysqli_real_escape_string($koneksi, htmlspecialchars($data['nama_barang']));
		$stok = mysqli_real_escape_string($koneksi, htmlspecialchars($data['stok']));

		// Upload Gambar
		$gambar = upload();
		if(!$gambar){
			return false;
		}

		$query = "INSERT INTO tbl_barang(kode_barang, nama_barang, stok, gambar)
					VALUES('$kode_barang', '$nama_barang', '$stok', '$gambar')";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi); //mysqli_affected_rows, jika query berhasil bernilai 1, kalo gagal bernilai -1
	}


	function upload(){
		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name']; //tmp_name adalah tempat penyimpanan gambar sementara

		// Cek apakah tidak ada gambar yang diupload
		if($error === 4){ // 4 adalah kode jika tidak ada gambar yang diupload
			echo "<script>
				alert('Pilih Gambar Terlebih Dahulu !');
			</script>";
			return false;
		}


		// Cek apakah yang di upload adalah gambar
		$ekstensiGambarvalid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile); // delimiter yang di masukkan adalah titik, jadi jika ada file namanya gambar.jpg, maka namanya dipecah menjadi ["gambar" , "jpg"] berbentuk array
		$ekstensiGambar = strtolower(end($ekstensiGambar)); // end maksudnya mengambil kata terakhir (ekstensi), yaitu jpg dari ["gambar",  "jpg"] , sedangkan strtolower supaya memastikan semua ekstensi dalam huruf kecil

		if(!in_array($ekstensiGambar, $ekstensiGambarvalid)){ //in_array adalah fungsi yang mengecek apakah parameter pertama nilainya ada/termasuk di dalam daftar array parameter kedua ($ekstensiGambarValid)
			echo "<script>
				alert('Yang Anda Upload Bukan Gambar');
			</script>";
			return false;
		}


		// Cek apakah ukurannya terlalu besar
		if($ukuranFile > 1000000){ // angka dalam byte, jadi 1000000 byte = 1000 kb = 1 mb
			echo "<script>
				alert('Ukuran Gambar Terlalu Besar');
			</script>";
			return false;
		}


		// Lolos pengecekan, gambar siap di upload
		// generate nama gambar baru
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;


		move_uploaded_file($tmpName, 'img/'.$namaFileBaru); // $tmpName = lokasi lama (penyimpanan sementara)

		return $namaFileBaru;

	}


	function hapus_barang($id){
		global $koneksi;
		$query = "DELETE FROM tbl_barang WHERE id=$id";
		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

	function update_barang($data){
		global $koneksi;
		$id = $data['id'];
		$kode_barang = htmlspecialchars($data['kode_barang']);
		$nama_barang = htmlspecialchars($data['nama_barang']);
		$stok = htmlspecialchars($data['stok']);
		$gambar_lama = htmlspecialchars($data['gambar_lama']);

		// cek apakah user pilih gambar baru 
		if($_FILES['gambar']['error'] === 4){ // 4 adalah kode tidak ada file di upload
			$gambar = $gambar_lama;
		}else{
			$gambar = upload();
		}

		$query = "UPDATE tbl_barang SET kode_barang='$kode_barang', nama_barang='$nama_barang', stok='$stok', gambar='$gambar'
						WHERE id=$id";
		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

	function cari($keyword){
		global $koneksi;
		$query = "SELECT * FROM tbl_barang WHERE 
				kode_barang LIKE '%$keyword%' OR
				nama_barang LIKE '%$keyword%'
			";
		$result = mysqli_query($koneksi, $query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}


	function register($data){
		global $koneksi;

		// strtolower : memaksa semua yang diinput jadi huruf kecil
		// stripslashes : menghilangkan backslash jika diinput oleh user
		// mysqli_real_escape_string : supaya bisa masukin tanda kutip 1 (gak error) , format : mysqli_real_escape_string($koneksi, $data)

		$username = strtolower(stripslashes($data['username']));
		$password = mysqli_real_escape_string($koneksi, $data['password']);
		$password2 = mysqli_real_escape_string($koneksi, $data['password2']);

		// Cek Apakah username sudah ada sebelumnya
		$result = mysqli_query($koneksi, "SELECT username FROM tbl_user WHERE username='$username'");
		$cek = mysqli_num_rows($result);
		if($cek>0){
			echo "<script>
				alert('Username Sudah Terdaftar');
			</script>";
			return false;
		}


		// Cek Apakah Password & Konfirmasi Password Tidak Sama  
		if($password !== $password2){
			echo "<script>
				alert('Konfirmasi password tidak sesuai');
			</script>";
			return false;
		}

		// Enkripsi Password (pake password_hash, jangan lagi pake md5 karena mudah di search di google)
		$password = password_hash($password, PASSWORD_DEFAULT);


		// semua cek/validasi lolos, tambahkan ke database
		$query = "INSERT INTO tbl_user VALUES('', '$username', '$password')";
		mysqli_query($koneksi, $query);

		// Kembalikan nilai 1 (berhasil)
		return mysqli_affected_rows($koneksi);

	}

?>