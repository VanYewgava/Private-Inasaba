<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit();
}
require "config.php";

$delete = $_GET["id"];
if(Delete($delete) > 0){
    echo "<script>
            alert('Data berhasil dihapus')
            document.location.href='index.php';
            </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus')
            document.location.href='index.php';
            </script>";
}
?>