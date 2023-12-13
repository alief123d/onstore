<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style/admin.css" />
</head>

<body>
  <div class="log">
    <a href="index.php"><button>logout</button></a>
  </div>
  <div class="contain">
    <!--<form action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]) 
                      ?>" method="post">-->
    <div class="add-item">
      <a href="../onstore/pages/main/add.php">
        <button>
          <img src="image/shop.png" style="width: 80px" />
          <h3>Add Item</h3>
        </button>
      </a>
    </div>
    <div class="list">
      <a href="pages/menu/daftar.php">
        <button>
          <img src="image/wondicon-ui-free-parcel_111208.png" style="width: 80px" />
          <h3>List Item</h3>
        </button>
      </a>
    </div>
    <!--</form>-->
  </div>
</body>

</html>