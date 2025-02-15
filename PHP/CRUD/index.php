<?php

require "config.php";
$data = query("SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="add.php">Tambah data siswa</a>
    <table border="1" cellpadding="3px" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1 ?>
        <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><a href="edit.php">Edit |</a>
                <a href="delete.php?id=<?= $row["id"]; ?> "onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">| Hapus</a>
            </td>
            <?php $i++; ?>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>