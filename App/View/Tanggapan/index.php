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
    <link rel="stylesheet" href="<?=BASEURL;?>/Asset/css/indexTanggapan.css">
    <title>Tanggapan</title>
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
<table class="paleBlueRows">
<thead>
        <tr>
            <th>No</th>
            <th>subjek aduan</th>
            <th>tanggal</th>
            <th>nik pelapor</th>
            <th>status</th>
            <th>aksi</th>
        </tr>
</thead>
<tbody>
<?php $x = 0; foreach($data['pengaduan'] as $pd) :?>
        <tr>
            <td>
            <?= ++$x?></td>
            <td><?= $pd['subjek']?></td>
            <td><?= $pd['tgl_pengaduan']?></td>
            <td><?= $pd['nik']?></td>
            <?php if($pd['status'] == '0') {?>
            <td>belum diproses</td>
            <?php }else {?>
            <td><?= $pd['status']?></td>
            <?php }?>
            <td>
            <?php if($pd['status'] == '0') {?>
                <a class ="btn-tanggapi" href="<?=BASEURL;?>/Tanggapan/ambilpengaduan/<?=$pd['id_pengaduan']?>">tanggapi</a>
            <?php }else if($pd['status'] == 'proses'){?>
                <a class ="btn-tanggapi" href="<?=BASEURL;?>/Tanggapan/ambilpengaduan/<?=$pd['id_pengaduan']?>">tanggapi</a>
                <a class ="btn-tandai" href="<?=BASEURL;?>/Tanggapan/detail/<?=$pd['id_pengaduan']?>">tandai selesai</a>
            <?php }else{?>
                <a class ="btn-detail" href="<?=BASEURL;?>/Tanggapan/detail/<?=$pd['id_pengaduan']?>">detail</a>
            <?php }?>
            </td>
        </tr>
        <?php endforeach;?>
</tbody>
</table>
</div> 
</body>
</html>
