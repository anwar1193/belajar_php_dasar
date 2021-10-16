// Ambil elemen2 yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function(){
	
	// buat object ajax
	var xhr = new XMLHttpRequest();

	// cek kesiapan ajax
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){ // angka 4 & 200 berarti sumber oke
			container.innerHTML = xhr.responseText;
		}
	}

	// ekseskusi ajax
	xhr.open('GET', 'ajax/barang.php?keyword=' + keyword.value, true);
	xhr.send();

});