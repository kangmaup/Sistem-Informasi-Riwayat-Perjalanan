<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['admin'])) 
{
     echo "<script>alert('anda harus login');</script>";
     echo "<script>location='login.php';</script>";
     exit();
 } 

$ambil = query("SELECT * FROM user");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body bgcolor="white">
		<?php 

		include 'navbar.php';

		 ?>
			<div class="kotak">
				<br>
				<p class="daftar" align="center"> DAFTAR DATA USER </p>
				<center><input type='text' id='input' onkeyup='searchTable()'></center>
				<div class="table">
					<table>
						<thead>
						  <tr>
						    <th class="tg-0pky">No</th>
						    <th class="tg-0pky">Nama</th>
						    <th class="tg-0pky">Email</th>
						    <th class="tg-0pky">Tanggal Lahir</th>
						    <th class="tg-0pky">Alamat</th>
						    <th class="tg-0pky">Aksi</th>
						  </tr>
						</thead>
						<tbody>
			                <?php $i = 1; ?>
			                <?php foreach ($ambil as $row) : ?>
			                    <tr>
			                        <td><?php echo $i; ?></td>
			                        <td><?php echo $row['nama_lengkap']; ?></td>
			                        <td><?php echo $row['email']; ?></td>
			                        <td><?php echo $row['tgl_lahir']; ?></td>
			                        <td><?php echo $row['alamat']; ?></td>
			                        <td>
                            		<a href="update_user.php?id=<?php echo $row['id_user'] ?>">Edit</a> | <a href="hapus_user.php?id=<?php echo $row['id_user'] ?>" onclick="return confirm('Yakin Dihapus?');">Hapus</a>
                        </td>
			                    </tr>
			                    <?php $i++ ?>
			                <?php endforeach ?>
			            </tbody>
					</table>
					<br>
					<br>
					<br>
				</form>
				</div>
			</div>

		</div>
</body>
<script>
function searchTable() {
    var input;
    var saring;
    var status; 
    var tbody; 
    var tr; 
    var td;
    var i; 
    var j;
    input = document.getElementById("input");
    saring = input.value.toUpperCase();
    tbody = document.getElementsByTagName("tbody")[0];;
    tr = tbody.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
                status = true;
            }
        }
        if (status) {
            tr[i].style.display = "";
            status = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}
</script>
</html>