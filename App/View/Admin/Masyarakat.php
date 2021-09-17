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
    <title>Data Masyarakat</title>
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
<center><h1>DATA MASYARAKAT</h1></center> 
<br>
<table class="paleBlueRows">
<thead>
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>NIK</th>
            <th>username</th>
            <th>telepon</th>
        </tr>
</thead>
<tbody>
<?php $x=0; foreach($data['masyarakat'] as $msy) :?>
        <tr>
            <td><?= ++$x?></td>
            <td><?= $msy['nama']?></td>
            <td><?= $msy['nik']?></td>
            <td><?= $msy['username']?></td> 
            <td><?= $msy['telepon']?></td>
        </tr>
        <?php endforeach;?>
</tbody>
</table>
</div> 
</body>
</html>
