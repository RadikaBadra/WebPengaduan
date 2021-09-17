<?php
if(!isset($_SESSION['data'])){
    header('Location:'.BASEURL);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?=BASEURL;?>/Asset/css/editmasyarakat.css">
    <title>Edit Masyarakat</title>
</head>
<body>
<div class="header">
    <h3>NGADU</h3>
    <nav>
        <ul>
            <li><a href="<?=BASEURL.'/Home'?>">Home</a></li>
            <li><a href="<?=BASEURL.'/Home/logout/'?>">logout</a></li>
        </ul>
    </nav>
</div>
<div class="latar">
    <div class="form-tambah">
    <div class="head-form">
        <h1>Edit Data</h1>
    </div>
        <div class="container">
                <form action="<?= BASEURL ?>/Home/proseseditMasyarakat" method="POST">
                    <label for="nama">masukkan nama</label><br>
                    <input type="text" name="nama"  placeholder="masukkan nama" value = "<?= $_SESSION['data']['nama'] ?>" ><br>
                    <label for="username">username</label><br>
                    <input type="text" name="username"  placeholder="masukkan username" value = "<?= $_SESSION['data']['username'] ?>" ><br>
                    <label for="telepon">no. telepon</label><br>
                    <input type="telepon" name="telepon" required placeholder="masukkan no. telepon" value = "<?= $_SESSION['data']['telepon'] ?>"><br>
                    <button type="submit">EDIT</button>
                </form>
        </div>
    </div>
</div>
</body>
</html>