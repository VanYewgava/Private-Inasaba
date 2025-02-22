<?php
$config = mysqli_connect("localhost", "root", "", database: "sekolah");


//variabel yang disarankan php untuk mengecek keberadaan tabel
$result = mysqli_query($config, "SELECT * FROM siswa");

//mengembalikan data dalam bentuk array asosiatif
// $siswa = mysqli_fetch_assoc($result);
    
//mengembalikan data dalam bentuk array asositif dan numerik
// $siswa = mysqli_fetch_array($result);

//mengembalikan data dalam bentuk array numerik
// $siswa = mysqli_fetch_row($result);

//mengembalikan data dalam bentuk object (bukan array)
// $siswa = mysqli_fetch_object($result->nama (field database));

// print_r($siswa);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <table border="1" cellpadding="3px" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>
        <?php $i=1 ?>
        <?php while ($data = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nis"]; ?></td>
            <td><?= $data["nama"]; ?></td>
            <td><?= $data["jurusan"]; ?></td>
            <td><?= $data["alamat"]; ?></td>
            <?php $i++; ?>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>