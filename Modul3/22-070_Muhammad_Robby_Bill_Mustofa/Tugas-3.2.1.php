<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// tambahkan 5 data baru dengan perulangan for
$buahBaru = array("Durian", "Elderberry", "Buapakmu", "Grapes", "Mango");
for($i = 0; $i < count($buahBaru); $i++) {
    $fruits[] = $buahBaru[$i];
}

$arrlength = count($fruits); // hitung ulang panjang array

for($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo "<br>";
}
?>
