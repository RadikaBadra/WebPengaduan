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
    <link rel="stylesheet" href="<?=BASEURL;?>/Asset/css/indexTanggapan.css">    
    <title>Data Petugas</title>
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
<center><h1>DATA PETUGAS</h1></center> 
<br>
<div class="btn-tambah">
<a href="<?=BASEURL.'/Registrasi/petugas'?>">Tambah Operator</a>
</div> 
<br>
<table class="paleBlueRows">

<thead>
        <tr>
            <th>No</th>
            <th>id petugas</th>
            <th>nama</th>
            <th>username</th>
            <th>telepon</th>
            <th>level</th>
            <th>aksi</th>
        </tr>
</thead>
<tbody>
<?php $x=0; foreach($data['petugas'] as $ptg) :?>
        <tr>
            <td><?= ++$x?></td>
            <td><?= $ptg['id_petugas']?></td>
            <td><?= $ptg['nama_petugas']?></td>
            <td><?= $ptg['username']?></td>
            <td><?= $ptg['telp']?></td>
            <td><?= $ptg['level']?></td>
            <td><a class ="btn-tanggapi" href="<?=BASEURL;?>/Admin/EditOperator/<?= $ptg['id_petugas']?>">edit</a>
                <a class="btn-detail" href="<?=BASEURL;?>/Admin/HapusPetugas/<?=$ptg['id_petugas']?>" onclick="return confirm('Anda Yakin?')">hapus</a>
            </td>
        </tr>
<?php endforeach;?>
</tbody>
</table>
</div> 
</body>
</html>
