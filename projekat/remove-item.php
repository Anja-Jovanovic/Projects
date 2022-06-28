<?php
session_start();
if(!empty($_SESSION['cart'])){
if(!empty($_POST['remove'])){
    foreach ($_POST['remove'] as $productID) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if($item==$productID){
                unset($_SESSION['cart'][$key]);
            }
        }
    }
}
}

 header("Location:./shopping-cart.php");