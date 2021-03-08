<?php 

include 'koneksi.php';
$username = $_POST['username'];
$pass= $_POST['pass'];
date_default_timezone_set("Asia/Jakarta");
$tgl = date("Ymd");

$login = mysqli_query($db1,"SELECT * FROM tbl_petugas WHERE username_tugas='$username' AND password='$pass'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
$row = mysqli_fetch_array($login);
$sql="INSERT INTO tamu_petugas (username,tanggal) VALUES('$username','$tgl')";
$query = mysqli_query($db1, $sql) or die (mysqli_error($db1));

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	echo "Berhasil login!".$row['username_tugas'];
	
}else{
	 echo "Username & Password Anda Salah!";
}


?>