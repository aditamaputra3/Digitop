<?php 
    include 'koneksi.php';

    session_start();
    if(!isset($_SESSION["login"])){
      header("Location: login.php");
    }
    
    $id_laptop = $_GET['id_laptop'];

    $query = "DELETE FROM laptop WHERE id_laptop='$id_laptop'";
    mysqli_query($koneksi,$query);

    header("location:viewLaptop.php");
    die();
?>