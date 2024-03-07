<?php
	include "koneksi.php";
	session_start();
	ob_start();

	if (isset($_POST['login'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$kueri   = "select * from aman where username='$username' and password='$password'";
		$aman    = $konek->query($kueri);
		$cek     = $aman->num_rows;
	}
	if (@$cek > 0) {
		echo "login berhasil";
		header('location:navbar.php');
	} else {
		echo "your username and password are incorrect";
	}
	?>

<!doctype html>
<html lang="en">

<head>
	<title>yadistore</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body style="background-size:cover;background-image:url('1.jpg');">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">

				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
						<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/bg.jpg);"></div>
						<h3 class="text-center mb-0">Welcome</h3>
						<p class="text-center"></p>
						<form action="" method="post" class="login-form">
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
								<input type="text" name="username" class="form-control" placeholder="Username" required>
							</div>
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
								<input type="password" name="password" class="form-control" placeholder="Password" required>
							</div>
							<div class="form-group d-md-flex">

							</div>
							<div class="form-group">
								<button type="submit" name="login" class="btn form-control btn-primary rounded submit px-3">LOGIN</button>
							</div>
						</form>
						<div class="w-100 text-center mt-4 text">

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	

</body>

</html>