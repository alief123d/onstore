<?php
class Proses
{
    protected $db;

    public function getDb()
    {
        return $this->db;
    }

    function __construct($db)
    {
        $this->db = $db;
    }


    function list($sql)
    {
        $row = $this->db->prepare($sql);
        $row->execute();
        return $hasil = $row->fetchall();
    }

    function showList($sql)
    {
        $row = $this->db->prepare($sql);
        $row->execute();
        return $hasil = $row->fetch();
    }

    function sqlAction($sql)
    {
        $row = $this->db->prepare($sql);
        return $row->execute();
    }

    function addToCart($pid, $quantity = 1)
    {
        session_start();

        // Check if the cart is already initialized in the session
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Check if the product is already in the cart
        $found = false;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['pid'] == $pid) {
                // Product is already in the cart, update quantity
                $item['quantity'] += $quantity;
                $found = true;
                break;
            }
        }

        // If the product is not in the cart, add it
        if (!$found) {
            // Retrieve product details from the database
            $productDetails = $this->getProductDetails($pid);

            if ($productDetails) {
                $newItem = array(
                    'pid' => $pid,
                    'pname' => $productDetails['nama'],
                    'pharga' => $productDetails['harga'],
                    'pfoto' => $productDetails['foto'],
                    'quantity' => $quantity,
                );

                $_SESSION['cart'][] = $newItem;
            }
        }
    }

    function getProductDetails($pid)
    {
        $sql = "SELECT * FROM ketersediaan WHERE id = :pid";
        $row = $this->getDb()->prepare($sql);
        $row->bindParam(':pid', $pid, PDO::PARAM_INT);
        $row->execute();
        return $hasil = $row->fetch(PDO::FETCH_ASSOC);
    }
}
