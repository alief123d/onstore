<?php
session_start();
require '../../config/panggil.php';

if (isset($_POST['pid'])) {
include 'addToCart.php';
} else {
	    echo '<div class="alert alert-danger alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item already added to your cart!</strong>
						</div>';
	  }
include 'delete.php';