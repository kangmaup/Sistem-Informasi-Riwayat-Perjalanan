<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['admin'])) 
{
     echo "<script>alert('anda harus login');</script>";
     echo "<script>location='login.php';</script>";
     exit();
 } 

$ambil = query("SELECT * FROM data_riwayat");
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
				<p class="daftar" align="center"> DAFTAR DATA COVID-19 </p>
				<p class="daftar" align="center">Desa Banjaranyar</p> <br>
				<center><input type='text' id='input' onkeyup='searchTable()'></center>
				<div class="table">
					<table>
						<thead>
						  <tr>
						    <th class="tg-0pky">No</th>
						    <th class="tg-0pky">Nama</th>
						    <th class="tg-0pky">Alamat</th>
						    <th class="tg-0pky">Riwayat Perjalanan</th>
						    <th class="tg-0pky">Status</th>
						    <th class="tg-0pky">Foto</th>
						    <th class="tg-0pky">Aksi</th>
						  </tr>
						</thead>
						<tbody>
			                <?php $i = 1; ?>
			                <?php foreach ($ambil as $row) : ?>
			                    <tr>
			                        <td><?php echo $i; ?></td>
			                        <td><?php echo $row['nama']; ?></td>
			                        <td><?php echo $row['alamat']; ?></td>
			                        <td><?php echo $row['riwayat']; ?></td>
			                        <td><?php echo $row['status']; ?></td>
			                        <td><img src="../image/<?php echo $row['foto'];?>" width="100"></td>
			                        <td>
                            		<a href="update.php?id=<?php echo $row['id'] ?>">Edit</a> | <a href="hapus.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Yakin Dihapus?');">Hapus</a>
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