<?php

session_start();

if(isset($_SESSION["username"])){
    header("Location: SiforDaerah.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $valid_username = "admin";
    $valid_password = "123";
    
    if($username === $valid_username && $password === $valid_password){
        $_SESSION["username"] = $username;
        header ("Location: SiforDaerah.php");
        exit();
    }
    else {
        $error = "Username dan Password salah";
    }
}
echo "<link rel='stylesheet' type='text/css' href='style.css'>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h1>LOGIN</h1>
    <form action="" method="post" class="formulir">
        <div class="username">
            <i class="fa-solid fa-user"></i>
        <input type="text" name="username" id="" required placeholder="Username"><br>
        
        </div>
        <div class="password">
            <i class="fa-solid fa-key"></i>
        <input type="password" name="password" id="" required placeholder="Password"><br>
        </div>
        <div class="tombol">
        <input type="submit" value="Login" name="submit">
        </div>
        <?php if (isset($error)): ?>
                <p style="color: red;"><?= $error ?></p>
            <?php endif; ?>
    </form>
    </div>
</body>
</html>