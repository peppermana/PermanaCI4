<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action=" <?php echo site_url('process-login')  ?>" method="POST">

<label for="nama" name="nama">nama</label><br><input type="text" name="nama"><br>
<label for="password" name="password">password</label><br><input type="password" name="password"><br>

<button type="submit">submit</button>
    

</form>
</body>
</html>