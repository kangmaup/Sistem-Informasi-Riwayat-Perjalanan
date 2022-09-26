<?php
include 'koneksi.php';

$ambil = query("SELECT * FROM data_riwayat");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body bgcolor="white">
		<?php 

		include 'navbarcetak.php';

		 ?>
			<div class="kotak">
				<br>
				<p class="daftar" align="center"> DAFTAR DATA COVID-19 </p>
				<p class="daftar" align="center">Desa Banjaranyar</p> <br>
				
				<div class="table">
					<table>
						<thead>
						  <tr>
						    <th class="tg-0pky">No</th>
						    <th class="tg-0pky">Nama</th>
						    <th class="tg-0pky">Alamat</th>
						    <th class="tg-0pky">Riwayat Perjalanan</th>
						    <th class="tg-0pky">Status</th>
						    
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
			                    </tr>
			                    <?php $i++ ?>
			                <?php endforeach ?>
			            </tbody>
					</table>
					<br>
					
					<br><br>
					<script type="text/javascript">
						window.print();
					</script>
				</form>
				</div>
			</div>

		</div>
</body>

</html>