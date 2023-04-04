<?php 
    include 'koneksi.php';

    session_start();
    if(!isset($_SESSION["login"])){
      header("Location: login.php");
    }
    
    $id_suplier = $_GET['id_suplier'];

    $query = "DELETE FROM suplier WHERE id_suplier='$id_suplier'";
    mysqli_query($koneksi,$query);

    header("location:viewSuplier.php");
    die();
?>