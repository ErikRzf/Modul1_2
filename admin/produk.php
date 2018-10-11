<h2>Produk Buah Naga</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>harga</th>
			<th>stok</th>
			<th>foto</th>
			<th>aksi</th>
		</tr>
	</thead>>
<tbody>
	<?php $nomor=1;?>
	<?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
	<?php while($bagi = $ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $nomor; ?></td>
		<td><?php echo $bagi['nama_produk'];?></td>>
		<td><?php echo $bagi['harga_produk'];?></td>
		<td><?php echo $bagi['stok_produk']; ?></td>
		<td>
			<img src="../foto_produk/<?php echo $bagi['foto_produk']; ?>"width="100">
		</td>
		<td>
			<a href="index.php?halaman=hapusproduk&id=<?php echo $bagi ['id_produk'];
			 ?>"class="btn-danger btn">hapus</a>
			<a href="index.php?halaman=ubahproduk&id=<?php echo $bagi ['id_produk'];
			?>"class="btn-warning btn">ubah</a>

		</td>

	</tr>
	<?php $nomor++; ?>
<?php } ?>

</tbody>>
</table>
<a href="index.php?halaman=tambahproduk"class="btn btn-primary">Tambah Data</a>