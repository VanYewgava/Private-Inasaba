<?php


require "config.php";
$data = Read("SELECT * FROM tb_karyawan");
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $valid_username = "admin";
    $valid_username = "123";

    if ($username === $valid_username && $password === $valid_password){
        $_SESSION["username"] = $username;
        header("Location:dashboard.php");
        exit();
    } else {
        $error = "Username dan Password salah";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <a href="login.php">Log Out</a>
    <h1>Data Karyawan</h1>
    <a href="add.php">Tambah Data Karyawan</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Karyawan</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Divisi</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1?>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["no_karyawan"]; ?></td>
                    <td><?= $row["nama_karyawan"]; ?></td>
                    <td><?= $row["jabatan"]; ?></td>
                    <td><?= $row["divisi"]; ?></td>
                    <td><?= $row["alamat"]; ?></td>
                    <td>
                        <a href="">Edit</a>
                        <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>       
                    </td>
                </tr>
                <?php $i++;?>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>