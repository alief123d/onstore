<?php
include '../../config/panggil.php';

	  $pid = $_POST['pid'];
	  $pname = $_POST['pname'];
	  $pharga = $_POST['pharga'];
	  $pfoto = $_POST['pfoto'];

      $sql1 = 'DELETE FROM ketersediaan WHERE id=?';
      $stmt = $proses->showList($sql1);
	  $stmt->bind_param('s',$pcode);
      $hasil = $proses->sqlAction($stmt);
	  //$stmt = $conn->prepare('SELECT product_code FROM cart WHERE product_code=?');
	  //$stmt->execute();
	  $res = $stmt->get_result();
	  $r = $res->fetch_assoc();
	  $code = $r['id'] ?? '';

	  if (!$code) {
        $sql2 = 'INSERT INTO ketersediaan (name,harga,foto) VALUES (?,?,?)';
        $query = $proses->showList($sql2);
	    $query->bind_param('sss',$pname,$pharga,$pfoto);
	    $hasil = $proses->sqlAction($query);

	    echo '<div class="alert alert-success alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item added to your cart!</strong>
						</div>';
	}

	// Get no.of items available in the cart table
	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
	  $stmt = $proses->sqlAction('SELECT * FROM ketersediaan');
	  $stmt->store_result();
	  $rows = $stmt->num_rows;

	  echo $rows;
	}
    ?>