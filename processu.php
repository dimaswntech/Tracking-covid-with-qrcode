<?php
include "koneksi.php";
$tempdir = "temp/"; 
if (!file_exists($tempdir))
    mkdir($tempdir);

$username = $_POST["username"];
$password = $_POST["password"];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($connect,$username);
$password = mysqli_real_escape_string($connect,$password);

$result = mysqli_query($db1,"SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'") or die("faailed to query database".mysql_error());
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/pro/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/pro/css/fontawesome.css">
    <link rel="stylesheet" href="vendor/pro/style.css">
    <link rel="stylesheet" href="vendor/pro/mobile.css">
    <title>::Double navigation::</title>

    <style>
        .row{
            text-align:center;
            
        }
        .nav li{
            margin-left: 8px;
            padding: 15px;
        }
        
    </style>


</head>

<body>
    
    
    <header class="header">
       <!-- <a class="logo2"><i class="fa fa-user-circle"></i></a> -->
       <input type="checkbox" class="menu-btn" id="menu-btn">
       <a  class="navbar-brand mr-1" href="#">Selamat datang <?php echo $row['username']; ?></a>
       <label for="menu-btn" class="menu-icon"></label>
       <!-- <ul class="menu">
           <li class="active nav-link" ><a href="index.html">Home</a></li>
           <li class="nav-link" ><a href="#">About</a></li>
           <li class="nav-link" ><a href="#">Services</a></li>
           <li class="nav-link" ><a href="#">Blogs</a></li>
           <li class="nav-link" ><a href="#">Log In</a></li> -->



       </ul>

    </header>
    <!-- end top nav -->

    <!-- start body -->
    <div class="container my-5">
        <div class="row">
            <div class="col-12" >
            <?php
                    

                    if($row['username'] == $username && $row['password'] == $password){
                        echo "Login success welcome"." ". $row['username'];?>
                        <br>
                        <br>
                        <h1>Your QR Code</h1>
                        <img src="<?php echo "temp/".$row['username'].".png"; ?>" width="150px">
                        <br>
                        <br>
                        <br>
                        <p>Waktu anda untuk memperbaharui surat tinggal <?php echo $row['waktufile']; ?> hari </p>
                        <p><b>Status</b> anda saat ini</br><b>"<?php echo $row['hasil_rapid']; ?>"</b></p>
                        <?php
                        if($row['hasil_rapid'] == "Positif"){?>
                            <p>Segera Lapor ke </p><a href="tel:+6282242053245" style="color:black"><b>Sini</b></a>
                            
                        <?php }else{
                            echo "Selalu jaga kesehatan";
                        }
                        ?>
                        <?php
                    } else{
                        echo "failed";
                    }
                    ?>
                    </div>
        </div>
    </div>

    <!-- end  body -->


    <!-- start bottom nav -->
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


    <!-- end  bottom nav -->

    <!-- js files -->
    <script src="vendor/pro/felo/js/all.js"></script>
    <script src="vendor/pro/js/popper.min.js"></script>
    <script src="vendor/pro/js/bootstrap.min.js"></script>
    <script src="vendor/pro/js/jquery.min.js"></script>
</body>
</html>