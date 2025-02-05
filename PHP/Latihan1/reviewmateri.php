<?php
$siswa = [
    ["Joni Susanto","XII TKR 2","Pemalang"],
    ["Intan Ayu","XII TB 1","Brebes"],
    ["Salma Karima","XI RPL 3","Batang"],
    ["Eka Ayu","XI TKJ 4","Probolinggo"],
    ["Dimas Saputra","XII TBSM 2","Tegal"]
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
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php $i = 1; ?>
            <?php foreach ($siswa as $sis): ?>
                <tr>
                <td><?= $i;?></td>
                <td><?=$sis[0]?></td>
                <td><?=$sis[1]?></td>
                <td><?=$sis[2]?></td>
                </tr>
                <?php $i++;?>
            <?php endforeach ?>
        
    </table>
</body>
</html>