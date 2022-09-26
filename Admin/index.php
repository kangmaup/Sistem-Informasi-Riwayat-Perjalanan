	<?php 
session_start();
//koneksi ke database
include 'koneksi.php';

if (!isset($_SESSION['admin'])) 
{
     echo "<script>alert('anda harus login');</script>";
     echo "<script>location='login.php';</script>";
     exit();
 } 
$ambil = query("SELECT * FROM admin")[0];

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">	
	<title></title>
</head>
<body background="../image/background.png">

	<?php 

		
		include 'popup.php';
		include 'data_index.php';
		
		
		 ?>


</body>
</html>
