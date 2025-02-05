<?php

$mahasiswa = [
    ["Febrianto","Informatika",124432553,"febri@gmail.com"],
    ["Ayu", "Sistem Informasi",231142345,"ayu@gmail.com"],
    ["Citra", "Akuntansi",3243455334,"citra@gmail.com"]
];

// for ($i=0; $i < count($mahasiswa); $i++) { 
//     echo $mahasiswa[$i][0]. " " . $mahasiswa[$i][1]. " " . $mahasiswa[$i][2]. " " . $mahasiswa[$i][3]. "<br>";
// }

// foreach ($mahasiswa as $mhs){
//     echo $mhs[0]." ". $mhs[1]." ". $mhs[2]." ". $mhs[3] . "<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php foreach($mahasiswa as $mhs) :?>
        <ul>
            <li>Nama: <?= $mhs[0]?></li>
            <li>Jurusan: <?= $mhs[1]?></li>
            <li>Nim: <?= $mhs[2]?></li>
            <li>Email: <?= $mhs[3]?></li>
        </ul>
        <?php endforeach ?>
    
</body>
</html>