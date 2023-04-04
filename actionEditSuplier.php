<?php
include 'koneksi.php';

$id_suplier = $_POST["id_suplier"];
$nama_suplier = $_POST["nama_suplier"];
$no_telp = $_POST["no_telp"];
$alamat = $_POST["alamat"];

$query = "UPDATE suplier SET nama_suplier = '$nama_suplier', no_telp = '$no_telp', 
alamat = '$alamat' WHERE id_suplier = $id_suplier;";

mysqli_query($koneksi,$query);
echo "Error : ". mysqli_error($koneksi);
header("location:viewSuplier.php");
die();
?>
