<?php
require_once __DIR__ . "/models/all-products-model.php";
require __DIR__ . "/views/layout/header.php";
$productID = 1;

if (!empty($_GET['page'])) {
    $productID = $_GET['page'];
}
$singleRandomProduct = getOneProductById($productID);
$randProd = getRandomProducts($singleRandomProduct);

require __DIR__ . "/views/index-view.php";




require __DIR__ . "/views/layout/footer.php";
