<?php  
session_start();

//nyambung database
$koneksi = new mysqli("localhost","root","","buahnaga");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buah Naga</title>

	<link rel="stylesheet"  href="admin/assets/css/bootstrap.css">
</head>
<body>
 <!-- navbar -->

<?php include 'bar.php' ?>
<!-- konten -->

<section class="konten">
	<div class="container">
		<h1>Produk Saat Ini</h1>
		<div class="row">

			<?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
			<?php while($tiapproduk = $ambil->fetch_assoc()){ ?>
				<!--pre><?php print_r($tiapproduk) ?></pre-->
			<div class="col-md-3">
				<div class="thumbnail">
					<img src="foto_produk/<?php echo $tiapproduk['foto_produk']; ?>" alt="">
					<div class="caption">
						<h3><?php echo $tiapproduk['nama_produk']; ?></h3>
						<h5><?php echo number_format($tiapproduk['harga_produk']); ?></h5>
						<a href="beli.php?id=<?php echo $tiapproduk['id_produk']; ?>"class="btn btn-primary">Beli</a>
					</div>
				</div>
			</div>
			<?php } ?> 


		</div>
	</div>
	

</section>
</body>
</html>