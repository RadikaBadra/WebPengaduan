<?php
if(!isset($_SESSION['data'])){
    header('Location:'.BASEURL);
}
if(isset($_SESSION['gagaluploadukuran'])){
    
    echo '<script>alert("ukuran terlalu besar")</script>';
    unset($_SESSION['gagaluploadukuran']);
}
else if(isset($_SESSION['gagaluploadekstensi'])){ 
   
    echo '<script>alert("file harus berupa foto (png | jpg | jpeg)")</script>';
    unset($_SESSION['gagaluploadekstensi']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=BASEURL;?>/Asset/css/tambahpengaduan.css">
    <title>Tambah Pengaduan</title>
</head>
<body>
<div class="header">
    <h3>NGADU</h3>
    <nav>
        <ul>
            <li><a href="<?=BASEURL.'/Home'?>">Home</a></li>
            <li><a href="<?=BASEURL.'/Home/CekPengaduan'?>">Data Aduan</a></li>
            <li><a href="<?=BASEURL.'/Home/logout/'?>">logout</a></li>
            
        </ul>
    </nav>
</div>
<div class="latar">
    <div class="form-tambah">
        <div class="head-form">
        <h1>Tambah Aduan</h1>
        </div>
            <div class="container">
            <form action="<?= BASEURL.'/Pengaduan/prosestambahPengaduan'?>" method="POST" enctype="multipart/form-data">
                <label for="subjek">subjek laporan</label><br>
                <input type="text" name='subjek'><br>
                <label for="isi_laporan">isi pengaduan</label><br>
                <textarea name="isi_laporan" id="" cols="30" rows="10"></textarea><br>
                <label for="foto">masukan foto</label><br>
                <input type="file" name="foto" ><br>
                <button type="submit">Tambah</button>
            </form>
            </div>
    </div>
</div>
</body>
</html>