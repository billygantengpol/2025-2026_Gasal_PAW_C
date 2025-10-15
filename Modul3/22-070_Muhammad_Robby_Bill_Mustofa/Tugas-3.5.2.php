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

echo "<h2>Data Mahasiswa</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>No. HP</th>
      </tr>";

for ($row = 0; $row < count($students); $row++) {
    echo "<tr>";
    echo "<td>".($row+1)."</td>";
    for ($col = 0; $col < 3; $col++) {
        echo "<td>".$students[$row][$col]."</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
