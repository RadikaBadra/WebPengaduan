
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=BASEURL;?>/Asset/css/indexTanggapan.css">
    <title>Laporan</title>
</head>
<body>
<div class="header">
    <h3>NGADU</h3>
    <nav>
        <ul>
            <li><a href="<?=BASEURL.'/Petugas'?>">Halaman Petugas</a></li>
            <li><a href="<?=BASEURL.'/Petugas/logout/'?>">logout</a></li>
        </ul>
    </nav>
</div> 
<div class="latar">
<center><h1>DATA ADUAN</h1></center> 
<form class="pilih-bulan" method ="POST">
    <label for="bulan">masukkan bulan</label><br>
    <input type="month" name="bulan" value="<?=isset($_POST['bulan']) ? $_POST['bulan'] :''?>"> 
    <button type="submit" formaction="<?=BASEURL.'/Petugas/pilihan'?>">pilih</button>
    <button type="submit" formmethod="POST" formaction="<?=BASEURL.'/Petugas/cetak'?>">cetak</button>
</form>
    
<table class="paleBlueRows">
<thead>
        <tr>
            <th>No</th>
            <th>subjek aduan</th>
            <th>tanggal</th>
            <th>nik pelapor</th>
            <th>isi aduan</th>
            <th>foto</th>
            <th>status</th>
        </tr>
</thead>
<tbody>
<?php $x=0; foreach($data['pengaduan'] as $pd) :?>
        <tr>
            <td><?= ++$x?></td>
            <td><?= $pd['subjek']?></td>
            <td><?= $pd['tgl_pengaduan']?></td>
            <td><?= $pd['nik']?></td>
            <td><?= $pd['isi_laporan']?></td>
            <td><img style = "width:50px; height:50px" src="<?=BASEURL.'/Asset/image/'.$pd['foto']; ?>"></td>
            <?php if($pd['status'] == '0') {?>
            <td>belum diproses</td>
            <?php }else {?>
            <td><?= $pd['status']?></td>
            <?php }?>
        </tr>
        <?php endforeach;?>
</tbody>
</table>
</div> 
</body>
</html>
