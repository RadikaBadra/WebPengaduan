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
    <title>Edit Operator</title>
    <link rel="stylesheet" href="<?=BASEURL;?>/Asset/css/editpetugas.css">
</head>
<body>
<div class="latar">
<div class="header">
    <h3>NGADU</h3>
    <nav>
        <ul> 
            <li><a href="<?=BASEURL.'/Admin/dataoperator/'?>">Data Petugas</a></li>
            <li><a href="<?=BASEURL.'/Petugas/logout/'?>">logout</a></li>
        </ul>
    </nav>
</div> 
<div class="form-registrasi">
    <div class="head-form">
        <h1>Edit Opertor</h1>
    </div>
    <div class="container">
            <form action="<?= BASEURL ?>/Admin/proseseditOperator" method="POST">
                <label for="nama">id petugas</label><br>
                <input type="text" name="id_petugas"  placeholder="masukkan nama" readonly value = "<?= $data['petugas']['id_petugas']?>" ><br>
                <label for="nama">masukkan nama</label><br>
                <input type="text" name="nama_petugas"  placeholder="masukkan nama" value = "<?= $data['petugas']['nama_petugas']?>" ><br>
                <label for="username">username</label><br>
                <input type="text" name="username"  placeholder="masukkan username" value = "<?= $data['petugas']['username'] ?>" ><br>
                <label for="password">password</label><br>
                <input type="password" name="password"  placeholder="masukkan password" value = "<?= $data['petugas']['password'] ?>"><br>
                <label for="telepon">no. telepon</label><br>
                <input type="telepon" name="telepon" required placeholder="masukkan no. telepon" value = "<?= $data['petugas']['telp'] ?>"><br>
                <button type="submit">EDIT</button>
            </form>
    </div>
</div>
</div>
</body>
</html>