<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Tutorial Membuat Form Login Responsive dengan Bootstrap</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="vendor/stylelog.css" rel="stylesheet">
</head>
<body class="text-center">
    <!-- <div id="frm">
        <form method="post" action="processu.php" >
            <p>
                <label>Username</label>
                <input type="text" name="username">
            </p>
            <p>
                <label>pass</label>
                <input type="text" name="password">
            </p>
            <p>
                <input type="submit" id="btn" value="Login">
            </p>
        </form>
    </div> -->

    <form class="form-signin" method="post" action="processu.php">
		<img class="mb-4" src="vendor/img/qrcovid.png" alt="" width="200" height="200">
		<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
		<label for="inputEmail" class="sr-only">Username</label>
		<input name="username" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
		<!-- <div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div> -->
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p> -->
	</form>
</body>
</html>