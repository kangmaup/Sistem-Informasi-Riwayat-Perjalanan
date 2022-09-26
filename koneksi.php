<?php

$koneksi = mysqli_connect("localhost", "root","", "tubes");


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
function simpann($data)
{
    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $nik = htmlspecialchars($data["nik"]);
    $user = htmlspecialchars($data["user"]);
    $pass = htmlspecialchars($data["pass"]);
    $tgl = htmlspecialchars($data["tgl"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jekel = htmlspecialchars($data["jekel"]);
    $status = htmlspecialchars($data["status"]);

    $query = "INSERT INTO user(id_user,NIK,username,password,nama_lengkap,tgl_lahir,alamat,jekel,status) values (NULL,'$nik','$user','$pass','$nama','$tgl','$alamat','$jekel','$status')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function simpan($data)
{
    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jekel = htmlspecialchars($data["jekel"]);
    $riwayat = htmlspecialchars($data["riwayat"]);
    $status = htmlspecialchars($data["status"]);

    $query = "INSERT INTO data_riwayat(id,nama,alamat,jekel,riwayat,status) values (NULL,'$nama','$alamat','$jekel','$riwayat','$status')";

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

    $query = "UPDATE data_riwayat SET 
	nama = '$nama',
	alamat = '$alamat',
	jekel = '$jekel',
	riwayat = '$riwayat',
	status = '$status'

	WHERE id = $id ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>