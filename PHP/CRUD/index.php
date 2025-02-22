<?php
session_start();

if(isset($_SESSION["login"])){
    header("Location:dashboard.php");
}
require 'config.php';
if (isset($_POST["register"])){
    header("Location:registrasi.php");
}
if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($config, "SELECT * FROM user WHERE user = '$username'");

    if (mysqli_num_rows($result) > 0){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            $_SESSION["login"] = true;
            header("Location:dashboard.php");
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="username"><br>
        <button type="submit" name="login">Login</button>
        <button type="submit" name="register">Registrasi</button>
    </form>
</body>
</html>