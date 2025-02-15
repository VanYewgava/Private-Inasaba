<?php
//Menghubungkan ke database
$config = mysqli_connect("localhost", "root", "", database: "sekolah");

function query($read){
    global $config;
    $result = mysqli_query($config, $read);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function Add($add){
    global $config;
    $nis = htmlspecialchars ($add["nis"]);
    $nama = htmlspecialchars($add["nama"]);
    $jurusan = htmlspecialchars($add["jurusan"]);
    $alamat = htmlspecialchars($add["alamat"]);

    $query = "INSERT INTO siswa VALUES
                (NULL,'$nis','$nama','$jurusan','$alamat')";

    mysqli_query($config, $query);
    return mysqli_affected_rows($config);
}

function Delete($delete){
    global $config;
    mysqli_query($config, "DELETE FROM siswa WHERE id = $delete");

    return mysqli_affected_rows($config);
}
?>