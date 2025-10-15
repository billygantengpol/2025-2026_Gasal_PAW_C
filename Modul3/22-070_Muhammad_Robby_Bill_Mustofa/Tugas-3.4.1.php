<?php
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");

// Tambahkan 5 data baru
$height["David"] = "180";
$height["Edward"] = "168";
$height["Frank"]  = "175";
$height["George"] = "172";
$height["Henry"]  = "169";

foreach($height as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
