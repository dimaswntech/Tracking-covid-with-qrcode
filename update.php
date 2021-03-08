<?php
	include "koneksi.php";
	require 'lib/aes.php';
require 'lib/aesctr.php';

	$key="qrcode";
	$nameu = $_POST["username"];
	$emailu = $_POST["email"];
    $umuru = $_POST["umur"];
    $alamatu = $_POST["alamat"];
	$idu = $_POST["id"];
	$fileu=$_POST["file_hasil"];
	$telpu=$_POST["telp"];
	$kotau=$_POST["kota"];
	$passu=$_POST["password"];
	$hasilrpd=$_POST["hasilrapid"];
	$tanggalrpd=$_POST["tanggalrapid"];
	$lokasirpd=$_POST["lokasirapid"];
	date_default_timezone_set("Asia/Jakarta");
    $tgl = date("Ymd");
    $btsdays    =strtotime (' + 4 week', strtotime($tgl));
	$tglakhir = date('Y-m-d', $btsdays);
	$encname=AesCtr::encrypt($nameu,$key,128);

 
	//date_default_timezone_set("Asia/Jakarta");
 
	//$tgl = date("Y:m:d");
 
	// query sql
	$sql = "UPDATE tbl_user 
			SET username='$nameu',
				email='$emailu',
				umur='$umuru',
				alamat='$alamatu',
				file_hasil='$fileu',
				waktufile='$tglakhir',
				telp='$telpu',
				kota='$kotau',
				aesqr='$encname',
				waktu_rapid='$tanggalrpd',
				alamat_rapid='$lokasirpd',
				hasil_rapid='$hasilrpd',
				password='$passu'
			WHERE id='$idu'";
	$query = mysqli_query($db1, $sql) or die (mysqli_error($db1));
 
	if($query){
        echo "Data berhasil dirubah!";
        header("location:listad.php");
	} else {
		echo "Error".$sql."<br>".mysqli_error($db1);
	}
 
	mysqli_close($db1);
 
?>