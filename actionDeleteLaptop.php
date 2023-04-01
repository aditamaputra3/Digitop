<?php 
    include 'koneksi.php';

    session_start();
    if(!isset($_SESSION["login"])){
      header("Location: login.php");
    }
    
    $id_produk = $_GET['id_produk'];

    $query = "DELETE FROM produk WHERE id_produk='$id_produk'";
    mysqli_query($koneksi,$query);

    header("location:viewProduk.php");
    die();
?>