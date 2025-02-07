<?php
session_start ();
$produk = [
    "Felibite" => [
        "jenis"=> "Wet",
        "harga"=> 29000,
        "jumlah"=> 8
    ],
    "Royal Canin"=> [
        "jenis"=>"Dry",
        "harga"=> 20000,
        "jumlah"=> 8
    ],
    "Me-O"=> [
        "jenis"=>"Dry",
        "harga"=> 50000,
        "jumlah"=> 10
    ],
    "Cleo"=> [
        "jenis"=>"Wet",
        "harga"=> 35000,
        "jumlah"=> 5
    ],
    "Equilibrio"=> [
        "jenis"=>"Wet",
        "harga"=> 53000,
        "jumlah"=> 7
    ]
];

// Proses yang dipilih pengguna
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $_SESSION["catFood"] = $_POST["catFood"];
}

// User logout
if (isset($_SESSION["logout"])){
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
//Untuk tombol hapus
if (isset($_POST["refresh"])){
    session_unset();
    session_destroy();
    header("Location: makanankucing.php");
    exit();
}

//yang akan di tampilkan di tabel
if (isset($_SESSION["catFood"]) && $_SESSION["catFood"]){
    $pilih = $produk[$_SESSION["catFood"]];
} else {
    $pilih = null;
}

// Ketika user mencoba login tanpa logout terlebih dahulu
if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ari Cat Food</title>
</head>
<body>
    <h1>Selamat Datang di Ari's Cat Food</h1>
    <form action="" method="post">
        <label for="catFood">Pilih merk Cat Food Anda : </label>
        <select name="catFood" id="">
            <option value="">-- pilih --</option>
            <?php foreach($produk as $key => $catFood):?>
                <option value="<?= $key ?>"
                <?php if(isset($_SESSION["catFood"]) && $_SESSION["catFood"] == $key){
                    echo "selected";
                } ?>
                ><?= $key ?>
            </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Tampilkan</button>
        <button type="submit" name="refresh">Muat Ulang!</button>
    </form>

    <?php if(!empty($pilih)): ?>
        <table border="1" cellspacing="0" cellpadding="1">
            <tr>
                <th>No.</th>
                <th>Keterangan</th>
                <th>Detail</th>
            </tr>
            <?php $no = 1;?>
            <?php foreach($pilih as $keterangan => $detail):?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $keterangan ?></td>
                    <td><?= $detail ?></td>
                    <?php $no++ ?>
                </tr>
                <?php endforeach; ?>
        </table>
        <?php else :?>
            <p>Tidak ada merk yang dipilih</p>
        <?php endif ?>
        <button type="submit" name="logout">Log Out</button>
</body>
</html>