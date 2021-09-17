<?php
if($_SESSION['petugas']['level'] != 'admin'){
    header('Location:'.BASEURL);
}
?>
<!DOCT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=BASEURL;?>/Asset/css/indexTanggapan.css">
    <title>Aduan</title>
</head>
<body>
<div class="header">
    <h3>NGADU</h3>
    <nav>
        <ul>
            <li><a href="<?=BASEURL.'/Admin'?>">Halaman Admin</a></li>
            <li><a href="<?=BASEURL.'/Petugas/logout/'?>">logout</a></li>
        </ul>
    </nav>
</div> 
<div class="latar"> 
<center><h1>DATA ADUAN</h1></center>
<br> 
<table class="paleBlueRows">
<thead>
        <tr>
            <th>No</th>
            <th>subjek aduan</th>
            <th>NIK</th>
            <th>tanggal</th>
            <th>isi aduan</th>
            <th>foto</th>
            <th>status</th>
            <th>aksi</th>
        </tr>
</thead>
<tbody>
<?php $x=0; foreach($data['pengaduan'] as $pd) :?>
        <tr>
            <td><?= ++$x?></td>
            <td><?= $pd['subjek']?></td>
            <td><?= $pd['nik']?></td>
            <td><?= $pd['tgl_pengaduan']?></td> 
            <td><?= $pd['isi_laporan']?></td>
            <td><img style = "width:100px; height:100px" src="<?=BASEURL.'/Asset/image/'.$pd['foto']; ?>"></td>
            <?php if($pd['status'] == '0') {?>
            <td>belum diproses</td>
            <?php }else {?>
            <td><?= $pd['status']?></td>
            <?php }?>
            <td><a class="btn-detail" href="<?=BASEURL;?>/Admin/detailAduan/<?= $pd['id_pengaduan']?>">detail</a></td>
        </tr>
        <?php endforeach;?>
</tbody>
</table>
</div> 
</body>
</html>
