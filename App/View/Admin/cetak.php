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
    <title>Laporan</title>
</head>
<body>
<center><h1>PELAPORAN PENGADUAN</h1></center>
<center><h2>PEMERINTAH KOTA DENPASAR</h2></center>

<table class="paleBlueRows">
<thead>
        <tr>
            <th>No</th>
            <th>subjek aduan</th>
            <th>tanggal</th>
            <th>nik</th>
            <th>isi aduan</th>
            <th>foto</th>
            <th>status</th>
        </tr>
</thead>
<tbody>
<?php $x=0; foreach($data['pilihan'] as $pd) :?>
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
<script>
		window.print();
        window.onafterprint = function(){
        window.location = "<?=BASEURL.'/Admin/laporan'?>";
        }
</script>
</body>
</html>