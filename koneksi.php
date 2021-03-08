<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'datatrack');
$connect = mysqli_connect(HOST, USER, PASS, DB1) or die ("Koneksi gagal!");
$db1 = new mysqli(HOST, USER, PASS, DB1); 
if(!$db1) {
    die("Koneksi Gagal : ".mysqli_connect_error());
   }

   //echo "Koneksi Berhasil";
?>