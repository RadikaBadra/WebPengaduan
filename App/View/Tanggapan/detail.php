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
    <link rel="stylesheet" href="<?=BASEURL;?>/Asset/css/detailpengaduan.css">
    <title>Detail Pengaduan</title>
</head>
<body>
<div class="latar">
<div class="form-tambah">
<div class="head-form">
    <h1>Detail pengaduan</h1>
</div>
    <div class="container">
            <form>
                <div class="datapengaduan">
                    <label for="id_pengaduan">id pengaduan</label><br>
                    <input type="text" name="id_pengaduan" value="<?=$data['pengaduan']['id_pengaduan']?>" readonly><br>
                    <label for="tgl_aduan">tanggal aduan</label><br>
                    <input type="text" value="<?=$data['pengaduan']['tgl_pengaduan']?>" readonly><br>
                    <label for="nik">nik pelapor</label><br>
                    <input type="text" value="<?=$data['pengaduan']['nik']?>" readonly><br>
                    <label for="foto">foto terlampir</label><br>
                    <img src="<?=BASEURL.'/Asset/image/'.$data['pengaduan']['foto']; ?>"><br>
                    <label for="isi_laporan">Isi aduan</label><br>
                    <textarea name="isi_laporan" id="" cols="30" rows="10"  readonly><?=$data['pengaduan']['isi_laporan']?></textarea><br>
                </div>
                <div class="tanggapan">
                    <?php foreach($data['tanggapan'] as $tg) :?>
                    <label for="tanggapan">Tanggapan dari Petugas <?= $tg['nama_petugas']?></label><br>
                    <textarea name="tanggapan" id="" cols="30" rows="10" readonly><?=$tg['tanggapan']?></textarea><br>
                    <?php endforeach;?>
                </div>
                <div class="clear-float">
                <br>
                <?php if ($data['pengaduan']['status'] == 'selesai'){?>
                    <a href="<?=BASEURL.'/Tanggapan'?>">kembali</a>
                    <?php }else{?>  
                    <a href="<?=BASEURL.'/Tanggapan'?>">kembali</a>
                    <a class= "btn-selesai" href="<?= BASEURL.'/Tanggapan/verifikasiselesai/'?><?=$data['pengaduan']['id_pengaduan']?>">selesai</a>
                <?php }?>
                </div>
            </form>
    </div>
    </div>
</div>
</body>
</html>