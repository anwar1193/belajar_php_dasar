<style type="text/css">
	.warna_ganjil{
		background-color: silver;
	}
</style>

<?php  

	$x = 20;

	if($x < 10){
		echo 'Benar';
	}elseif($x == 20){
		echo 'Binggo';
	}else{
		echo 'Salah';
	}

?>


<h2>Membuat Table Dengan Pengkondisian</h2>

<table border="1" cellpadding="10" cellspacing="0">
	<?php for($c=1 ; $c<=5 ; $c++) : ?>

		<?php if($c % 2 == 1){ //jika baris ganjil ?>
		<tr class="warna_ganjil">
		<?php }else{ ?>
		<tr>
		<?php } ?>
			<?php for($d=1 ; $d<=5 ; $d++) : ?>
			<td><?php echo "$c , $d"; ?></td>
			<?php endfor; ?>
		</tr>

	<?php endfor; ?>
</table>