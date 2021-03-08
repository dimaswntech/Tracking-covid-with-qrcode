<?php
	include "koneksi.php";
 
	$name = $_POST["nama_petugas"];
    $tempat = $_POST["tempat_tugas"];
	$idt = $_POST["id_petugas"];
	

 
	//date_default_timezone_set("Asia/Jakarta");
 
	//$tgl = date("Y:m:d");
 
	// query sql
	$sql = "UPDATE tbl_petugas 
			SET nama_petugas='$name',
				tempat_tugas='$tempat'
			WHERE id_petugas='$idt'";
	$query = mysqli_query($db1, $sql) or die (mysqli_error($db1));
 
	if($query){
        echo "Data berhasil dirubah!";
        header("location:listpet.php");
	} else {
		echo "Error".$sql."<br>".mysqli_error($db1);
	}
 
	mysqli_close($db1);
 
?>