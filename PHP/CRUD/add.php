<?php
require "config.php";

//mengecek tombol submit apakah sudah ditekan atau belum
if (isset($_POST["submit"])){
    if(Add($_POST) > 0){
        echo "<script>
                alert('Data berhasil ditambahkan')
                document.location.href='index.php';
                </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan')
                document.location.href='index.php';
                </script>";
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah data siswa</h1>
    <form action="" method="post">
        <label for="nis">Nis:</label>
        <input type="text" name="nis" id="nis" required><br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br>
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required><br>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required><br>
        <button type="submit" name="submit">Kirim data</button>
    </form>
</body>
</html>