<?php include 'corona.php'; 

// include "koneksi.php";
// $tempdir = "temp/"; 
// if (!file_exists($tempdir))
//     mkdir($tempdir);

// // $username = $_POST["username"];
// // $password = $_POST["password"];

// $username = stripcslashes($username);
// $password = stripcslashes($password);
// $username = mysqli_real_escape_string($connect,$username);
// $password = mysqli_real_escape_string($connect,$password);

// $result = mysqli_query($connect,"SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'") or die("faailed to query database".mysql_error());
// $row = mysqli_fetch_array($result);
// ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/pro/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/pro/css/fontawesome.css">
    <link rel="stylesheet" href="vendor/pro/style.css">
    <link rel="stylesheet" href="vendor/pro/mobile.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>COVID19</title>
  </head>
  <body>
  <header class="header">
       <!-- <a class="logo2"><i class="fa fa-user-circle"></i></a> -->
       <input type="checkbox" class="menu-btn" id="menu-btn">
       <a class="navbar-brand mr-1" href="#">Sebaran Covid</a>
       <label for="menu-btn" class="menu-icon"></label>
       <!-- <ul class="menu">
           <li class="active nav-link" ><a href="index.html">Home</a></li>
           <li class="nav-link" ><a href="#">About</a></li>
           <li class="nav-link" ><a href="#">Services</a></li>
           <li class="nav-link" ><a href="#">Blogs</a></li>
           <li class="nav-link" ><a href="#">Log In</a></li> -->



       </ul>

    </header>
    
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

    <div class="main-navigation">
        <nav class="nav">
            <ul>
                <li><a href="processu.php"><i class="fas fa-qrcode fa-2x"></i></a><p>QR Code</p></li>
                <li><a href="#"><i class="fas fa-list-ul fa-2x"></i></a><p>Team</p></li>
                <li><a href="cormo.php"><i class="fas fa-ambulance fa-2x"></i></a><p>Email</p></li>
                <li><a href="#"><i class="fas fa-sign-in-alt fa-2x"></i></a><p>Log Out</p></li>
            </ul>

        </nav>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="vendor/pro/felo/js/all.js"></script>
    <script src="vendor/pro/js/popper.min.js"></script>
    <script src="vendor/pro/js/bootstrap.min.js"></script>
    <script src="vendor/pro/js/jquery.min.js"></script>  
</body>
</html>