<?php

session_start();

if(isset($_SESSION["username"])){
    header("Location: makanankucing.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $valid_username = "admin";
    $valid_password = "123456";
    
    if($username === $valid_username && $password === $valid_password){
        $_SESSION["username"] = $username;
        header ("Location: makanankucing.php");
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
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
    <form action="" method="post" class="formulir">
        <div class="username">
        <label for="">Username</label><br>
        <input type="text" name="username" id="" required><br>
        </div>
        <div class="password">
        <label for="">Password</label><br>
        <input type="password" name="password" id="" required><br>
        </div>
        <div class="tombol">
        <input type="submit" value="Login" name="submit">
        </div>
    </form>
    </div>
</body>
</html>