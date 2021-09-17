<?php
if($_SESSION['petugas']['level'] != 'admin'){
    header('Location:'.BASEURL);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Asset/css/admin.css">
    <title>Admin</title>
</head>
<body>
<div class="header">
    <h3>NGADU</h3>
    <nav>
        <ul>
            <li><a href="<?=BASEURL.'/Petugas/logout/'?>">logout</a></li>
        </ul>
    </nav>
</div>
<div class="section">
    <center>
    <h1>SELAMAT DATANG <?=$_SESSION['petugas']['nama_petugas']?></h1>
    <img style = "width:500px; height:400px" src="<?=BASEURL.'/Asset/image/welcome.png' ?>">
    <div class="tombol-tombol">
        <a class="data-operator" href="<?=BASEURL.'/Admin/dataoperator'?>">data operator</a>
        <a class="data-aduan" href="<?=BASEURL.'/Admin/dataaduan'?>">data aduan</a>
        <a class="data-masyarakat" href="<?=BASEURL.'/Admin/datamasyarakat'?>">data masyarakat</a>
        <a class="data-laporan" href="<?=BASEURL.'/Admin/laporan'?>">cetak laporan</a>
    </div>
    </center>
</div>
</body>
</html>