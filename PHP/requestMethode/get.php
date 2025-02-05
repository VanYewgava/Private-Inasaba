<?php
$mahasiswa = [
    [
        "nama"=>"Aditya",
        "nim" => 172400001,
        "jurusan" => "Teknik Informatika",
        "alamat"=>"Pemalang",
        "email"=>"adit@gmail.com"
    ],
    [
        "nama"=>"Bayu Anggoro",
        "nim" => 172100003,
        "jurusan" => "Teknik Sipil",
        "alamat"=>"Brebes",
        "email"=>"bayu@gmail.com"
    ],
    [
        "nama"=>"Rizal Septian",
        "nim" => 171100005,
        "jurusan" => "Akuntansi",
        "alamat"=>"Batang",
        "email"=>"tian@gmail.com"
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Ketika Memanggil 1 data saja -->
    <!-- <ul>
        <?php foreach($mahasiswa as $mhs): ?>
        <li><a href="aditya.php?nama=<?= $mhs["nama"] ?>& nim=<?= $mhs["nim"]?>& jurusan=<?= $mhs["jurusan"]?>& alamat=<?=$mhs["alamat"]?>& email=<?=$mhs["email"]?>"><?= $mhs["nama"] ?></a></li>
        <?php endforeach ?>
    </ul> -->

    <!-- Memanggil Data keseluruhan -->
    <table border = "1">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
        <?php $i=1?>
        <?php foreach($mahasiswa as $mhs):?>
        <tr>
            <td><?= $i?></td>
            <td><a href="dataGet.php?nama=<?= $mhs["nama"] ?>& nim=<?= $mhs["nim"]?>& jurusan=<?= $mhs["jurusan"]?>& alamat=<?=$mhs["alamat"]?>& email=<?=$mhs["email"]?>"><?= $mhs["nama"] ?></a></td>
            <td><?= $mhs["nim"]?></td>
            <td><?= $mhs["jurusan"]?></td>
            <td><?= $mhs["alamat"]?></td>
            <td><?= $mhs["email"]?></td>
            <?php $i++?>
        </tr>
        <?php endforeach ?>
     </table>
</body>
</html>