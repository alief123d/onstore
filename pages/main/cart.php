<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
    <?php //require '../../layout/nav.html'; 
    //session_start();
    ?>
    <!-- cart content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <td colspan="7">
                                    <h4 class="text-center text-info m-0">Products in your cart!</h4>
                                </td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Total Price</th>
                                <th>
                                    <a href="../menu/default.php?acts=delete-all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require '../../config/panggil3.php';

                            function displayCart()
                            {
                                // Display the cart items
                                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                    echo '<h4>Shopping Cart</h4>';
                                    echo '<ul>';
                                    foreach ($_SESSION['cart'] as $item) {
                                        echo '<li>';
                                        echo 'Product: ' . $item['pname'] . ', ';
                                        echo 'Price: ' . number_format($item['pharga'], 0) . ', ';
                                        echo 'Quantity: ' . $item['quantity'];
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo '<p>Your cart is empty</p>';
                                }
                            }
                            
                            // Handle adding items to the cart
                            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-to-cart'])) {
                                $pid = $_POST['pid'];
                                $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;
                            
                                $proses->addToCart($pid, $quantity);
                                echo "Product added to cart!";
                            }
                            
                            // Display the cart content
                            displayCart();
                            
                            //if (isset($_GET['add_test'])) {
                            ///    addToCart(1, $pname, $pharga, $pfoto);
                            //    echo "Test product added to cart!";
                           // }
                          //else if (isset($_GET['remove'])) {
                            //    $itemId = $_GET['remove'];
                                // Call a function to remove the item from the cart
                               // removeFromCart($itemId);
                            //    echo "Product removed from cart!";
                           // }
                            //$stmt = $conn->prepare('SELECT * FROM cart');
                            //$stmt->execute();
                            //$result = $stmt->get_result();
                            $sql3 = 'SELECT * FROM ketersediaan';
                            $hasil = $proses->sqlAction($sql3);
                            $grand_total = 0;
                            while ($row = $hasil->showList) :
                            ?>
                                <tr>
                                    <td><?=  $pid = $row['id'] ?></td>
                                    <input type="hidden" class="pid" value="<?= $pid = $row['id'] ?>">
                                    <td><img src="<?= $pfoto = $row['foto'] ?>" width="50"></td>
                                    <td><?= $pname = $row['name'] ?></td>
                                    <td>
                                        &nbsp;&nbsp;<?= number_format( $pharga = $row['harga'], 2); ?>
                                    </td>
                                    <input type="hidden" class="pprice" value="<?=  $pharga = $row['harga'] ?>">
                                    <td>&nbsp;&nbsp;<?= number_format($row['total_price'], 2); ?></td>
                                    <td>
                                        <a href="cart.php?remove=<?=  $pid = $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $grand_total += $row['total_price']; ?>
                            <?php endwhile; ?>
                            <tr>
                                <td colspan="3">
                                    <a href="../../indexx.php?page=home page" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                                        Shopping</a>
                                </td>
                                <td colspan="2"><b>Grand Total</b></td>
                                <td><b>&nbsp;&nbsp;<?= number_format($grand_total, 2); ?></b></td>
                                <td>
                                    <a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script src="../../script/cart.js"></script>
</body>

</html>