<?php

require_once __DIR__ . "/models/all-products-model.php";
//$relatedProducts = getRelatedProducts();


$productID=1;

if(!empty($_GET['page'])){
    $productID=$_GET['page'];
}

$singleProduct= getOneProductById($productID);
$related= getRelatedProducts($singleProduct);

//$next=2;
//$singleProduct= getNextProduct($next);


require __DIR__ . "/views/layout/header.php";

require __DIR__ . "/views/single-views.php";


require __DIR__ . "/views/layout/footer.php";

?>