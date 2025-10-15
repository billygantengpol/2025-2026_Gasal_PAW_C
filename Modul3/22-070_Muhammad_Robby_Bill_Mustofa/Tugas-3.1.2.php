<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// tambahkan 5 data baru
$fruits[] = "Durian";
$fruits[] = "Elderberry";
$fruits[] = "Buapakmu";
$fruits[] = "Grapes";
$fruits[] = "Mango";

// hapus data "Cherry"
unset($fruits[2]);

// tampilkan nilai dengan indeks tertinggi
$keys = array_keys($fruits);
$last_index = end($keys);

echo "Buah dengan indeks tertinggi adalah: " . $fruits[$last_index] . "<br>";
echo "Indeks tertingginya adalah: " . $last_index;
?>
