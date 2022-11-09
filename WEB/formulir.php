<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lynx.Studio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="judul">Kamera</h1>
    <div class="form-class">
        <h3>Tambah Kamera </h3><br>
        <form action="tambah.php" method="post" enctype="multipart/form-data">

            <label for="">Merk Kamera</label><br>
            <input type="text" name="merk" class="form-text"><br>

            <label for="">Type Kamera</label><br>
            <input type="text" name="type" class="form-text"><br>

            <label for="">Harga</label><br>
            <input type="text" name="harga" class="form-text"><br>

        

            <input type="submit" name="submit" value="Kirim" class="btn-submit">

        </form>
    </div>

</body>

</html>