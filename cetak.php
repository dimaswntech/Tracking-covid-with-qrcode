<?php
//library phpqrcode
include "phpqrcode/qrlib.php";
include 'koneksi.php';
//library mpdf
define('_MPDF_PATH','mpdf/');
include(_MPDF_PATH . "mpdf.php");

//setting dan nama file pdf
$nama_dokumen='Data User';
$mpdf=new mPDF('utf-8', 'A4', 11, 'Georgia');
ob_start();
?>
<html>
<head>
</head>
<body>
    <?php

        $username = $_POST["username"];
        $query = mysqli_query($db1,"SELECT * FROM tbl_user WHERE username = '$username'")or die("faailed to query database".mysql_error());
        $row = mysqli_fetch_array($query);
    ?>
    <?php
        if($row['username'] == $username){?>
          <h1 style=" text-align: center;">Cetak Profile</h1>
          <br><br>
          <p>Nama : <?php echo $row['nama'] ?></p>
          <p>email : <?php echo $row['email'] ?></p>
          <p>No. Telepon : <?php echo $row['telp'] ?></p>
          <p>Umur : <?php echo $row['umur'] ?></p>
          <p>Alamat : <?php echo $row['alamat'] ?></p>
          <p>Kota : <?php echo $row['kota'] ?></p>
          <p>QR Code Validasi :</p>
          <img style=" margin-left:150px;" src="<?php echo "temp/".$row['username'].".png"; ?>" width="150px">
            
    <?php } ?>
</body>
</html>
<?php
mysqli_close($db1);
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$nama_dokumen.".pdf" ,'D');
?>