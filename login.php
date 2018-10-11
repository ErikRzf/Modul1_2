<?php 
session_start();
$koneksi = new mysqli("localhost","root","","buahnaga");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Pelanggan</title>
	<!--koneksi css nya-->
	<link rel="stylesheet"  href="admin/assets/css/bootstrap.css">
</head>
<body>
	 <!-- navbar -->

<?php include'bar.php' ?>

	<div class= "container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						
					
					<h3 class="panel-title">Login Pelanggan</h3>
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
							<label>Nama Pengguna</label>
							<input type="text" class="form-control" name="namapengguna">
						</div>
						<div class="form-group">
							<label>Kata Sandi</label>
							<input type="password" class="form-control" name="password">
						</div>
						<button class="btn btn-primary" name="masuk">Masuk</button>
						<hr> Belum Punya Akun ? <a href="regis.php" >Daftar Sekarang! </a>
					
					</form>

				</div>
				</div>
		</div>
	</div>		
</div>
<?php 
//jika da tombol simpan(simpan di tekan)
if (isset($_POST['masuk']))
 {
	$namapengguna = $_POST["namapengguna"];
	$password = $_POST["password"];
	// melakukan query cek akun di tabel database
	$ambil = $koneksi->query("SELECT * FROM Pelanggan
		WHERE namapengguna_pelanggan='$namapengguna' AND password_pelanggan='$password'");

	//ngitung akun yg terambil
	$akuncocok = $ambil->num_rows;
	//jika salah satu akun cpcok mama login
	
	if ($akuncocok==1) 
	{
		//sukse login dan mendapatkan akun dlm bentuk array
		$akun = $ambil->fetch_assoc();
		//simpan di session pelanggan
		$_SESSION["pelanggan"] = $akun; 
		echo "<script>alert('Anda sukses login')</script>";
		echo "<script>location = 'index.php'</script>";
	}
	elseif (empty($namapengguna)) {
		echo "<script>alert('masukan nama pengguna dan kata sandi')</script>";
		echo "<script>location = 'login.php'</script>";
	}
	elseif (empty($password)) {
		echo "<script>alert('masukan nama pengguna dan kata sandi')</script>";
		echo "<script>location = 'login.php'</script>";
	}
	else{
		//ggl login
		echo "<script>alert('nama pengguna atau kata sandi anda salah')</script>";
		echo "<script>location = 'login.php'</script>";
	}
}
 ?>

</body>
</html>