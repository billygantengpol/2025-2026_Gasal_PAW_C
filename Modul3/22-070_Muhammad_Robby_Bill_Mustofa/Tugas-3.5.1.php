<?php
$students = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665"),
);

$students[] = array("Daniel", "220404", "0812345699");
$students[] = array("Ella", "220405", "0812345600");
$students[] = array("Farhan", "220406", "0812345611");
$students[] = array("Gina", "220407", "0812345622");
$students[] = array("Hafiz", "220408", "0812345633");

for ($row = 0; $row < count($students); $row++) {
    echo "<p><b>Row Number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < count($students[$row]); $col++) {
        echo "<li>" . $students[$row][$col] . "</li>";
    }
    echo "</ul>";
}
?>