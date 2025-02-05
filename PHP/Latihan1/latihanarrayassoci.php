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
    <table border ="1">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
        <?php $i=1?>
        
            <?php foreach($mahasiswa as $mhs):?>
                <tr>
                <td><?=$i?></td>
                <td><?=$mhs["nama"]?></td>
                <td><?=$mhs["nim"]?></td>
                <td><?=$mhs["jurusan"]?></td>
                <td><?=$mhs["alamat"]?></td>
                <td><?=$mhs["email"]?></td>
                
                <?php $i++;?>
                </tr>
            <?php endforeach ?>
        
    </table>
</body>
</html>