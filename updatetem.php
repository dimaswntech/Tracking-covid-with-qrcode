<?php
	include "koneksi.php";
 
	$namet = $_POST["nama"];
    $pnjt = $_POST["pnj_jwb"];
	$alamatt=$_POST["alamat"];
	$inisialt=$_POST["inisial"];
	$idt = $_POST["id"];
	

 
	//date_default_timezone_set("Asia/Jakarta");
 
	//$tgl = date("Y:m:d");
 
	// query sql
	$sql = "UPDATE tbl_tempat 
			SET nama_tempat='$namet',
			inisial_tempat='$inisialt',
				peng_jwb_tempat='$pnjt',
				alamat_tempat='$alamatt'
			WHERE id_tempat='$idt'";
	$query = mysqli_query($db1, $sql) or die (mysqli_error($db1));
 
	if($query){
        echo "Data berhasil dirubah!";
        header("location:listtem.php");
	} else {
		echo "Error".$sql."<br>".mysqli_error($db1);
	}
 
	mysqli_close($db1);
 
?>