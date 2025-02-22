<?php

require 'config.php';
if (isset($_POST["register"])){
    if (Register($_POST)> 0){
        echo "<script>
                alert('Anda berhasil mendaftar')
                document.location.href='index.php';
                </script>";
    } else{
        echo mysqli_error($config);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username Anda</label>
        <input type="text" name="username" id="username"><br>
        <label for="password1">Masukan Password</label>
        <input type="password" name="password1" id="password1"><br>
        <label for="password2">Konfirmasi Password Anda</label>
        <input type="password" name="password2" id="password2">
        <button type="submit" name="register">Registrasi</button>
    </form>
</body>
</html>