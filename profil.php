
<?php 
session_start();

$koneksi = new mysqli("localhost","root","","buahnaga");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<link rel="stylesheet"  href="admin/assets/css/bootstrap.css">
</head>
<body>
<?php include'bar.php' ?>

<h1>Profil Anda</h1>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Password</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($_SESSION["pelanggan"] as $id_pelanggan ): ?>
				<!--menampilkan produk berdasarkan id produk-->	
				<?php 
				$ambil = $koneksi->query("SELECT * FROM pelanggan 
					WHERE id_pelanggan='$id_pelanggan'");
				$bagi = $ambil->fetch_assoc();
				
				
					?>
				
				<tr>
					<td>1</td>
					<td><?php echo $bagi["nama_pelanggan"]; ?></td>
					<td><?php echo $bagi["email_pelanggan"]; ?></td>
					<td><?php echo $bagi["password_pelanggan"]; ?></td>
					<td><?php echo number_format($bagi["telepon_pelanggan"]);?></td>
					
				</tr>
				<?php endforeach ?>
	

		
	</tbody>
</table>