<?php
require 'config/panggil2.php';
$sql1 = "SELECT * FROM ketersediaan";
$hasil = $proses->list($sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/land.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Landing page</title>
    <style>
       
    </style>
</head>

<body>
    <!-- BANNER -->
    <div class="banner">
        <div class="box">
            <div class="judul">
                <h1 class="text-center mt-5 font-weight-bold">Lorem</h1>
            </div>
            <h1 class="judul-mobile text-center font-weight-bold">Lorem</h1>
            <div class="desc">
                <p class="ml-3 mr-3 mt-3 font-weight-bold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi non ut iusto soluta, magnam similique recusandae porro, impedit nisi tempora atque neque, maxime explicabo ipsum consequuntur et facilis magni aliquam?</p>
            </div>
            <div class="desc-mobile">
                <p class="ml-3 mr-3 mt-1 font-weight-bold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi non ut iusto soluta, magnam similique </p>
            </div>
        </div>
        <img src="image/banner-model.jpg" alt="" />
    </div>
    <!-- -->
    <div class="kelebihan">
        <div class="judul-icon mt-3 font-weight-bold">
            <div class="mt-3">
                <i class="fa-solid fa-cart-shopping fa-2xl"></i>
                <p>lorem</p>
            </div>
            <div class="mt-3">
                <i class="fa-solid fa-check fa-2xl"></i>
                <p>lorem ipsum</p>
            </div>
            <div class="mt-3">
                <i class="fa-solid fa-star fa-2xl"></i>
                <p>lorem ipsum dolor</p>
            </div>
            <div class="mt-3">
                <i class="fa-solid fa-tag fa-2xl"></i>
                <p>lorem</p>
            </div>
            <div class="mt-3">
                <i class="fa-solid fa-shop fa-2xl"></i>
                <p>lorem</p>
            </div>
        </div>
    </div>
    <div class="kelebihan-mobile">
        <div class="judul-icon-mobile mt-1 font-weight-bold">
            <div class="mt-3">
                <i class="fa-solid fa-cart-shopping"></i>
                <p>lorem</p>
            </div>
            <div class="mt-3">
                <i class="fa-solid fa-check"></i>
                <p>lorem</p>
            </div>
            <div class="mt-3">
                <i class="fa-solid fa-star"></i>
                <p>lorem ipsum</p>
            </div>
            <div class="mt-3">
                <i class="fa-solid fa-tag"></i>
                <p>lorem</p>
            </div>
            <div class="mt-3">
                <i class="fa-solid fa-shop"></i>
                <p>lorem</p>
            </div>
        </div>
    </div>
    <!-- -->
    <div class="content mt-1">
        <div class="box2">
            <div class="desc2">
                <p class="font-weight-bold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi non ut iusto soluta, magnam similique recusandae porro, impedit nisi tempora atque neque, maxime explicabo ipsum consequuntur et facilis magni aliquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae iste cumque dolor repellat modi est aspernatur distinctio dolorum tempore at suscipit debitis doloribus necessitatibus alias odit, commodi impedit. Labore, consequuntur.</p>
            </div>
        </div>
        <div class="img2">
            <img src="image/asian-woman-with-cup-coffee-her-hand.jpg" class="mt-3 mb-4 ml-4" />
        </div>
        <div class="img2-mobile">
            <img src="image/asian-woman-with-cup-coffee-her-hand.jpg" />
        </div>
        <div class="desc2-mobile">
            <p class="font-weight-bold ml-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam hic dicta quam, consectetur iusto rerum quos dolorem minus esse similique odit quia voluptates eligendi, natus recusandae aspernatur veritatis, sapiente ea?</p>
        </div>
    </div>
    <!--        CONTENT     -->
    <div class="wrap">
        <h1>Lorem ipsum</h1>
        <div class="container">
            <?php include 'layout/item-preview.html' ?>
        </div>
    </div>
    <!--footer-->
    <div class="login-foot">
        <div class="judul-foot">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
            <a href="regis.php"><button class="btn btn-primary font-weight-bold mt-4">Get started</button></a>
        </div>
    </div>
    <br>
</body>

</html>