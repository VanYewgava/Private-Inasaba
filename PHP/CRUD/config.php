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
?>