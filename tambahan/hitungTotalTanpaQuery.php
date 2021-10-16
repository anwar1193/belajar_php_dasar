<?php  
    $koneksi = mysqli_connect('localhost', 'root', '', 'dbs_query');
    $query = "SELECT nama_bank, jumlah_setun FROM tbl_setun_bank";
?>

<table border="1" cellpadding="5px" cellspacing="0" style="margin-bottom: 10px;">
    <tr>
        <th>NO</th>
        <th>Setun Bank</th>
        <th>Jumlah</th>
    </tr>

    <?php  
        $no=0;
        $jumlahTotal = 0;
        $jumlahBCA = 0;
        $jumlahBRI = 0;
        $jumlahBNI = 0;

        $result = mysqli_query($koneksi, $query) or die ('error ambil data');
        while($row = mysqli_fetch_array($result)){
            $no++;

            // Cari Total Keseluruhan
            $jumlahTotal += $row['jumlah_setun'];

            // Cari Total BCA
            $nama_bank0 = $row['nama_bank'];
            $explode_bank = explode(' ',$nama_bank0);
            $nama_bank = $explode_bank[0];

            if($nama_bank == 'BCA'){
                $jumlahBCA += $row['jumlah_setun'];
            }elseif($nama_bank == 'BRI'){
                $jumlahBRI += $row['jumlah_setun'];
            }elseif($nama_bank == 'BNI'){
                $jumlahBNI += $row['jumlah_setun'];
            }


    ?>

    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $row['nama_bank'] ?></td>
        <td><?php echo $row['jumlah_setun'] ?></td>
    </tr>

    <?php } ?>
</table>

Jumlah Total : <?php echo $jumlahTotal; ?> <br>

Jumlah BCA : <?php echo $jumlahBCA; ?> <br>

Jumlah BRI : <?php echo $jumlahBRI; ?> <br>

Jumlah BNI : <?php echo $jumlahBNI; ?> <br>