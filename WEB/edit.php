<?php
require "config.php";
if(isset($_GET['id'])){
    $query = mysqli_query($db,"SELECT * FROM web WHERE id=$_GET[id]");
    $result = mysqli_fetch_assoc($query);
    $merk = $result['merk'];
    $type = $result['type'];
    $harga = $result['harga'];
}

if(isset($_POST['submit'])){
    $query = mysqli_query($db,"UPDATE web SET merk='$_POST[merk]',type='$_POST[type]',harga='$_POST[harga]',harga='$_POST[harga]' WHERE id=$_GET[id]");
    if($query){
        header("Location:tampil.php");
    } else {
        echo "Update gagal";
    }
}

?>
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
        <h1 class="judul">kamera</h1>
    
    <div class="form-class">
        <h3>Edit Data Kamera</h3>
        <form action="" method="post">
            <label for="">Merk Kamera</label><br>
            <input type="text" name="merk" class="form-text" value='<?=$merk?>'><br>
            
            <label for="">Type Kamera</label><br>
            <input type="text" name="type" class="form-text" value='<?=$type?>'><br>
            
            <label for="">harga</label><br>
            <input type="harga" name="harga" class="form-text" value='<?=$harga?>'><br>
            

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>

</body>
</html>