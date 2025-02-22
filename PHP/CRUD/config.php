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

function Update($update){
    global $config;
    $id = htmlspecialchars($update["id"]);
    $nis = htmlspecialchars ($update["nis"]);
    $nama = htmlspecialchars($update["nama"]);
    $jurusan = htmlspecialchars($update["jurusan"]);
    $alamat = htmlspecialchars($update["alamat"]);

    $query = "UPDATE siswa SET 
                id = '$id',
                nis = '$nis',
                nama = '$nama',
                jurusan = '$jurusan',
                alamat = '$alamat'
                WHERE id = $id";

    mysqli_query($config, $query);
    return mysqli_affected_rows($config);
}

function Search ($search){
    $query = "SELECT * FROM siswa
                WHERE
                nis LIKE '%$search%' OR
                nama LIKE '%$search%' OR
                jurusan LIKE '%$search%' OR
                alamat LIKE '%$search%'";
    return query($query);
}

function Register($register){
    global $config;

    $username = strtolower(stripslashes($register["username"]));
    $password1 = mysqli_real_escape_string($config, $register["password1"]);
    $password2 = mysqli_real_escape_string($config, $register["password2"]);

    //cek password sama atau tidak
    if ($password1 !== $password2){
        echo "<script>
                alert('password tidak sama')
                </script>";
                return false;
    }
    
    //enkripsi password
    //timpa password
    $password1 = password_hash($password1, PASSWORD_DEFAULT);

    mysqli_query($config, "INSERT INTO user VALUE
                (NULL,'$user','$password1')");
    return mysqli_affected_rows($config);
}
?>