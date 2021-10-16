<?php  

	$koneksi = mysqli_connect('localhost', 'root', '', 'dbs_query');

	function tampil_data($query){
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$rows = [];

		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}

		return $rows;
	}

?>