<?php
$catFood = [
    [
        "nama"=>"Felibite",
        "jenis"=>"Wet",
        "harga"=>29000,
        "jumlah"=>5
    ],
    [
        "nama"=>"Royal Canin",
        "jenis"=>"Dry",
        "harga"=>20000,
        "jumlah"=>8
    ],
    [
        "nama"=>"Me-O",
        "jenis"=>"Dry",
        "harga"=>50000,
        "jumlah"=>10
    ],
    [
        "nama"=>"Cleo",
        "jenis"=>"Wet",
        "harga"=>35000,
        "jumlah"=>5
    ],
    [
        "nama"=>"Equilibrio",
        "jenis"=>"Wet",
        "harga"=>53000,
        "jumlah"=>7
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan Kucing</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Makanan</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Total (inc Diskon)</th>
        </tr>
        <?php $i=1?>
        <?php foreach($catFood as $cf):?>
            <tr>
                <td><?=$i;?></td>
                <?php $i++;?>
                <td><?= $cf["nama"]?></td>
                <td><?= $cf["jenis"]?></td>
                <td><?= "RP ".$cf["harga"]?></td>
                <td><?= "@ ".$cf["jumlah"]?></td>
                <td><?= "RP ".$total = $cf["jumlah"]*$cf["harga"]?></td>
                <td><?= "RP ".$totalDiskon = $total-($total*10/100)?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>