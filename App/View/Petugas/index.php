<?php
if($_SESSION['petugas']['level'] != 'petugas'){
    header('Location:'.BASEURL);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Asset/css/petugas.css">
    <title>Petugas</title>
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
    <br>
    <br>
    <br>
    <center>
    <h1>SELAMAT DATANG <?=$_SESSION['petugas']['nama_petugas']?></h1>
    <img style = "width:500px; height:400px" src="<?=BASEURL.'/Asset/image/welcome.png' ?>">
    <div class="tombol-tombol">
    <a href="<?=BASEURL.'/Tanggapan'?>">data aduan</a>
    <a href="<?=BASEURL.'/Petugas/laporan'?>">cetak laporan</a>
    </div>
    </center>
</body>
</html>