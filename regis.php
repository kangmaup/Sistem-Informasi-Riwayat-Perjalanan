<?php 	
session_start();
	if (isset($_SESSION['user'])) 
{
     echo "<script>alert('anda sudah daftar');</script>";
     echo "<script>location='index.php';</script>";
     exit();
 } 
	include 'Admin/koneksi.php';
if (isset($_POST["tambah"])) {


    if (simpann($_POST) > 0) {
        echo "

		<script>
			alert('data berhasil di tambahkan');
			document.location.href = 'login.php';
		</script>

		";
    } else {
        echo "
		<script>
			alert('data gagal di tambahkan');
			document.location.href = 'regis.php';
		</script>

		";
    }
}
 ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title>Isi Form</title>
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
    		<td>Email</td>
    		<td><input type="text" name="email" id="email" ></td>
		</tr>
		<tr>
    		<td>Password</td>
    		<td><input type="Password" name="pass" id="pass" ></td>
		</tr>
		<tr>
    		<td>Tanggal Lahir</td>
    		<td><input type="date" name="tgl" id="tgl" ></td>
		</tr>
		<tr>
    		<td>Alamat</td>
    		<td><input type="text" name="alamat" id="alamat"></td>
		</tr>
		
		
		    <td colspan="2" align="center">
		    <center><button type="submit" name="tambah" class="button">Tambah Data</button>
		    <button type="submit" name="batal" class="button">batal</button></center>
		    </td>		
		</tr>
		</table>
		<br>
	</form>
	<!--  -->
</body>
</html>