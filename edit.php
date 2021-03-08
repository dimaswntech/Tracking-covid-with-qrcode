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
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Blank Page</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet">
	<style>
	.form{
		margin-top:50px;
		margin-left:100px;
	}	
	</style>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="dasad.php">Admin Covid - 19</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form> -->

      <!-- Navbar -->
      <!-- <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul> -->

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="dasad.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <!-- <h6 class="dropdown-header">Login Screens:</h6> -->
            <a class="dropdown-item" href="listad.php">List Pengguna</a>
            <a class="dropdown-item" href="register.html">List Tempat Lokasi</a>
            <a class="dropdown-item" href="forgot-password.html">List Petugas<br>Tempat Lokasi</a>
            <!-- <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6> -->
            <a class="dropdown-item" href="404.html">View Traffic</a>
            <a class="dropdown-item" href="corno.php">View Update<br>Covid - 19</a>
          </div>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Log Out</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>

          <!-- Page Content -->
          <!-- <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Tabel Covid - 19</div>
            <div class="card-body">
              <div class="table-responsive">
              <a href="download-pdf.php">Download PDF</a>
              <a href="tambah.php">Tambah</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>email</th>
                        <th>file</th>
                        <th>waktu</th>
                        <th>Alamat</th>
                        <th>Umur</th>
                        <th>QRCode</th>
                        <th>Opsi</th>
                    </tr>
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
                      $email = $row['email'];
                      $file = $row['file_hasil'];
                      $waktufile=$row['waktufile'];
                      $umur = $row['umur'];
                      $alamat = $row['alamat'];
                      $id = $row['id'];
                      $aesfile=['aesfile'];
                      

                      //Isi dari QRCode Saat discan
                      $isi_teks1 = $username." ".$email;
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
                      <td><?php echo $email; ?></td>
                      <td><a href="pdf/<?php echo $file?>">Lihat file</a></td>
                      <td><?php echo $waktufile; ?></td>
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
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 12:47 PM</div>
		  </div> -->
		  <h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	
	$id = $_GET['id'];
	$data = mysqli_query($db1,"select * from tbl_user where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
        
			<table>
				<tr>			
					<td>Nama</td>
					<td>
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="username" value="<?php echo $d['username']; ?>">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>Umur</td>
					<td><input type="number" name="umur" value="<?php echo $d['umur']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Surat Test</td>
					<td><input type="file" name="file_hasil" value="<?php echo $d['file_hasil']; ?>"></td>
				</tr>
        <tr>
				<td>Tanggal Rapid Test</td>
				<td><input type="date" name="tanggalrapid" value="<?php echo $d['waktu_rapid']; ?>"></td>
			</tr>
      <tr>
				<td>Tempat/Lokasi Rapid Test</td>
				<td><input type="text" name="lokasirapid" value="<?php echo $d['alamat_rapid']; ?>"></td>
			</tr>
      <tr>
				<td>Hasil Rapid Test</td>
				<td><input type="text" name="hasilrapid" value="<?php echo $d['hasil_rapid']; ?>"></td>
			</tr>     
				<tr>
					<td>Telepon</td>
					<td><input type="text" name="telp" value="<?php echo $d['telp']; ?>"></td>
				</tr>
				<tr>
					<td>Kota</td>
					<td><input type="text" name="kota" value="<?php echo $d['kota']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Admin QR-Code Covid-19</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
