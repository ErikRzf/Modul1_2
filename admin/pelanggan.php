<h2>Pelanggan</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Nama Pengguna</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pelanggan  ");?>
		<?php while($bagi = $ambil->fetch_assoc()){ ?>
		<tr>
			 <td><?php echo $nomor; ?></td>
			 <td><?php echo $bagi['nama_pelanggan']; ?></td>
			 <td><?php echo $bagi['namapengguna_pelanggan'] ?></td>
			 <td><?php echo $bagi['email_pelanggan']; ?></td>
			 <td><?php echo $bagi['telepon_pelanggan']; ?></td>
			 <td><?php echo $bagi['alamat_pelanggan'] ?></td>
			 <td></td>
			 <td>
			 	<a href="" class="btn btn-danger">hapus</a>
			 	<a href=""class="btn btn-warning">ubah</a>

			 </td>

		</tr>
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>