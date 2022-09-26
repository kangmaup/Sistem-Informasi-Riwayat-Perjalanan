<!-- <?php

$url = "https://indonesia-covid-19.mathdro.id/api";
$url2 = "https://indonesia-covid-19.mathdro.id/api/harian";


$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);

$client2 = curl_init($url2);
curl_setopt($client2,CURLOPT_RETURNTRANSFER,true);
$response2 = curl_exec($client2);

$result = json_decode($response);
$Positif = $result->jumlahKasus;
$Meninggal = $result->meninggal;
$Dirawat = $result->perawatan;
$Sembuh = $result->sembuh;

$result2 = json_decode($response2);
$tmbhpositif = $result2->data[0]->penambahanKasusTerkonfirmasiTerkini;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Coba</title>
	<link rel="stylesheet" type="text/css" href="css/styleapi.css">
</head>
<body>
<?php 
	include 'navbar.php';

 ?>

 <br>
 <table class="table" border="0" cellspacing="0" style="color: #fff;">
		
		<th width="200" class="color1">
			<br>Kasus Positif
		</th>
		<th width="100">
		</th>
		<th width="200"class="color1">
			<br>Dalam Perawatan
		</th>
		</th>
		<th width="100">
		<th width="200"class="color1">
			<br>Sembuh
		</th>
		</th>
		<th width="100">
		<th width="200"class="color1">
			<br>Meninggal
		</th>
		<tr>
			<td class="emot" > &#129298</td>
			<td></td>
			<td class="emot" > &#129301 </td>
			<td></td>
			<td class="emot" > &#128578</td>
			<td></td>
			<td class="emot" > &#128577</td>
		</tr>
		<tr>
			<td class="color2"> <?php echo $Positif ?><br><br></td>
			<td></td>
			<td class="color2"> <?php echo $Dirawat ?><br><br></td>
			<td></td>
			<td class="color2"> <?php echo $Sembuh ?><br><br></td>
			<td></td>
			<td class="color2"> <?php echo $Meninggal ?><br><br></td>
		</tr>

		<tr>
			<td class="color3"> +<?php echo $tmbhpositif ?><br><br></td>
			<td></td>
			<td class="color2"> <br><br></td>
			<td></td>
			<td class="color2"> <br><br></td>
			<td></td>
			<td class="color2"> <br><br></td>
		</tr>
	</table>
</body>
</html> -->