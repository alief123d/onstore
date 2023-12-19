<?php
if (!empty($_SESSION)) {
} else {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/log.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
                height: 370px;
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
                        <h1 style="margin-top: 10px">LOGIN</h1>
                    </div>
                    <div class="form">
                        <p><?php ?></p>
                        <p>Username :</p>
                        <input type="text" name="username" placeholder="Your name"><br>
                        <br>
                        <p>Password :</p>
                        <input type="password" name="password"><br>
                        <div class="sign-up">
                        </div>
                        <input type="submit" name="submit"><br>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
<?php
include '../config/panggil2.php';

if (isset($_POST['submit'])) {
    $user = strip_tags($_POST['username']);
    $pass = strip_tags($_POST['password']);
    $level = strip_tags($_POST['role']);

    $tabel = 'user';
    
    $sql= "SELECT * FROM user WHERE username = '$user'";
    $login = $proses->showList($sql);

    $redir_admin = "pages/admin/admin.html";

    if( password_verify($pass, $login['password']) ){
        if($login['role']=="admin"){
            session_start();
            $_SESSION['role'] = 'admin';
            $_SESSION['sesi'] = $login;
            echo "<script>window.location='indexx.php?page=admin';</script>";
        }elseif($login['role']=="user"){
            session_start();
            $_SESSION['role'] = 'user';
            $_SESSION['sesi'] = $login;
            echo "<script>window.location='indexx.php?page=home page';</script>";
        }else{
            echo '<script>window.location="masuk.php?get=gagal"</script>';
            }
    }
    else{
    echo '<script>window.location="masuk.php?get=gagal"</script>';
    }
}
?>