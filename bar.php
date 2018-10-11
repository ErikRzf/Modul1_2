<nav class="navbar navbar-default">
	<div class="container">
	<ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
			
			
			
			<!--jika sd login (session pelaggan)	-->
			<?php if (isset($_SESSION["pelanggan"])): ?>
				<li><a href="logout.php" onclick ="return confirm('Apakah Anda Ingin Keluar')">Logout</a></li>
				<li> <a href="profil.php">Profile</a></li>
				
				<!--selain itublm login berarti kan-->
			<?php else: ?>
					<li><a href="login.php">Login</a></li>
					<li><a href="regis.php">Daftar</a></li>
					<li><a href="admin/login.php">Login Admin</a></li>
					
			<?php endif ?>
			<li><a href="produk.php">Produk</a></li>
			
		</ul>
	</div>

</nav>