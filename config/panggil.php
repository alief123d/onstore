<?php
   include 'dbin.php';
   include '../function/proses.php';
   
   $db = new koneksi;
   $proses = new Proses($koneksi);
   $koneksi = $proses->getDb()->DBconnect();

error_reporting(1);