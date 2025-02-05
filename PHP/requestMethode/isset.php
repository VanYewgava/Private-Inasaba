<?php
session_start();

if(isset($_POST["submit"])){
    $namaanda = $_POST["nama"];
    echo "nama anda adalah : " . $namaanda . "<br>";
    $filmanda = $_POST["film"];
    echo "film anda adalah : " . $filmanda;
}elseif(!isset($_POST["submit"])){
    $namaanda = $_POST["nama"];
    $filmanda = $_POST["film"];
    echo "nama anda adalah : " . "kosong<br>" ;
    echo "film anda adalah : " . "kosong";
}
else {
    echo "Data belum dikirim!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nama :</label><br>
        <input type="text" name="nama" id="" required><br>
        <label for="">Film anda:</label><br>
        <input type="text" name="film" id="" required><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>