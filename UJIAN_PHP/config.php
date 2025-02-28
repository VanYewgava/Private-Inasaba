<?php

$config = mysqli_connect("localhost", "root", "", "perusahaan");

function Read($read){
    global $config ;
    $result = mysqli_query($config,"$read");

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function Add($add){
    global $config ;
    $no_karyawan = htmlspecialchars($add["no_karyawan"]);
    $nama_karyawan = htmlspecialchars($add["nama_karyawan"]);
    $jabatan = htmlspecialchars($add["jabatan"]);
    $divisi = htmlspecialchars($add["divisi"]);
    $alamat = htmlspecialchars($add["alamat"]);

    $query = "INSERT INTO tb_karyawan VALUES
                (NULL,'$no_karyawan','$nama_karyawan','$jabatan','$divisi','$alamat')";
    
    mysqli_query( $config, $query);
    return mysqli_affected_rows($config);
}

function Delete($delete){
    global $config;
    mysqli_query($config, "DELETE FROM tb_karyawan WHERE id = $delete");

    return mysqli_affected_rows($config);
}