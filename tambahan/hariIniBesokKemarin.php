<?php

$hari_ini = date("d-m-Y");

$tambah_1 = mktime(0,0,0,date("n"),date("j")+1, date("Y"));
$besok = date("d-m-Y", $tambah_1);

$kurang_1 = mktime(0,0,0,date("n"),date("j")-1, date("Y"));
$kemarin = date("d-m-Y", $kurang_1);


echo "Hari Ini : $hari_ini ";
echo "<br />";

echo "Besok : $besok ";
echo "<br />";

echo "Kemarin : $kemarin ";
echo "<br />";

?>