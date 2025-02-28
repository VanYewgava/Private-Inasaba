<?php

require 'config.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $valid_username = "admin";
    $valid_password = "123";
    
    if($username === $valid_username && $password === $valid_password){
        $_SESSION["username"] = $username;
        header ("Location: dashboard.php");
        exit();
    }else {
        $error = "Username dan Password salah";
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
        <input type="password" name="password" id="password"><br>
        <button type="submit" name="login">Login</button>
        <button type="submit" name="register">Registrasi</button>
    </form>
</body>
</html>