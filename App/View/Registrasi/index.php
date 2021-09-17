<?php
if(isset($_SESSION['gagalregistrasi'])){
    echo '<script>alert("username sudah ada")</script>';
    unset($_SESSION['gagalregistrasi']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Asset/css/registrasi.css">
    <title>REGISTRASI</title>
</head>
<body>
<div class="latar">
    <div class="form-registrasi">
        <div class="head-form">
            <h1>Registrasi</h1>
        </div>
        <div class="container">
                <form action="<?= BASEURL ?>/Registrasi/prosesRegisMasyarakat" method="POST">
                    <label for="nik">nik</label><br>
                    <input type="text" name="nik"  placeholder="masukkan nik"><br>
                    <label for="nama">masukkan nama</label><br>
                    <input type="text" name="nama"  placeholder="masukkan nama"><br>
                    <label for="username">username</label><br>
                    <input type="text" name="username"  placeholder="masukkan username"><br>
                    <label for="password">password</label><br>
                    <input type="password" name="password"  placeholder="masukkan password"><br>
                    <label for="telepon">no. telepon</label><br>
                    <input type="telepon" name="telepon" required placeholder="masukkan no. telepon"><br>
                    <button type="submit">Sign Up</button>
                    <a href="<?=BASEURL;?>/Login">login</a>
                </form>
        </div>
    </div>
</div>
</body>
</html>