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
    <title>Registrasi Petugas</title>
    <link rel="stylesheet" href="<?=BASEURL;?>/Asset/css/registrasipetugas.css">
</head>
<body>
<div class="header">
    <h3>NGADU</h3>
    <nav>
        <ul>
            <li> <a href="<?=BASEURL;?>/Admin/dataoperator">data operator</a>      </li>
            <li><a href="<?=BASEURL.'/Home/logout/'?>">logout</a></li>
        </ul>
    </nav>
</div>
<div class="latar">
<div class="form-registrasi">
    <div class="head-form">
        <h1>Registrasi Operator</h1>
    </div>
    <div class="container">
            <form action="<?= BASEURL ?>/Registrasi/prosesRegisPetugas" method="POST">
                <label for="nama">masukkan nama</label><br>
                <input type="text" name="nama_petugas"  placeholder="masukkan nama"><br>
                <label for="username">username</label><br>
                <input type="text" name="username"  placeholder="masukkan username"><br>
                <label for="password">password</label><br>
                <input type="password" name="password"  placeholder="masukkan password"><br>
                <label for="telepon">no. telepon</label><br>
                <input type="telepon" name="telepon" required placeholder="masukkan no. telepon"><br>
                <button type="submit">Tambah</button>      
            </form>
    </div>
</div>
</div>
</body>
</html>