<?php
$fruits = array("Avocado", "Blueberry", "Cherry");
$assoc = array("Andy"=>"176", "Barry"=>"165");


$k = array_search("Avocado",$fruits);
if ($k !== false) { echo "Ditemukan di indeks $k"; 
} else { echo "Tidak ada"; }

echo "<br>";

$k = array_search("176", $assoc);
if ($k !== false) {
     echo "Ditemukan di indeks $k";
    } else { echo "Tidak ada"; }

?>
