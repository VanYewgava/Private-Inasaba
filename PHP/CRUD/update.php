<?php
require "config.php";

//menangkap Id dari method Get
$id = $_GET["id"];

//Query berdasarkan id yang dikirim
$update = query("SELECT * FROM siswa WHERE id = $id")[0];
// var_dump($edit["nama"]);

//mengecek tombol submit apakah sudah ditekan atau belum
if (isset($_POST["submit"])){
    if(Update($_POST) > 0){
        echo "<script>
                alert('Data berhasil diupdate')
                document.location.href='index.php';
                </script>";
    } else {
        echo "<script>
                alert('Data gagal diupdate')
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
    <title>Edit data</title>
</head>
<body>
    <h1>Edit data siswa</h1>
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $update["id"] ?>" required><br>
        <label for="nis">Nis:</label>
        <input type="text" name="nis" id="nis" value="<?= $update["nis"] ?>" required><br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?= $update["nama"] ?>" required><br>
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" value="<?= $update["jurusan"] ?>" required><br>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" value="<?= $update["alamat"] ?>" required><br>
        <button type="submit" name="submit">Update data</button>
    </form>
</body>
</html>