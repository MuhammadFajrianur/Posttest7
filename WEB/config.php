<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "kamera";
$db = mysqli_connect($hostname,$username,$password,$database);
if(!$db){
  echo "Koneksi tidak terhubung";
}
?>