<?php
session_start();
include '../../config/panggil3.php';
$sql1 = "SELECT * FROM ketersediaan";
$hasil = $proses->list($sql1);

function addToCart($pid, $pname, $pharga, $pfoto)
{
    // Initialize the cart if not already done
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Check if the product is already in the cart
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['pid'] == $pid) {
            // Product is already in the cart, update quantity or other details
            $item['quantity'] += 1;
            $found = true;
            break;
        }
    }

    // If the product is not in the cart, add it
    if (!$found) {
        $newItem = array(
            'pid' => $pid,
            'pname' => $pname,
            'pharga' => $pharga,
            'pfoto' => $pfoto,
            'quantity' => 1,
        );
        $_SESSION['cart'][] = $newItem;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-to-cart'])) {
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pharga = $_POST['pharga'];
    $pfoto = $_POST['pfoto'];

    addToCart($pid, $pname, $pharga, $pfoto);
    echo "Product added to cart!";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-to-cart'])) {
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pharga = $_POST['pharga'];
    $pfoto = $_POST['pfoto'];

    addToCart($pid, $pname, $pharga, $pfoto);
    echo "Product added to cart!";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../../../onstore/style/home.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="image/chris-reyem-oJoeGnj8OMM-unsplash.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="image/lucas-hoang-ojZ4wJNUM5w-unsplash.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/parker-burchfield-tvG4WvjgsEY-unsplash.jpg" alt="Third slide">
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="produk-container">
            <?php
            foreach ($hasil as $x) {
            ?>
              <!--  <form action="" class="form-submit">-->
                    <div class="kartu mt-4 col-md-3 mr-0">
                        <div class="card" style="border : 0;">
                         <!--   <button type="submit" class="btn btn-transparent" name="item-profile">-->
                                <div class=" view zoom">
                                    <img src="image/<?php echo $x['foto']; ?>" alt="" class="img-fluit rounded-top" />
                                </div>
                                <div class="card-body" style="padding:5px;">
                                    <h5 class="card-title" style="margin-bottom:1px; text-align:start;"><?= $x['nama'] ?></h5>
                                    <p class="card-text" style="margin-bottom:1px; text-align:start;"><?= number_format($x['harga'], 0); //$x['harga'] 
                                                                                                        ?></p>
                                <!--    <button type="submit" class="btn btn-transparent" name="item-profile">
                                        <!-- Product details here -->
                                     <!--   <input type="hidden" name="pid" value=" //$x['id'] ">
                                        <input type="hidden" name="pname" value=" //$x['nama'] ">
                                        <input type="hidden" name="pharga" value=" //$x['harga'] ">
                                        <input type="hidden" name="pfoto" value=" //$x['foto'] "> -->
                                        <button class="btn btn-info btn-block addItemBtn" name="add-to-cart">
                                            Add to Cart
                                        </button> 
                                    </button>
                                </div>
                            <!--</button>-->
                        </div>
                    </div>
               <!-- </form> -->
            <?php }
            ?>
        </div>
    </div>
    <br>
</body>
<script type="text/javascript">
    $(document).ready(function () {
        $(".form-submit").submit(function (e) {
            e.preventDefault(); // Mencegah pengiriman formulir secara default

            // Mengambil data formulir
            var formData = $(this).serialize();

            // Melakukan permintaan AJAX ke skrip PHP yang memproses penambahan ke keranjang
            $.ajax({
                url: 'cart.php', // Ganti dengan path ke skrip PHP Anda
                method: 'post',
                data: formData,
                success: function (response) {
                    // Menampilkan pesan atau melakukan tindakan lain setelah berhasil
                    console.log(response);
                    alert("Product added to cart!");
                    load_cart_item_number(); // Memuat kembali jumlah item di keranjang
                }
            });
        });

        // Fungsi untuk memuat jumlah item di keranjang
        function load_cart_item_number() {
            $.ajax({
                url: 'cart.php', // Ganti dengan path ke skrip PHP yang mengambil jumlah item di keranjang
                method: 'get',
                data: {
                    cartItem: "cart_item"
                },
                success: function(response) {
                    // Menampilkan jumlah item di keranjang di elemen dengan id 'cart-item'
                    $("#cart-item").html(response);
                }
            });
        }
    });
</script>

</html>