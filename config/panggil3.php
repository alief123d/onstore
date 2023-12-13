<?php
   include 'dbin.php';
   include '../../function/proses.php';
   
   $db = new koneksi;
   $koneksi = $db->DBconnect();
   $proses = new Proses($koneksi);

error_reporting(1);