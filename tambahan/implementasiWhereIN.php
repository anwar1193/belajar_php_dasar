<?php
$data = "";

// ganti jadi ambil data excel/database
for ($i = 1; $i <= 20; $i++){

	$data .= $i."','";
}

// Dengan Menggunakan WHERE IN, maka untuk mendapatkan parameter WHERE tidak harus menggunakan looping, sehingga dipastikan proses tarik data lebih cepat
$sql = "SELECT * from cr where nopin in ('".substr($data,0,strlen($data)-3)."');";

echo $sql;

?>
