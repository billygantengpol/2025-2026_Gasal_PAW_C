<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];

// ambil hanya angka genap
$even = array_filter($numbers, function($n) {
    return $n % 2 === 0;
});


print_r($even);
echo "<br>";
print_r(array_values($even));
?>
