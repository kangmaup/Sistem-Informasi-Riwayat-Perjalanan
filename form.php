<?php
include 'Admin/koneksi.php';
session_start();
if (!isset($_SESSION['user'])) 
{
     echo "<script>alert('anda harus login');</script>";
     echo "<script>location='login.php';</script>";
     exit();
 } 
if (isset($_POST["tambah"])) {


    if (simpan($_POST) > 0) {
        echo "

		<script>
			alert('data berhasil di tambahkan');
			document.location.href = 'data.php';
		</script>

		";
    } else {
        echo "
		<script>
			alert('data gagal di tambahkan');
			document.location.href = 'data.php';
		</script>

		";
    }
}
if (isset($_POST["batal"])) {
	echo "
		<script>
			document.location.href = 'index.php';
		</script>

		";
}

?>
<!DOCTYPE html>	
<head>
<title>Input Data Pendatang</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 

		include 'navbar.php';

		 ?>

	
	<form action="" method="POST">
		<br>
		<table align="center">
		<tr>
     		<td colspan="2" align="center"><h3>Silahkan Input Data</h3></td>
		</tr>
		<tr>
    		<td>Nama</td>
    		<td><input type="text" name="nama" id="nama" ></td>
		</tr>
		<tr>
    		<td>Alamat</td>
    		<td><input type="text" name="alamat" id="alamat"></td>
		</tr>
		<tr>
    		<td>Jenis Kelamin</td>
    		<td>
			<select name="jekel" >
				<option>-- Pilih Jenis Kelamin --</option>
				<option value="laki-laki"> laki-laki</option>
				<option value="perempuan"> perempuan</option>
			</select>
		</tr>
		
		<tr>
    		<td>Riwayat Perjalanan</td>
    		<td><input type="text" name="riwayat" ></td>
		</tr>
		<tr>
    		<td>Status</td>
    		<td>
			<select name="status" >
				<option>-- Pilih Status --</option>
				<option value="ODP"> ODP</option>
				<option value="PDP"> PDP</option>
				<option value="POSITIF"> POSITIF</option>
			</select>
		</tr>
		
		    <td colspan="2" align="center">
		    <center><button type="submit" name="tambah" class="button">Tambah Data</button>
		    <button type="submit" name="batal" class="button">batal</button></center>
		    </td>		
		</tr>
		</table>
		<br>
	</form>

</body>