<h2>Pendaftaran Pelanggan</h2>
<?php 
session_start();
$koneksi = new mysqli("localhost","root","","buahnaga");
 ?>
<head>
	<link rel="stylesheet"  href="admin/assets/css/bootstrap.css">
</head>
<form method ="post" enctype ="multipart/form-data">
	<div class ="form-group">
		<label>Email</label>
		<input type="email" class="form-control" name="email">
	</div>
	<div class = "form-group">
	<label>Password </label>
	<input type="text" min="3" max="15" class="form-control" name="password"> 
</div>
<div class = "form-group">
	<label>Nama </label>
	<input type="text" min="3" max="50" class=form-control name="nama">
</div>
<div class="form-group">
	<label>Nama Pengguna</label>
	<input type="text" min="3" max="15" class=form-control name="namapengguna">
</div>

<div class="form-group">
	<label>Telepon</label>
	<input type="number" class="form-control" name="telepon">
</div>
<div class="form-group">
	<label>Alamat</label>
	<input type="text" class=form-control name="alamat">
</div>
<button class="btn btn-primary" name="save">Simpan</button>
 </form>
<?php 





if (isset($_POST['save'])) 
{
	if (empty($_POST['email'])) {
	
		echo "<script>alert('Email kosong')</script>";
		echo "<script>location = 'regis.php'</script>";
		if 
			(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['email'])) {
			echo "<script>alert('Email Salah')</script>";
			echo "<script>location = 'regis.php'</script>";
		}
}
elseif(empty($_POST['password'])){

	echo "<script>alert('Kata Sandi Anda kosong')</script>";
	echo "<script>location = 'regis.php'</script>";
}
elseif ((strlen($_POST['password']) > 15)) {
		echo "<script>alert('kata sandi terlalu banyak')</script>";
		echo "<script>location = 'regis.php'</script>";
	}

elseif (empty($_POST['nama'])) {
	echo "<script>alert('Nama Anda kosong')</script>";
	echo "<script>location = 'regis.php'</script>";
}
elseif (is_numeric($_POST['nama'])) {
	echo "<script>alert('Nama Anda Salah')</script>";
	echo "<script>location = 'regis.php'</script>";
	}
	else if ((strlen($_POST['nama']) > 50)) {
		echo "<script>alert('nama terlalu panjang')</script>";
		echo "<script>location = 'regis.php'</script>";
	}
	elseif (empty($_POST['namapengguna'])) {
	echo "<script>alert('Nama Anda kosong')</script>";
	echo "<script>location = 'regis.php'</script>";
}
elseif (is_numeric($_POST['namapengguna'])) {
	echo "<script>alert('Nama Anda Salah')</script>";
	echo "<script>location = 'regis.php'</script>";
	}
	else if ((strlen($_POST['namapengguna']) > 15)) {
		echo "<script>alert('nama terlalu panjang')</script>";
		echo "<script>location = 'regis.php'</script>";
	}
	

elseif (empty($_POST['telepon'])) {
	echo "<script>alert('Telepon Anda kosong')</script>";
	echo "<script>location = 'regis.php'</script>";
}
elseif (is_writeable($_POST['telepon'])) {
echo "<script>alert('Telepon Anda salah')</script>";
	echo "<script>location = 'regis.php'</script>";
}
elseif (empty($_POST['alamat'])) {
	echo "<script>alert('Alamat Anda kosong')</script>";
	echo "<script>location = 'regis.php'</script>";
	
	}
	elseif ((strlen($_POST['alamat']) > 40)) {
		echo "<script>alert('alamat terlalu panjang')</script>";
		echo "<script>location = 'regis.php'</script>";
	}
else {
		$koneksi->query("INSERT  INTO  pelanggan
		(email_pelanggan,password_pelanggan,nama_pelanggan,namapengguna_pelanggan,telepon_pelanggan,alamat_pelanggan)
		VALUES('$_POST[email]','$_POST[password]','$_POST[nama]','$_POST[namapengguna]','$_POST[telepon]','$_POST[alamat]')");



	
	
		echo "<script>alert('pendaftaran berhasil ')</script>";
		echo "<script>location = 'index.php'</script>";
}
}
?>
