<?php
  require "config.php";

  if(isset($_POST['submit'])){
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $harga = $_POST['harga'];
    $query = mysqli_query($db,"INSERT INTO `web`( `merk`, `type`, `harga`) VALUES ('$merk','$type','$harga')");
    var_dump($_FILES);
    if(isset($_POST['submit'])){
      if($query){
          header("Location:tampil.php");
      } else {
          echo "Update gagal";
      }
  }
  }
?> 