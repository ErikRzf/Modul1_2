<h2>Tambah Produk</h2>
<head>
	
</head>
<form method ="post" enctype ="multipart/form-data">
	<div class ="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class = "form-group">
	<label>Harga (Rp)</label>
	<input type="number" class="form-control" name="harga"> 
</div>
<div class = "form-group">
	<label>Stok </label>
	<input type="number" class=form-control name="stok">
</div>
<div class = "form-group">
	<label>Deskripsi</label>
<textarea class = form-control name="deskripsi" rows="10"> </textarea>
</div>
<div class="form-group">
	<label>Foto</label>
	<input type="file" class="form-control" name="foto">
</div>
<button class="btn btn-primary"  onclick="return confirm('Apakah Anda Yakin?')" name="save">Simpan</button>
<button class="btn btn-danger " name="batal">Batal</button>
 </form>
 <?php 
if (isset($_POST['save'])) 
{
	if(empty($_POST['nama'])) {
	
		echo "<script>alert('nama produk kosong')</script>";
		echo "<script>location = 'index.php?halaman=tambahproduk'</script>";

	}
	else if ((strlen($_POST['nama']) > 20)) {
		echo "<script>alert('nama terlalu panjang')</script>";
		echo "<script>location = 'index.php?halaman=tambahproduk'</script>";
	}
	elseif ((strlen($_POST['harga']) > 7)) {
		echo "<script>alert('harga terlalu banyak')</script>";
		echo "<script>location = 'index.php?halaman=tambahproduk'</script>";
	}
	else {
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../foto_produk/".$nama);
	$koneksi->query("INSERT  INTO  produk
		(nama_produk,harga_produk,stok_produk,deskripsi_produk,foto_produk)
		VALUES('$_POST[nama]','$_POST[harga]','$_POST[stok]','$nama','$_POST[deskripsi]')");


	
	
		echo "<div class='alert alert-info'>Data tersimpan</div>";
		echo "<meta http-equiv='refresh'content='1;url=index.php?halaman=produk'>";
	}

}
elseif (isset($_POST['batal']))  {
	
		echo "<meta http-equiv='refresh'content='1;url=index.php?halaman=produk'>";
}

?>
