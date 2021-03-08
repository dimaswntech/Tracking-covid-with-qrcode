<?php
//library phpqrcode
include "phpqrcode/qrlib.php";
include 'koneksi.php';
include 'corona.php'; 

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
            <a class="dropdown-item" href="listtem.php">List Tempat Lokasi</a>
            <a class="dropdown-item" href="listpet.php">List Petugas<br>Tempat Lokasi</a>
            <!-- <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6> -->
            <a class="dropdown-item" href="hasil.php">View Traffic</a>
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
          <div class="card mb-3">
          
    
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1 class="text-center mt-5">SEBARAN COVID19</h1>

            <h6>GLOBAL</h6>
            <hr/>
            <div class="row mb-5"> 
                <div class="col-sm-4">
                    <div class="card text-white bg-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL POSITIF</h5>
                                <H1><?= $jumlah_positif;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/emoji-04.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-success">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL SEMBUH</h5>
                                <H1><?= $jumlah_sembuh;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/emoji-01.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL MENINGGAL</h5>
                                <H1><?= $jumlah_meninggal;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/emoji-03.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div> 

            <h6>INDONESIA</h6>
            <hr/>
            <div class="row mt-5 mb-5"> 
                <div class="col-sm-4">
                    <div class="card text-white bg-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL POSITIF</h5>
                                <H1><?= $positif;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/emoji-04.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-success">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL SEMBUH</h5>
                                <H1><?= $sembuh;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/emoji-01.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL MENINGGAL</h5>
                                <H1><?= $meninggal;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/emoji-03.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <h6>PROVINSI</h6>
            <hr/>
            <div class="row mt-5 mb-5"> 
            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Positif</th>
                    <th scope="col">Sembuh</th>
                    <th scope="col">Meninggal</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no=1;
                foreach ($data_prov as $rows) { ?>
                <tr>
                    <th scope="row"><?php  echo $no;?></th>
                    <td><?php echo $rows->attributes->Provinsi;?></td>
                    <td><?php echo $rows->attributes->Kasus_Posi;?></td>
                    <td><?php echo $rows->attributes->Kasus_Semb;?></td>
                    <td><?php echo $rows->attributes->Kasus_Meni;?></td>
                </tr>
                <?php 
                $no++;
            } ?>
            </tbody>
            </table>
            </div> 
        </div>

    </main>

    <!-- <div class="main-navigation">
        <nav class="nav">
            <ul>
                <li><a href="processu.php"><i class="fas fa-qrcode fa-2x"></i></a><p>QR Code</p></li>
                <li><a href="#"><i class="fas fa-list-ul fa-2x"></i></a><p>Team</p></li>
                <li><a href="cormo.php"><i class="fas fa-ambulance fa-2x"></i></a><p>Email</p></li>
                <li><a href="#"><i class="fas fa-sign-in-alt fa-2x"></i></a><p>Log Out</p></li>
            </ul>

        </nav>
    </div> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="vendor/pro/felo/js/all.js"></script>
    <script src="vendor/pro/js/popper.min.js"></script>
    <script src="vendor/pro/js/bootstrap.min.js"></script>
    <script src="vendor/pro/js/jquery.min.js"></script>  
          </div>

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
