<!DOCTYPE html>
<html lang="en">
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
    // Ambil data dari query string dengan fallback nilai default 
    $nama     = $_GET['nama']     ?? "Tidak diisi"; 
    $umur      = $_GET['umur']      ?? "Tidak diisi"; 
    $alamat  = $_GET['alamat']  ?? "Tidak diisi"; 
    $hobi = $_GET['hobi'] ?? "Tidak diisi"; 

  
 // Simpan ke array untuk fleksibilitas 
     $biodata = [ 
         "Nama" => $nama, 
         "umur" => $umur, 
         "alamat" => $alamat, 
         "hobi" => $hobi
    ]; 
    ?> 
 
    <table> 
        <caption>Biodata Mahasiswa</caption> 
        <tr><th>Field</th><th>Informasi</th></tr> 
        <?php foreach ($biodata as $field => $value): ?> 
            <tr> 
                <td><?= htmlspecialchars($field) ?></td> 
                <td><?= nl2br(htmlspecialchars($value)) ?></td> 
            </tr> 
        <?php endforeach; ?> 
    </table
</body>
</html>