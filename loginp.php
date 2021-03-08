<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
	<meta name="author" content="">
	
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <style>
      .card-header{
        text-align: center;
      }
      .container{
        margin-top: 150px;
      }
    </style>
</head>
<body class="bg-dark">

	<?php 
	if(isset($_GET['pesan'])){
		
		
		if($_GET['pesan'] == "gagal"){
			//echo "Login gagal! username dan password salah!";
			echo "
        <script type='text/javascript'>
        alert('Login gagal! username dan password salah!');
        
        </script>";
		}else if($_GET['pesan'] == "logout"){
			echo "
        <script type='text/javascript'>
        alert('Anda telah berhasil logout');
        
        </script>";
			//echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			//echo "Anda harus login untuk mengakses halaman admin";
			echo "
        <script type='text/javascript'>
        alert('Anda harus login untuk mengakses halaman admin');
        
        </script>";
			
		}
	}
	?>



	<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">SELAMAT DATANG DI WEBSITE PIMPINAN<br>PELACAKAN COVID - 19</div>
        <div class="card-body">
          <form method="post" action="cek_loginp.php">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email / UserName</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <!-- <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label> -->
              </div>
            </div>
			<input type="submit" class="tombol_login" value="LOGIN">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" >Pimpinan</a>
            <a class="d-block small" >QR Code Covid-19</a>
          </div>
        </div>
      </div>
    </div>

	<script>

</script>

</body>
</html>     