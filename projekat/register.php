
<?php

require __DIR__ . "/views/layout/header.php";
require_once __DIR__ . "/models/register-model.php";

$alert = "";
$alert_name = "";
$alert_lname = "";
$alert_email = "";
$alert_pass = "";

if (isset($_POST['submit'])) {
  if (!empty($_POST)) {
    if (is_numeric($_POST['name']) || empty($_POST['name']) || $_POST['name'] = "") {
      $isValid = false;
      $alert_name = "<div class='alert alert-danger' role='alert'>
            Name not valid!
          </div>";
    } else {
      $isValid = true;
      $alert_name = "<div class='alert alert-success' role='alert'>
          Name is valid!
        </div>";
    }

    if (is_numeric($_POST['last_name']) || empty($_POST['last_name'])) {
      $isValid = false;
      $alert_lname = "<div class='alert alert-danger' role='alert'>
            Last name is not valid!
          </div>";
    } else {
      $isValid = true;
      $alert_lname = "<div class='alert alert-success' role='alert'>
          Last name is valid!
        </div>";
    }
    if (str_contains($_POST['email'], '@') == false || empty($_POST['email'])) {
      $isValid = false;
      $alert_email = "<div class='alert alert-danger' role='alert'>
            Email is not valid!
          </div>";
    } else {
      $isValid = true;
      $alert_email = "<div class='alert alert-success' role='alert'>
          Email is valid!
        </div>";
    }
    if (empty($_POST['password']) || $_POST['password'] == "") {
      $isValid = false;
      $alert_pass = "<div class='alert alert-success' role='alert'>
           Password is valid!
          </div>";
    } else {
      $isValid = true;
      $alert_pass = "<div class='alert alert-success' role='alert'>
          Password is valid!
        </div>";
    }
  }
}






require __DIR__ . "/views/register-view.php";



require __DIR__ . "/views/layout/footer.php";

?>