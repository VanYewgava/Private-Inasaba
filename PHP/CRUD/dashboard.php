<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit();
}
require "config.php";
$data = query("SELECT * FROM siswa");

if (isset($_POST["search"])){
    $data = Search($_POST["search"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container-sm mt-5">
    <a href="logout.php">Log Out</a>
    <h1 class="mb-4">Data Siswa</h1>
    <a class="btn btn-primary mb-3" href="add.php">Tambah Data Siswa</a>
    <form action="" method="post" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" id="search" class="form-control me-4" placeholder="Cari berdasarkan nama..." autocomplete="off">
            <button type="submit" name="cari" class="btn btn-success rounded-2">Cari Data</button>
        </div>
    </form>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $row): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nis"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td>
                    <a class="btn btn-warning" href="update.php?id=<?= $row["id"]; ?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>