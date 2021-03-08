<?php
include "koneksi.php";
require 'lib/aes.php';
require 'lib/aesctr.php';
$pdfdir = "pdf/"; 
    if (!file_exists($pdfdir))
    mkdir($pdfdir);

    
    $namep = $_POST["nama_petugas"];
    $lokap = $_POST["tempat_tugas"];
    $inip = $_POST["inisial"];
    $passp=$_POST["pass"];
    $userp=strtolower($namep);
    $inis=$inip.substr($userp,1,2);
    
    $query= "SELECT * FROM tbl_petugas order by id_petugas desc limit 1";
    $result = mysqli_query($db1,$query);
    $row=mysqli_fetch_array($result);

    $lastid=$row['id_petugas'];
    if($lastid ==""){
        $newid=$inip;
    }else{
        $newid=substr($lastid,3);
        $newid=intval($newid);
        $newid=$inip.($newid+1);
    }
    
	date_default_timezone_set("Asia/Jakarta");
	
    $tgl = date("Y:m:d");
    // query sql
    $sql = "INSERT into tbl_petugas(id_petugas,username_tugas,nama_petugas,tempat_tugas,password) VALUES('$newid','$userp','$namep','$lokap','$passp')";
	$query = mysqli_query($db1, $sql) or die (mysqli_error($db1));
 
    if($query){
        echo "Data berhasil di insert!";
        header("location:listpet.php");
    } else {
        echo "Error :".$sql."<br>".mysqli_error($db1);
    }
 
    mysqli_close($db1);


 
?>