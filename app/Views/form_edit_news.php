<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data</title>
</head>
<body>
    

<h1>Form Edit</h1>

<form action="<?php echo site_url('edit/'.$post['id'])  ?>" method="POST" enctype="multipart/form-data">

<label for="judul">Judul</label><br><input type="text" name="judul" value="<?= $post['judul']?>"><br>
<label for="gambar">Gambar</label><br><input type="file" name="gambar" value=" <?= $post['gambar']?>"><br>
<label for="isi">Isi</label><br><input type="text" name="isi" value="<?= $post['isi']?>"><br>
<label for="tanggal">Tanggal</label><br><input type ="date" name="tanggal" value="<?= $post['tanggal']?>"><br>
<label for="penulis">Penulis</label><br><input type="text" name="penulis" value="<?= $post['penulis']?>"><br>

<button type="submit">submit</button>

</form>

</body>
</html>