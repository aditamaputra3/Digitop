<?php

include 'koneksi.php';

$id_suplier = $_POST["id_suplier"];
$nama_suplier = $_POST["nama_suplier"];
$no_telp = $_POST["no_telp"];
$alamat = $_POST["alamat"];

$query = "INSERT INTO suplier VALUES ('$id_suplier', '$nama_suplier', '$no_telp', '$alamat')";
mysqli_query($koneksi, $query);

header("location:viewSuplier.php");
die();
?>
