<?php 
		include 'koneksi.php';
		$ambil=$koneksi->query("SELECT * FROM data_riwayat WHERE id='$_GET[id]'");
		$pecah=$ambil->fetch_assoc();
		$koneksi->query("DELETE FROM data_riwayat WHERE id='$_GET[id]'");

		echo "<script>alert('data terhapus');</script>";
		echo "<script>location='data_pendatang.php';</script>";


 ?>