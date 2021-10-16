<?php

require 'fungsi.php';
require_once __DIR__ . '/vendor/autoload.php';

$data_barang = tampil_barang("SELECT * FROM tbl_barang");

$mpdf = new \Mpdf\Mpdf();

$html = '
	<h2>Data Barang (CRUD Gaya WPU)</h2>
	<table border="1" cellpadding="10" cellspacing="0" style="margin-top: 10px" width="100%">
			<tr>
				<th>NO</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Stok</th>
				<th>Gambar</th>
			</tr>
	';

$no=1;
foreach($data_barang as $row_barang){

	$html .= '
			<tr>
				<td>'. $no++ .'</td>
				<td>'. $row_barang['kode_barang'] .'</td>
				<td>'. $row_barang['nama_barang'] .'</td>
				<td>'. $row_barang['stok'] .'</td>
				<td> <img src = "img/'. $row_barang['gambar'] .'" width="100px"></td>

			</tr>
			';

}

$html .= '</table>';



$mpdf->WriteHTML($html);

$mpdf->Output("laporan_barang.pdf", "D"); // "D" Untuk langsung download, "I" Untuk Preview Dulu

?>