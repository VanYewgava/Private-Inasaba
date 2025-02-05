<?php
session_start ();
if(!isset($_SESSION["username"])){
    header("Location: login2.php");
    exit();
}
$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Selamat datang di halaman <?= $username ?></p>
    <a href="logout.php">Log Out</a>
</body>
</html>