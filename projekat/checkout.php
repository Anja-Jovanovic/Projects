
<?php


require_once __DIR__ . "/models/all-products-model.php";

require __DIR__ . "/views/layout/header.php";


$productID = 1;

if (!empty($_GET['page'])) {
  $productID = $_GET['page'];
}

$singleProduct = getOneProductById($productID);


$alert = "";
$alert_name = "";
$alert_lname = "";
$alert_email = "";
$alert_phone = "";
$alert_adr = "";
$alert_city = "";
$alert_zip = "";
$alert1 = "";
if (isset($_POST['submit'])) {
  $alert = "<div class='alert alert-danger' role='alert'>
    Not valid!
  </div>";
  $alert1 = "<div class='alert alert-danger' role='alert'>
    Not valid!
  </div>";
  if (!empty($_POST)) {
    if (is_numeric($_POST['name']) || empty($_POST['name']) || $_POST['name'] = "") {
      $isValid1 = false;
      $alert_name = "<div class='alert alert-danger' role='alert'>
    Name not valid!
  </div>";
    } else {
      $isValid1 = true;
      $alert_name = "<div class='alert alert-success' role='alert'>
  Name is valid!
</div>";
    }

    if (is_numeric($_POST['last_name']) || empty($_POST['last_name'])) {
      $isValid2 = false;
      $alert_lname = "<div class='alert alert-danger' role='alert'>
    Last name is not valid!
  </div>";
    } else {
      $isValid2 = true;
      $alert_lname = "<div class='alert alert-success' role='alert'>
  Last name is valid!
</div>";
    }

    if (!is_numeric($_POST['number']) || empty($_POST['number'])) {
      $isValid3 = false;
      $alert_phone = "<div class='alert alert-danger' role='alert'>
    Number not valid!
  </div>";
    } else {
      $isValid3 = true;
      $alert_phone = "<div class='alert alert-success' role='alert'>
  Number is valid!
</div>";
    }

    if (str_contains($_POST['email'], '@') == false || empty($_POST['email'])) {
      $isValid4 = false;
      $alert_email = "<div class='alert alert-danger' role='alert'>
    Email is not valid!
  </div>";
    } else {
      $isValid4 = true;
      $alert_email = "<div class='alert alert-success' role='alert'>
  Email is valid!
</div>";
    }

    if (is_numeric($_POST['city']) || empty($_POST['city'])) {
      $isValid5 = false;
      $alert_city = "<div class='alert alert-danger' role='alert'>
   City is not valid!
  </div>";
    } else {
      $isValid5 = true;
      $alert_city = "<div class='alert alert-success' role='alert'>
  City is valid!
</div>";
    }

    if (is_numeric($_POST['address']) || empty($_POST['address'])) {
      $isValid6 = false;
      $alert_adr = "<div class='alert alert-danger' role='alert'>
   Address is not valid!
  </div>";
    } else {
      $isValid6 = true;
      $alert_adr = "<div class='alert alert-success' role='alert'>
  Address is valid!
</div>";
    }

    if (!is_numeric($_POST['zip']) || empty($_POST['zip']) || $_POST['zip'] === "") {
      $isValid7 = false;
      $alert_zip = "<div class='alert alert-danger' role='alert'>
    Zip is not valid!
  </div>";
    } else {
      $isValid7 = true;
      $alert_zip = "<div class='alert alert-success' role='alert'>
      Zip is valid!
    </div>";
    }

    if ($isValid1 === true && $isValid2 === true && $isValid3 === true && $isValid4 === true && $isValid5 === true && $isValid6 === true && $isValid7 === true) {
      $alert1 = "<div class='alert alert-success' role='alert'>
  Uspesno ste obavili kupovinu!
  
</div>";
      include 'tnx.php';
    }
  }
}







require __DIR__ . "/views/checkout-views.php";


require __DIR__ . "/views/layout/footer.php";


?>