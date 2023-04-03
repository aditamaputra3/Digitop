<?php

session_start();

if(isset($_SESSION["login"])){
    header("Location: viewLaptop.php");
    exit;
}

require 'actionRegister.php'; 

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($koneksi, "SELECT * FROM user where username = '$username'");

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                
                $_SESSION["login"] = true;
                $_SESSION["username"] = $username;
                header("Location: viewLaptop.php");
                exit;
            } else {
                $error = "Password salah";
            }
        } else {
            $error = "Username tidak ditemukan";
        }
        
        if(isset($error)){
            header("Location: login.php?error=" . urlencode($error));
            exit;
        }
            
    }
