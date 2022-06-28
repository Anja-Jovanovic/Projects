<?php
session_start();
require_once __DIR__ . "/models/all-products-model.php";
require_once __DIR__ . "/models/shopping-cart-model.php";

$filter= "";
$sort= "";

if(!empty($_GET['search'])){
    $filter=$_GET['search'];
}


$allProducts= getAllProducts();

if($filter != "") {
    $allProducts=searchProductsByTerm($allProducts, $filter);

}

if(!empty($_GET['sort'])){
    $sort=$_GET['sort'];
}


if($sort !=""){ 
$allProducts=sortProductBy($sort, $allProducts );
}












if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=[];
}

if(isset($_POST['product_id']) && !empty($_POST['product_id'])){
    $_SESSION['cart'][]=$_POST['product_id'];
}
 
require __DIR__ . "/views/layout/header.php";

require __DIR__ . "/views/products-views.php";


require __DIR__ . "/views/layout/footer.php";



?>
