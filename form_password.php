<?php
	session_start();
	if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
		echo "<script>alert('Maaf, untuk mengakses halaman ini, Anda harus Login terlebih dahulu, Terima Kasih.');
			window.location.href='index.php'</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ganti Password</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="assets/js/web.webmanifest">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/styles.css">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	
</head>

<body>
<div>
	
<style>
body {
	background-image: url('assets/images/');
	background-size: cover; 
}	
<style>
  body {
    background-color: #F0ECE5;
  }
  .navbar{
    background-color: #008B8B;
  }
  .container-fluid{
    padding-right: 5px;
  }
  img.avatar {
    margin: 5px;
    margin-right: 10px;
    width: 10%;
    border-radius: 15%;
  }
  
  </style>
</style>

</head>
<body>

<nav class="navbar navbar-expand-sm  navbar-dark">
	<div class="container">
		<a class="navbar-brand" href="menuutama_Admin.php"><img src="assets/images/logogudang.gif" width="70px" height="70px" alt="Logo" class="logo">&nbsp;SISTEM INFORMASI GUDANG</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
		  <span class="navbar-toggler-icon"></span>
		</button>
			<div class="cart-items-container" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item" >
						<form class="dropdown-item" action="logout.php" method="post" >
							<button type="submit" class="btn btn-outline-light" >Logout</button>
						</form>
					</li>
				</ul>
				</div>
		</div>
	</nav>
</div>

	<form class="form-signin">
		<div class="text-center mb-4">
		</div>
		<div class="container">
			<div class="card">
				<div class="card-header bg-primary text-white">
					Silahkan Ganti Password Anda!
					<em>(Abaikan jika tidak ingin ganti password!)</em>
				</div>
				<div class="card-body">
					<form method="post" action="ganti_password.php">
						<input type="hidden" name="username" value="<?= $_SESSION['username'] ?>"> 
						<div class="form-group">
							<label>Masukkan Password Lama Anda!</label>
							<input type="Password" class="form-control" name="pass_lama" required>
						</div><br>
						<div class="form-group">
							<label>Masukkan Password Baru Anda!</label>
							<input type="Password" class="form-control" name="pass_baru" required>
						</div><br>
						<div class="form-group">
							<label>Konfirmasi Password Baru Anda!</label>
							<input type="Password" class="form-control" name="konfirmasi_pass" required>
						</div><br>
						<button type="submit" class="btn btn-primary">Proses</button>
						<a type="reset" href="menuutama_Admin.php" class="btn btn-danger">Batal</a>
					</form>
			</div>
		</div>
			<!--PENUTUP CONNTAINER-->
		<p class="mt-5 mb-3 text-muted text-center">&copy; Ngoding_Bareng Fauzi 2023-<?=date('Y')?></p>

</body>
</html>