<?php $koneksi = new mysqli("localhost","root","","tubes");


function query($query)
{

    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function simpan($data)
{
    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jekel = htmlspecialchars($data["jekel"]);
    $riwayat = htmlspecialchars($data["riwayat"]);
    $status = htmlspecialchars($data["status"]);
    $foto_bukti=$_FILES['gambar']['name'];
    $lokasi=$_FILES['gambar']['tmp_name'];
    move_uploaded_file($lokasi, "../foto_bukti/".$foto_bukti);

    $query = "INSERT INTO data_riwayat(id,nama,alamat,jekel,riwayat,status) values (NULL,'$nama','$alamat','$jekel','$riwayat','$status','$foto_bukti')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function ubah($data)
{
    global $koneksi;
	$id = $_GET["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jekel = htmlspecialchars($data["jekel"]);
    $riwayat = htmlspecialchars($data["riwayat"]);
    $status = htmlspecialchars($data["status"]);
    $filess = $_FILES['foto'];
    

    $foto_bukti=$_FILES['foto']['name'];
    $lokasi=$_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../image/".$nama);
echo "<pre>";
print_r($foto_bukti);
print_r($nama);
print_r($alamat);
print_r($jekel);
print_r($riwayat);
print_r($status);
echo "</pre>";

    $query = "UPDATE data_riwayat SET 
	nama = '$nama',
	alamat = '$alamat',
	jekel = '$jekel',
	riwayat = '$riwayat',
	status = '$status',
    foto='$foto_bukti',

	WHERE id = $id ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function simpann($data)
{
    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $user = htmlspecialchars($data["email"]);
    $pass = htmlspecialchars($data["pass"]);
    $tgl = htmlspecialchars($data["tgl"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "INSERT INTO user(id_user,email,password,nama_lengkap,tgl_lahir,alamat) values (NULL,'$user','$pass','$nama','$tgl','$alamat')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function ubahh($data)
{
    global $koneksi;
    $id = $_GET["id_user"];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $tgl = htmlspecialchars($data["tgl"]);
    $alamat = htmlspecialchars($data["alamat"]);
    
    $riwayat = htmlspecialchars($data["riwayat"]);
    $status = htmlspecialchars($data["status"]);

    $query = "UPDATE user SET 
    nama_lengkap = '$nama',
    email = '$email',
    tgl_lahir = '$tgl',
    alamat = '$alamat',

    WHERE id_user = $id ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
?>