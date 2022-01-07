<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>
<body>

<h1>Data News</h1><br>
<a href="logout">LOGOUT</a><br>
<button><a href="form-insert-news">button</a></button><br>
<table border="1" cellspacing="0" cellpadding="5">

<tr>
    <th>NO</th>
    <th>Judul</th>
    <th>Gambar</th>
    <th>Isi</th>
    <th>Tanggal</th>
    <th>Penulis</th>
    <th>Action</th>
</tr>

<?php 
$no = 1;
foreach($news_data as $key) {

?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $key->judul; ?></td>
    <td><img src="<?= base_url('images/'. $key->gambar);?>" alt="" height="80" width="80"></td>
    <td><?= $key->isi; ?></td>
    <td><?= $key->tanggal; ?></td>
    <td><?= $key->penulis; ?></td>
    <td> <a href="<?= 'edit-news/' .$key->id; ?>">Edit</a> | <a href="<?= base_url('delete/'. $key->id) ?> ">Delete</a></td>
</tr>
<?php } ?>

</table>
    
</body>
</html>