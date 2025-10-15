<?php
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");
// echo " Andy is " . $height[Andy]. " cm tall";

// tambah 5 data baru
$height["David"] = "180";
$height["Edward"] = "168";
$height["Frank"]  = "175";
$height["George"] = "172";
$height["Henry"]  = "169";

// var_dump($height);

// hapus data
unset($height["Charlie"]);

// ambil kunci terakhir
$keys = array_keys($height);
$lastKey = end($keys);

echo "Nilai dengan indeks (key) terakhir adalah: " . $height[$lastKey] . " cm (key: $lastKey)";
?>

