<?php
$config = mysqli_connect("localhost","root","","sekolah");

//mengecek tombol submit apakah sudah ditekan atau belum
if (isset($_POST["submit"])){
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];
    $alamat = $_POST["alamat"];

    //membuat query untuk menambahkan data ke tabel dengan cara memasukan variabel yang sudah di buat saat pengecekan submit
    $query = "INSERT INTO siswa VALUES
                (NULL,'$nis','$nama','$jurusan','$alamat')";
    //mengekseskusi query untuk menambahkan data ke dalam tabel 
    mysqli_query($config, $query);


    // var_dump(mysqli_affected_rows($config)); //untuk mengecek benar atau error query

    if(mysqli_affected_rows($config)){
        echo "Data berhasil ditambahkan";
    } else {
        echo "Data gagal ditambahkan";
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
        <input type="text" name="nis" id="nis"><br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama"><br>
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan"><br>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat"><br>
        <button type="submit" name="submit">Kirim data</button>
    </form>
</body>
</html>