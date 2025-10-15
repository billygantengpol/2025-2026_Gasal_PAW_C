<?php
$nums = [5,2,9,1,7];

// urut naik (reindex)
sort($nums);       // [1,2,5,7,9]

// urut turun (reindex)
rsort($nums);      // [9,7,5,2,1]

// urut naik sambil mempertahankan kunci (untuk array asosiatif numerik)
$assocNums = [2=>5, 8=>2, 3=>9];
asort($assocNums); // urut berdasarkan nilai, kunci tetap

print_r($assocNums);
?>

<!-- sort -->
<?php
$people = [
    ["name"=>"Ali","age"=>30],
    ["name"=>"Budi","age"=>25],
    ["name"=>"Cici","age"=>28],
];

usort($people, function($a,$b){
    return $a['age'] - $b['age']; // naik berdasarkan umur
});

print_r($people);
?>

