<?php
session_start();
require_once __DIR__ . "/models/all-products-model.php";
require_once __DIR__ . "/models/shopping-cart-model.php";



require __DIR__ . "/views/layout/header.php";






$items = getShoppingCart();
require __DIR__ . "/views/shopping-cart-views.php";

require __DIR__ . "/views/layout/footer.php";
