<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($db1,"delete from tbl_admin where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:lista.php");
 
?>