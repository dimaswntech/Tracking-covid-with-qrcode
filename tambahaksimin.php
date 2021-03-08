<?php
include "koneksi.php";
require 'lib/aes.php';
require 'lib/aesctr.php';

    $namea = $_POST["username"];
    $usera= $_POST["nama_lengkap"];
    $passa = $_POST["pass"];
    date_default_timezone_set("Asia/Jakarta");
    $tgl = date("Ymd");
    $btsdays    =strtotime (' + 4 week', strtotime($tgl));
    $tglakhir = date('Y-m-d', $btsdays);
    // query sql
    $sql = "INSERT into tbl_admin(username,name_admin,password) VALUES('$namea','$usera','$passa')";
	$query = mysqli_query($db1, $sql) or die (mysqli_error($db1));
 
    if($query){
        echo "Data berhasil di insert!";
        header("location:lista.php");
    } else {
        echo "Error :".$sql."<br>".mysqli_error($db1);
    }
 
    mysqli_close($db1);


 
?>