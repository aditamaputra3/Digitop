<?php
include 'koneksi.php';

$id_laptop = $_POST["id_laptop"];
$tipe = $_POST["tipe"];
$merek = $_POST["merek"];
$harga = $_POST["harga"];
$layar = $_POST["layar"];
$ram = $_POST["ram"];
$harga = $_POST["prosecor"];
$memory = $_POST["memory"];
$tanggal_rilis = $_POST["tanggal_rilis"];

$query = "UPDATE laptop SET tipe = '$tipe', merek = '$merek', 
harga = '$harga', layar = '$layar', ram = '$ram', prosecor = '$prosecor', 
memory = '$memory', tanggal_rilis = '$tanggal_rilis' WHERE id_laptop = $id_laptop;";

mysqli_query($koneksi,$query);
echo "Error : ". mysqli_error($koneksi);
header("location:viewLaptop.php");
die();
?>