<?php

require "config.php";
if (isset($_POST["submit"])) {
    if (Add($_POST) > 0){
        echo "<script>
                alert('Data berhasil ditambahkan')
                document.location.href='dashboard.php';
                </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan')
            document.location.href='dashboard.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah data karyawan</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="no_karyawan">Nomor Karyawan</label></td>
                <td>:</td>
                <td><input type="text" name="no_karyawan" id="no_karyawan" required></td>
            </tr>
            <tr>
                <td><label for="nama_karyawan">Nama Karyawan</label></td>
                <td>:</td>
                <td><input type="text" name="nama_karyawan" id="nama_karyawan" required></td>
            </tr>
            <tr>
                <td><label for="jabatan">Jabatan</label></td>
                <td>:</td>
                <td><input type="text" name="jabatan" id="jabatan"></td>
            </tr>
            <tr>
                <td><label for="divisi">Divisi</label></td>
                <td>:</td>
                <td><input type="text" name="divisi" id="divisi"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>:</td>
                <td><input type="text" name="alamat" id="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit">Kirim Data</button></td>
            </tr>
        </table>
        
    </form>
</body>
</html>