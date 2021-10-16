<?php  
	$arr_angka = [34,27,31,89,90,25];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan array</title>
	<style type="text/css">
		.kotak{
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			float: left;
			margin: 3px;
		}

		.clear{
			clear: both;
		}
	</style>
</head>
<body>

	<!-- Menampilkan array dengan for -->
	<?php for($i=0 ; $i<count($arr_angka) ; $i++){ ?>
	<div class="kotak"><?php echo $arr_angka[$i] ?></div>
	<?php } ?>

	<div class="clear"></div>

	<!-- Menampilkan array dengan foreach -->
	<?php foreach($arr_angka as $ang){ ?>
	<div class="kotak"><?php echo $ang ?></div>
	<?php } ?>

	<div class="clear"></div>

	<!-- Menampilkan array dengan foreach + gaya templating -->
	<?php foreach($arr_angka as $ang) : ?>
	<div class="kotak"><?= $ang ?></div>
	<?php endforeach; ?>


</body>
</html>

