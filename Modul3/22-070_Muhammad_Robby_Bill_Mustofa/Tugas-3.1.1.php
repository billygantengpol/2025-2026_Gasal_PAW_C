<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// tambahkan 5 data baru
$fruits[] = "Durian";
$fruits[] = "Elderberry";
$fruits[] = "Buapakmu";
$fruits[] = "Grapes";
$fruits[] = "Mango";

// tampilkan nilai dengan indeks tertinggi
echo "i like " . $fruits[0]. "," . $fruits[1] . " and " . $fruits[2] . "<br>";
echo "Buah dengan indeks tertinggi adalah: " . $fruits[count($fruits) - 1] . "<br>";
echo "Indeks tertingginya adalah: " . (count($fruits) - 1);
?>
