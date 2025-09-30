<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 400px;
        }
        td, th {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
    $nama   = "Muhammad Robby Bill Mustofa";
    $umur   = 21;
    $alamat = "Gresik";
    $hobi   = "Bermain Burung";

    ?>
    <h2>Biodata Diri</h2>
    <table>
        <tr>
            <th>Data</th>
            <th>Keterangan</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><?= $umur ?> tahun</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?= $alamat ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td><?= $hobi ?></td>
        </tr>
    </table>
</body>
</html>
