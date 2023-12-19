<?php
if (!empty($_SESSION)) {
} else {
    session_start();
}
include '../config/panggil2.php';
    
    $check = "SELECT * FROM user ORDER BY id DESC";
    $c1 = $proses->sqlAction($check);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_VALIDATE_INT);
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql1 = "SELECT * FROM user";
        $result = $proses->sqlAction($sql1);


        if (empty($nama)) {
            echo "<script>alert('masukan nama / nama atau password telah di ambil')</script>";
        } else if (empty($password)) {
            echo "<script>alert('masukan password / nama atau password telah di ambil')</script>";
        } else {
                $sql4 = "INSERT INTO user (username, password) VALUES (:username, :hash)";
                $stmt = $proses->getDb()->prepare($sql4);
                $stmt->bindParam(':username', $nama);
                $stmt->bindParam(':hash', $hash);

                if ($stmt->execute()) {
                    echo "Berhasil";
                    echo "<script>window.location='masuk.php';</script>";
                } else {
                    echo "Gagal menambahkan data";
                }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="log.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../style/regis.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        @media only screen and (max-width: 768px) {
            .gambar>img {
                display: none;
            }

            .login {
                height: 400px;
                width: 350px;
            }

            .wcm {
                color: black;
                font-size: 20px;
                margin-left: 30px;
                margin-top: 10px;
            }

            .form {
                margin-top: 10px;
                margin-left: 20px;
            }

            input[type=text],
            input[type=password] {
                width: 300px;
                height: 30px;
            }

            input[type=submit] {
                margin-left: 15px;
                margin-top: 35px;
            }
        }
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <div class="container">
            <div class="wrap">
                <div class="login">
                    <div class="gambar">
                        <img src="../image/illus-1.png" />
                    </div>
                    <div class="wcm">
                        <h1 style="margin-top: 10px">Sign Up</h1>
                    </div>
                    <div class="form">
                        <p>Username :</p>
                        <input type="text" name="username" placeholder="Your name"><br>
                        <br>
                        <p>Password :</p>
                        <input type="password" name="password"><br>
                        <div class="sign-up">
                            <a href="masuk.php">
                                <h5>Already have an account?</h5>
                            </a>
                        </div>
                        <input type="submit" name="submit"><br>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>