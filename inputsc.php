<?php
include 'koneksi.php';
require 'lib/aes.php';
require 'lib/aesctr.php';
$id_scan=$_POST['id_scan'];
$qrcode=$_POST["qrcode"];
$id_tempat=$_POST['id_tempat'];
$id_petugas=$_POST['id_petugas'];

date_default_timezone_set("Asia/Jakarta");
$tgl = date("Y:m:d h:i:sa");
$key = "qrcode";
$encFile = AesCtr::decrypt($qrcode,$key,128);


$sql1 = "SELECT hasil_rapid FROM tbl_user WHERE username='$encFile'";
      $result = mysqli_query($db1, $sql1);

      if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
            $hasil=$row["hasil_rapid"];
            echo $hasil;
         }
      } else {
         echo "0 results";
      }

$sql=mysqli_query($db1,"INSERT INTO hasil_scan VALUES('','$id_tempat','$id_petugas','$encFile','$tgl','$hasil')");
// if($sql === true){
//     echo "sukses";
// }else{
//     echo "gagal";
// }

?>