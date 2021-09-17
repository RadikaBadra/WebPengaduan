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
    <link rel="stylesheet" href="<?=BASEURL;?>/Asset/css/tambahtanggapan.css">
    <title>Tambah Pengaduan</title>
</head>
<body>
<div class="header">
    <h3>NGADU</h3>
    <nav>
        <ul>
            <li><a href="<?=BASEURL.'/Tanggapan'?>">Data Pengaduan</a></li>
            <li><a href="<?=BASEURL.'/Petugas/logout/'?>">logout</a></li>
        </ul>
    </nav>
</div>
<div class="latar">
    <div class="form-tambah">
    <div class="head-form">
    <h1>Tambah Tanggapan</h1>
    </div>
        <div class="container">
                <form action="<?= BASEURL.'/Tanggapan/prosestambahTanggapan'?>" method="POST">
                    <label for="id_pengaduan">id pengaduan</label><br>
                    <input type="text" name="id_pengaduan" value="<?=$data['pengaduan']['id_pengaduan']?>" readonly><br>
                    <label for="tgl_aduan">tanggal_aduan</label><br>
                    <input type="text" value="<?=$data['pengaduan']['tgl_pengaduan']?>"><br>
                    <label for="nik">nik pelapor</label><br>
                    <input type="text" value="<?=$data['pengaduan']['nik']?>"><br>
                    <label for="foto">foto terlampir</label><br>
                    <img src="<?=BASEURL.'/Asset/image/'.$data['pengaduan']['foto']; ?>"><br>
                    <label for="isi_laporan">Isi aduan</label><br>
                    <textarea name="isi_laporan" id="" cols="30" rows="10"  readonly><?=$data['pengaduan']['isi_laporan']?></textarea><br>
                    <label for="tanggapan">Tanggapan</label><br>
                    <textarea name="tanggapan" id="" cols="30" rows="10"></textarea><br>
                    <button type="submit">Tambah</button>
                </form>
        </div>
    </div>
</div>
</body>
</html>