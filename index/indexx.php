<?php
if(empty($_SESSION['role'])){}else{ header('location:login.php?logindulu'); }
require '../config/panggil2.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <div class="wrapper">
        <!-- Navbar -->
        <!-- /.navbar -->
        
        <!-- Content Wrapper. Contains page content -->
        <?php 
        if(!empty($_GET['page'] == 'admin')){
            include '../layout/nav.html';
            require '../pages/admin/admin.php';
        }elseif(!empty($_GET['page'] == 'home page')){
            include '../layout/nav.html';
            require '../pages/main/home.php';
        }elseif(!empty($_GET['page'] == 'daftar')){
            require '../daftar.phpdaftar.php';
        }
        ?>
      
</body>

</html>