<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/theme/css/bootstrap.css">
  <link rel="stylesheet" href="./public/theme/css/all-products.css">
  <style>
    header {
      background-image: url('public/theme/img/pozadina.jpg');
    }

    body {
      background-image: url('public/theme/img/pozadina.jpg');
      background-repeat: repeat;
    }

    .nav-item a {
      font-size: 25px;
    }

    .container-fluid a {
      font-size: 25px;
      font-weight: bold;
      color: white;
    }
  </style>
  <title>Document</title>
</head>

<body>


  <header>

    <nav class="p-1 navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="public/theme/img/logo.jpg" alt="" width="60" height="40" class="d-inline-block align-text-top rounded-circle">
          <b> MobiWorld</b>
        </a>
        <a class="navbar-brand" href="#"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" href="home.php"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="all-products.php"><b>Products</b></a>
            </li>

            <li class="nav-item  border-white">
              <a class="nav-link text-white" href="checkout.php"><b>Checkout</b></a>
            </li>
            <li class="nav-item  border-white">
              <a class="nav-link text-white" href="contact-us.php"><b>Contact</b></a>
            </li>
          </ul>
          <div class="row justify-content-end mr-5 mt-3">
            <div class="col-9 mr-2">
              <a class="nav-item active " href="shopping-cart.php"><button class="btn btn-secondary border-white">
                  Shopping cart
                  <span class="position-absolute mt-3 start-140 translate-middle badge rounded-pill bg-danger">
                    <?php if (!empty($_SESSION['cart']) && isset($_SESSION['cart'])) {
                      echo count($_SESSION['cart']);
                    } else {
                      echo 0;
                    } ?>
                  </span>
                </button></a>
            </div>
          </div>

        </div>
      </div>

    </nav>



  </header>