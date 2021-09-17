<?php
if(isset($_SESSION['gagallogin'])){
    echo '<script>alert :("username atau password salah")</script>';
    unset($_SESSION['gagallogin']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Asset/css/login.css">
    <title>LOGIN</title>
</head>
<body>
<div class="latar">
    <div class="login-form">
        <div class="head-form">
            <h1>LOGIN</h1>
        </div>
        <div class="container">
            <form action="<?=BASEURL?>/Login/prosesLogin" method="POST">
                <label for="username">username</label><br>
                <input type="text" name="username" placeholder="masukkan username" required><br>
                <label for="password">password</label><br>
                <input type="password" name="password" placeholder="masukkan password" required><br>
                <button type="submit">Login</button>
                <a href="<?=BASEURL.'/Registrasi'?>">Registrasi</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>