<?php
include "koneksi.php";
require 'lib/aes.php';
require 'lib/aesctr.php';
$pdfdir = "pdf/"; 
    if (!file_exists($pdfdir))
    mkdir($pdfdir);

    
   


 
	$key="qrcode";
    $nameu = $_POST["username"];
    $namalu= $_POST["nama_lengkap"];
    $emailu = $_POST["email"];
    $telpu=$_POST["telp"];
	$namafile=$_FILES['filehasil']['name'];
	$tmpfile=$_FILES['filehasil']['tmp_name'];
	$umuru = $_POST["umur"];
    $alamatu = $_POST["alamat"];
    $kotau = $_POST["kota"];
    $passu = $_POST["pass"];
    $tglrpd=$_POST["tanggalrapid"];
    $lokrpd=$_POST["lokasirapid"];
    $hslrpd=$_POST["hasilrapid"];
    $qrimagename = $nameu;
    $qrimage = $qrimagename.".png";
    $workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode-image-database/temp/".$qrimagename.".png";
    $qren = $workDir."/qrr/qrcode-image-database/enkrip/".$nameu.".png";
    $encsql="INSERT INTO hasil_scan (qrcode) SELECT username FROM tbl_user WHERE ";
    $encname=AesCtr::encrypt($nameu.".".$umuru,$key,128);
    $encFile=AesCtr::encrypt($encsql,$key,128);
	date_default_timezone_set("Asia/Jakarta");
	move_uploaded_file($tmpfile, 'pdf/'.$namafile);
    $tgl = date("Ymd");
    $btsdays    =strtotime (' + 4 week', strtotime($tgl));
    $tglakhir = date('Y-m-d', $btsdays);
    // query sql
    $sql = "INSERT into tbl_user(username,nama,email,telp,file_hasil,waktu_rapid,alamat_rapid,hasil_rapid,waktufile,umur,alamat,kota,password,qrlink,qrimage,aesfile,aesqr,tgl) VALUES('$nameu.$umuru','$namalu','$emailu','$telpu','$namafile','$tglrpd','$lokrpd','$hslrpd','$tglakhir','$umuru','$alamatu','$kotau','$passu','$qrlink','$qrimage','$encFile','$encname','$tgl')";
	$query = mysqli_query($db1, $sql) or die (mysqli_error($db1));
 
    if($query){
        echo "Data berhasil di insert!";
        header("location:listad.php");
    } else {
        echo "Error :".$sql."<br>".mysqli_error($db1);
    }
 
    mysqli_close($db1);


 
?>