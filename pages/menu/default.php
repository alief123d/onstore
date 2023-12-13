<?php
if(!empty($_GET['acts'] == 'delete')){
    require 'delete.php';
}else{
    require 'daftar.php';
}