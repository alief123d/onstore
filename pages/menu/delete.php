<?php
include '../../config/panggil.php';

if (isset($_GET['remove'])) {
    $id = $_GET['remove'];

   // $stmt = $conn->prepare('DELETE FROM cart WHERE id=?');
   $sql1 = 'DELETE FROM ketersediaan WHERE id=?';
   $stmt = $proses->showList($sql1);
   $stmt->bind_param('i',$id);
   $hasil = $proses->sqlAction($stmt);
    //$stmt->execute();

    $_SESSION['showAlert'] = 'block';
    $_SESSION['message'] = 'Item removed from the cart!';
    header('location:../main/cart.php');
  }

if (isset($_GET['delete-all'])) {
    $sql1 = 'DELETE FROM ketersediaan';
    $stmt = $proses->showList($sql1);
    $hasil = $proses->sqlAction($stmt);
    //$stmt = $conn->prepare('DELETE FROM ketersediaan');
    //$stmt->execute();
    $_SESSION['showAlert'] = 'block';
    $_SESSION['message'] = 'All Item removed from the cart!';
    header('location:../main/cart.php');
  }
