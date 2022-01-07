<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data</title>
</head>

<body>


    <h1>Form Data News</h1>
    

    <form action=" <?php echo site_url('proses-insert-news') ?>" method="POST" enctype="multipart/form-data">

        <label for="judul">Judul</label><br><input type="text" name="judul"><br>
        <label for="gambar">Gambar</label><br><input type="file" name="gambar"><br>
        <label for="isi">Isi</label><br><input type="text" name="isi"><br>
        <label for="tanggal">Tanggal</label><br><input type="date" name="tanggal"><br>
        <label for="penulis">Penulis</label><br><input type="text" name="penulis"><br>

        <button type="submit" name="submit">submit</button>

    </form>

</body>

</html>