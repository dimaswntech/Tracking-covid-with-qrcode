<?php
include "koneksi.php";
require 'lib/aes.php';
require 'lib/aesctr.php';
$pdfdir = "pdf/"; 
    if (!file_exists($pdfdir))
    mkdir($pdfdir);

    $t    =time();
    $day = (date("d",$t));
    $month = (date("m",$t));
    $year = (date("Y",$t));
    $days    =(int)((mktime (0,0,0,$month,$day+3,$year) - time())/86400);
 
	
    $namet = $_POST["nama"];
    $inisialt=$_POST["inisial"];
    $pnjt = $_POST["pnj_jwb"];
    $alamatt=$_POST["alamat"];
    
    $query= "SELECT * FROM tbl_tempat order by id_tempat desc limit 1";
    $result = mysqli_query($db1,$query);
    $row=mysqli_fetch_array($result);

    $lastid=$row['id_tempat'];
    if($lastid ==""){
        $newid="ind";
    }else{
        $newid=substr($lastid,3);
        $newid=intval($newid);
        $newid="ind".($newid+1);
    }
    
    
	date_default_timezone_set("Asia/Jakarta");
	
    $tgl = date("Y:m:d");
    // query sql
    $sql = "INSERT into tbl_tempat(id_tempat,nama_tempat,inisial_tempat,peng_jwb_tempat,alamat_tempat) VALUES('$newid','$namet','$inisialt','$pnjt','$alamatt')";
	$query = mysqli_query($db1, $sql) or die (mysqli_error($db1));
 
    if($query){
        echo "Data berhasil di insert!";
        header("location:listtem.php");
    } else {
        echo "Error :".$sql."<br>".mysqli_error($db1);
    }
 
    mysqli_close($db1);


 
?>