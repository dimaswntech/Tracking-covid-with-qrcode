<?php
//library phpqrcode
include "phpqrcode/qrlib.php";
include 'koneksi.php';

require 'lib/aes.php';
require 'lib/aesctr.php';

//direktory tempat menyimpan hasil generate qrcode jika folder belum dibuat maka secara otomatis akan membuat terlebih dahulu
$tempdir = "temp/"; 
if (!file_exists($tempdir))
    mkdir($tempdir);

?>
<html>
<head>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
   
    </style>
</head>
<body>
    <div align="center" style="margin-top: 50px;">

    <a href="download-pdf.php">Download PDF</a>
    <a href="tambah.php">Tambah</a>
    <a href="logout.php">LOGOUT</a>

    <table border="1">
        <thead>
            <th>No</th>
            <th>username</th>
            <th>alamat</th>
            <th>umur</th>
            <th>QRCode</th>
            <th>Opsi</th>
        </thead>
        <tbody>
        <?php
            $no = 1;
            $query = "SELECT * FROM tbl_user";
            $arsip1 = $db1->prepare($query);
            $arsip1->execute();
            $res1 = $arsip1->get_result();
            $key = "qrcode";
		    $workDir = $_SERVER['HTTP_HOST'];
            while ($row = $res1->fetch_assoc()) {
                $username = $row['username'];
                $umur = $row['umur'];
                $alamat = $row['alamat'];
                $id = $row['id'];
                $aesfile=['aesfile'];

                //Isi dari QRCode Saat discan
                $isi_teks1 = $username;
                //Nama file yang akan disimpan pada folder temp 
                $namafile1 = $username.".png";
                //Kualitas dari QRCode 
                $quality1 = 'H'; 
                //Ukuran besar QRCode
                $ukuran1 = 10; 
                $padding1 = 0; 
                
                QRCode::png($isi_teks1,$tempdir.$namafile1,$quality1,$ukuran1,$padding1);

                $namaFile = file_get_contents("temp/".$username.".png");
                $encFileQR = AesCtr::encrypt($namaFile,$key,128);
                $enkrip = file_put_contents("enkrip/".$username, $encFileQR);
                $qren = $workDir."enkrip/".$username.".png";
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $username; ?></td>
                <td><?php echo $alamat; ?></td>
                <td><?php echo $umur; ?></td>
                <td style="padding: 10px;"><img src="temp/<?php echo $namafile1; ?>" width="35px"></td>
                <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $row['id']; ?>">HAPUS</a>
							</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</body>
</html>
<?php mysqli_close($db1); ?>