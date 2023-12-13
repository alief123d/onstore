<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style/checkout.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        @media only screen and (max-width: 768px) {

            .payment {
                height: 400px;
                width: 350px;
            }

            .judul {
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
        <div class="container">
            <div class="wrap">
                <div class="payment">
                    <div class="judul">
                        <h1>CheckOut</h1>
                    </div>
                    <div class="form">
                        <p>Name :</p>
                        <input type="text" name="username" placeholder="Your name"><br>
                        <br>
                        <p>Email :</p>
                        <input type="text" name="username" placeholder="Your email"><br>
                        <br>
                        <p>Password :</p>
                        <input type="password" name="password"><br>
                        <div class="sign-up">
                        </div>
                        <br>
                        <div class="select-payment">
                            <select>
                                <option value="0" class="val0">Select Payment</option>
                                <option value="1">Paypal</option>
                                <option value="2">BNI</option>
                                <option value="3">Gopay</option>
                            </select>
                        </div>
                        <input type="submit" name="checkout"><br>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
