<?php

include 'koneksi.php';

$id_produk = $_POST["id_produk"];
$nama_produk = $_POST["nama_produk"];
$deskripsi = $_POST["deskripsi"];
$harga = $_POST["harga"];

$query = "INSERT INTO produk VALUES('$id_produk','$nama_produk','$deskripsi','$harga')";
mysqli_query($koneksi, $query);

header("location:viewProduk.php");
die();
?>