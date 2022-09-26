<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['admin'])) 
{
     echo "<script>alert('anda harus login');</script>";
     echo "<script>location='login.php';</script>";
     exit();
 } 

abs((int)$id = $_GET["id"]);

$data = query("SELECT * FROM user WHERE id_user = $id")[0];

if (isset($_POST["edit"])) {

    if (ubah($_POST) > 0) {
        echo "

		<script>
			alert('Data sudah diedit');
			document.location.href = 'datauser.php';
		</script>

		";
    } else {
        echo "
		<script>
			alert('data gagal di edit');
			document.location.href = 'datauser.php';
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
<title>Update Data Pendatang</title>
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
    		<td><input type="text" name="nama" id="nama" placeholder="<?php echo $data['nama_lengkap'] ?>"></td>
		</tr>
		<tr>
    		<td>Email</td>
    		<td><input type="text" name="email" id="email" placeholder="<?php echo $data['email'] ?>"></td>
		</tr>
		<tr>
    		<td>Tanggal Lahir</td>
    		<td><input type="text" name="tgl" id="tgl" placeholder="<?php echo $data['tgl_lahir'] ?>"></td>
		</tr>
		<tr>
    		<td>Alamat</td>
    		<td><input type="text" name="alamat" id="alamat" placeholder="<?php echo $data['alamat'] ?>"></td>
		</tr>
		    <td colspan="2" align="center">
		    <center><button type="submit" name="edit" class="button">Simpan Data</button>
		    <button type="submit" name="batal" class="button">batal</button></center>
		    </td>		
		</tr>
		</table>
		<br>
	</form>
</body>