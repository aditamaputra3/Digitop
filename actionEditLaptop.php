<?php
include 'koneksi.php';

$id_produk = $_POST["id_produk"];
$nama_produk = $_POST["nama_produk"];
$deskripsi = $_POST["deskripsi"];
$harga = $_POST["harga"];

$query = "UPDATE produk set 
nama_produk='$nama_produk',
deskripsi='$deskripsi',
harga='$harga'
where id_produk='$id_produk'";

mysqli_query($koneksi,$query);
echo "Error : ". mysqli_error($koneksi);
header("location:viewLaptop.php");
die();
?>