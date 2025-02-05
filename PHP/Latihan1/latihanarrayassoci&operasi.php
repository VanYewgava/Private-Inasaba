<?php
$belanja = [
    [
        "unit"=>"baju",
        "harga" => 21000,
        "jumlah" => 2
        
    ],
    [
        "unit"=>"sepatu",
        "harga" => 240000,
        "jumlah" => 1
        
    ],
    [
        "unit"=>"celana",
        "harga" => 140000,
        "jumlah" => 3
        
    ],
    [
        "unit"=>"tas",
        "harga" => 210000,
        "jumlah" => 1
        
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
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            
        </tr>
        <?php $i=1?>
        
            <?php foreach($belanja as $shop):?>
                <tr>
                <td><?=$i?></td>
                <td><?=$shop["unit"]?></td>
                <td><?=$shop["harga"]?></td>
                <td><?=$shop["jumlah"]?></td>
                <td><?= $shop["harga"] * $shop["jumlah"]?></td>
                
                <?php $i++;?>
                </tr>
            <?php endforeach ?>
        
    </table>
</body>
</html>