<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* ... your existing styles ... */
        #myNavbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
            position: fixed;
            font-weight: 600;
        }

        @media only screen and (max-width: 768px) {
            #navbarNav {
                background-color: rgb(39, 39, 39);
                height: 200px;
                text-align: center;
                font-weight: 600;
                border-radius: 10px;
            }
        }
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <nav id="myNavbar">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="height: 75px;">
                <div class="container">
                    <a class="navbar-brand" href="#" style="font-size: 30px; margin-bottom: 10px;">Store</a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon my-toggler"> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <div class="buto mb-4">
                                    <div class="back"><br>
                                        <button name="back" class="btn btn-primary">Menu</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </nav>
        </nav>
    </form>
</body>
<?php
if(isset($_POST['back'])) {
    echo "<script>window.location='../../indexx.php?page=admin';</script>";
}
?>
</html>