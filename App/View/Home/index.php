<?php
if(!isset($_SESSION['data'])){
    header('Location:'.BASEURL);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Asset/css/home.css">
    <title>Home</title>
</head>
<body>
<div class="header">
    <h3>NGADU</h3>
    <nav>
        <ul>
            <li><a href="<?=BASEURL.'/Home/editmasyarakat/'?>">edit profil</a></li>
            <li><a href="<?=BASEURL.'/Home/logout/'?>">logout</a></li>
        </ul>
    </nav>
</div>
<center>
<br>
<br>
<h1>SELAMAT DATANG <?=$_SESSION['data']['nama']?></h1>
<br>
<br>
<img style = "width:500px; height:400px" src="<?=BASEURL.'/Asset/image/welcome2.png' ?>">
<br>
<br>
<br>
<div class="tombol-tombol">
<a href="<?=BASEURL.'/Pengaduan'?>">tambah pengaduan</a>
<a href="<?=BASEURL.'/Home/CekPengaduan/'?>">data pengaduan</a>
</div>
</center>
</body>
</html>