<?php
//array asosiatif
//merubah index numerik menjadi key "String" sesuai yang kita inginkan
$mahasiswa =[
    [
        "nim"=>12324434,
        "alamat"=>"Tirto",
        "jurusan"=>"Sistem Informasi",
        "nama"=>"Aditya"
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
    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li><?php echo $mhs["nama"]?></li>
            <li><?php echo $mhs["nim"]?></li>
            <li><?php echo $mhs["jurusan"]?></li>
            <li><?php echo $mhs["alamat"]?></li>
            
        </ul>
        <?php endforeach ?>
</body>
</html>