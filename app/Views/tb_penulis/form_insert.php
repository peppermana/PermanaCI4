<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>

<h1>Form Insert</h1>
    <form action=" <?= site_url('process-insert-penulis')?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama_penulis">Nama Penulis</label>
            <input type="text" name="nama_penulis">
        </div>
        <div class="form-group">
            <label for="bio_penulis">Bio Penulis</label>
            <textarea name="bio_penulis" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="foto_penulis">Foto Penulis</label>
            <input type="file" name="foto_penulis">
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>