<?php
	include "koneksi.php";
 
	$usera = $_POST["username"];
	$namea = $_POST["name"];
    $passa=$_POST["password"];
	$idu = $_POST["id"];
	echo $idu;


 
	//date_default_timezone_set("Asia/Jakarta");
 
	//$tgl = date("Y:m:d");
 
	// query sql
	$sql = "UPDATE tbl_admin 
			SET username='$usera',
				name_admin='$namea',
				password='$passa'
			WHERE id='$idu'";
	$query = mysqli_query($db1, $sql) or die (mysqli_error($db1));
 
	if($query){
        echo "Data berhasil dirubah!";
        header("location:lista.php");
	} else {
		echo "Error".$sql."<br>".mysqli_error($db1);
	}
 
	mysqli_close($db1);
 
?>