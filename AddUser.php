<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dafftar User Baru</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="generator" content="Jekyll v4.1.1">
	<link href="assets/css/login.css" rel="stylesheet">
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="manifest" href="assets/js/web.webmanifest">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet">

<style>
body {
	background-image: url('assets/images/6.jpg');
	background-size: cover; 
}	
</style>

</head>
<body>
	<div class="container">
		<form class="dobleh form-signin" method="POST" action="cek_login.php">
			<div class="text-center mb-4">
				<img class="mb-4" src="assets/images/logogudang.gif" alt="" width="72" height="72">
				<h1 class="h3 mb-3 h1 font-weight-normal" style="color: white">Form Login Gudang</h1>
				<p style="color: white">Masukkan Username dan Password anda dengan benar!</p>
			</div>

			<div class="box form-label-group">
				<input type="text" class="form-control" name="username" placeholder="Masukkan Username" required autofocus>
				<label>Masukkan Username</label>
			</div>

			<div class="box form-label-group">
				<input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
				<label>Masukkan Password</label>
			</div>
			
			<div class="box form-label-group">
				<select class="form-control" name="level">
					<option value="Admin">Admin</option>
					<option value="Operator">Operator</option>
					<option value="Umum">Umum</option>
			</div>

			<div class="checkbox mb-3" class="custom-control custom-checkbox custom-control-inline">
				<label>
				<input type="" name="checkbox" type="checkbox" class="custom-control-input" value="remember-me">
				</label>
			</div>
			<div class="text-center" style="padding-top: 5px;">
    			<button type="submit" class="btn btn-outline-light" style="margin-top: 5px;">Daftar</button>
			</div>
		</form>
	</div>

<?php

include('koneksi.db.php');

if (isset($_POST['submit'])) {
$KodeLogin=filter_var($_POST['KodeLogin'],FILTER_SANITIZE_STRING);
$Password=filter_var($_POST['Password'],FILTER_SANITIZE_STRING);
$Level=filter_var($_POST['Level'],FILTER_SANITIZE_STRING);

$sql="INSERT INTO `tuser`(`KodeLogin`, `Password`, `Level`) VALUES ('".$KodeLogin."','".$Password."','".$Level."')";

$q=mysqli_query($koneksi,$sql);

if($q) {
	echo '<div class="alert alert-success alert-dismissible">
	<strong>Berhasil!</strong> Akun anda berhasil terdaftar ! Anda dapat  <a href="login.php">Masuk</a> sekarang.
	</div>';
} else {
	echo '<div class="alert alert-danger alert-dismissible">
	<strong>Gagal!</strong> Gagal daftar akun. Harap ulangi lagi !
	</div>';
}
}

?>

</body>
</html>