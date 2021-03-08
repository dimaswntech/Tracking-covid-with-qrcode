<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
date_default_timezone_set("Asia/Jakarta");
$tgl = date("Ymd");

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db1,"select * from tbl_admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

$sql = "INSERT into tamu_admin(name_admin,tanggal) VALUES('$username','$tgl')";
$query = mysqli_query($db1, $sql) or die (mysqli_error($db1));

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dasad.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>