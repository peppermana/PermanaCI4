<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tabel Penulis</h1>

    <button><a href="form-insert-penulis">Tambah Data</a></button>
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama penulis</th>
            <th>Bio penulis</th>
            <th>Foto penulis</th>
            <th>Aksi</th>
        </tr>

        <?php
        $No = 1;
        foreach ($data_penulis as $key) {


        ?>
            <tr>
                <td><?= $No++; ?></td>
                <td><?= $key->nama_penulis; ?></td>
                <td><?= $key->bio_penulis; ?></td>
                <td><img src=" <?= base_url('./images/'. $key->foto_penulis);?>" alt="" width="80" height="80"></td>
                <td><a href="<?= base_url('delete-penulis/'. $key->id_penulis) ?>">DELETE</a> | <a href="<?= base_url('form-edit-penulis/'. $key->id_penulis) ?>">EDIT</a></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html> 