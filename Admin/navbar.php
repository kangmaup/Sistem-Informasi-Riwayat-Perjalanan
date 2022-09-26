<div class="header">
			<div class="inner_header">
				<div class="logo">
					<a href="index.php"><img src="../image/logopng.png" height="auto" width="45px"></a>
				</div>
				<div class="judul">
					<p><h3><a href="index.php" class="judul1">SISTEM INFORMASI <br>RIWAYAT PERJALANAN</p></a></h3>
				</div>

				<ul class="navigation">
					<li><a href="index.php" class="Home">Home</a></li>
					<li><a href="input.php" class="Data">Tambah data pendatang</a></li>
					<li><a href="data_pendatang.php" class="Statistik">Update Data pendatang</a></li>
					<li><a href="datauser.php" class="About">Data User</a></li>
					<?php if (isset($_SESSION["admin"])): ?>
					<li><a href="logout.php" class="About">Logout</a></li>
					<?php else: ?>
					<li><a href="login.php" class="About">Login</a></li>
					<?php endif?>	
				</ul>
			</div>