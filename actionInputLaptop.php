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

$query = "INSERT INTO laptop VALUES ('$id_laptop', '$tipe', '$merek', '$harga', '$layar', '$ram', '$prosecor', '$memory', '$tanggal_rilis')";
mysqli_query($koneksi, $query);

header("location:viewLaptop.php");
die();
?>