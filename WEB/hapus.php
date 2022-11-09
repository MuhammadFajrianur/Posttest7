<?php
require "config.php";
if(isset($_GET['id'])){
  $query = mysqli_query($db,"DELETE FROM web WHERE id=$_GET[id]");
  if($query){
    header("Location:tampil.php");
  } else {
    echo "Delete gagal";
  }
}
?>