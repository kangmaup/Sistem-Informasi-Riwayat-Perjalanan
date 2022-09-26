<?php 	
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
<?php 
include 'navbar.php';
 ?>
<link rel="stylesheet" type="text/css" href="style.css">
 <div class="table">
 	<table>
						<thead>
						  <tr>
						    <th class="tg-0pky">No</th>
						    <th class="tg-0pky">Nama</th>
						    <th class="tg-0pky">NIM</th>
						    <th class="tg-0pky">Keterangan</th>
						    				    
						  </tr>
						</thead>
						<tbody>
			                <?php $i = 1; ?>
			                    <tr>
			                        <td><?php echo $i; ?></td>
			                        <td>Ma'ruf Aldi Oktava</td>
			                        <td>17102180</td>
			                        <td>Full Stack</td>
			                        
			                    </tr>
			                    <?php $i++ ?>
			            </tbody>
					</table>
		
 </div>
</body>
</html>