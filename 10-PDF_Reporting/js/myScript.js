$(document).ready(function(){

	// hilangkan tombol cari
	$('#tombol-cari').hide();

	// event ketika keyword ditulis
	$('#keyword').on('keyup', function(){
		// munculkan icon loading
		$('.loader').show();

		// ajax menggunakan load
		// $('#container').load('ajax/barang.php?keyword=' + $('#keyword').val());

		// ajax menggunakan $.get()
		$.get('ajax/barang.php?keyword=' + $('#keyword').val(), function(data){
			$('#container').html(data);
			// hilangkan loader setelah data tampil
			$('.loader').hide();
		});
	});

});