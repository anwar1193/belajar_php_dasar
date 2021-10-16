<?php  

	require_once 'vendor/autoload.php';

	// use the factory to create a Faker\Generator instance
	$faker = Faker\Factory::create('id_ID');

?>

<h2>Data Penduduk (Dummy)</h2>

<?php for($i=0 ; $i<100 ; $i++) : ?>
<ul>
	<li>NIK : <?= $faker->nik() ?></li>
	<li>Nama : <?= $faker->name() ?></li>
	<li>Alamat : <?= $faker->address() ?></li>
	<li>Email : <?= $faker->email() ?></li>
</ul>
<?php endfor; ?>