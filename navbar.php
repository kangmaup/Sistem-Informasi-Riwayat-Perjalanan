<div class="header">
<div class="header">
			<div class="inner_header">
				<div class="logo">
					<a href="index.php"><img src="image/logopng.png" height="auto" width="45px"> </a>
				</div>
				<div class="judul">
					<p><h3><a href="index.php" class="judul1">SISTEM INFORMASI <br>RIWAYAT PERJALANAN</p></a></h3>
				</div>

				<ul class="navigation">
					<li><a href="index.php" class="Home">Home</a></li>
					<li><a href="data.php" class="Data">Data Desa</a></li>
					<!-- <li><a href="coba.php" class="Data">Data Indonesia</a></li> -->
					<li><a href="about.php" class="About">About</a></li>
					<?php if (isset($_SESSION["user"])): ?>
					<li><a href="logout.php" class="About">Logout</a></li>
					<?php else: ?>
					<li><a href="login.php" class="About">Login</a></li>
					<?php endif?>	
				</ul>
			</div>
