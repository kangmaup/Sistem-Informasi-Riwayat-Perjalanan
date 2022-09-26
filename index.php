<?php 	
session_start();
 ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body background="image/background.png">
	<div class="container">
		<?php 

		include 'navbar.php';

		 ?>
		<div class="banner">
			<div class="app-text">
				<h1>Sistem Informasi<br>Riwayat Perjalanan </h1><br>
				<a href="data.php"><button class="button">Data Desa</button></a>
				<a href="form.php"><button class="button">Isi Form</button></a>
			</div>
			<div class="gambar">
				<img src="image/slide1.png">
			</div>

	</div>

</body>
</html>