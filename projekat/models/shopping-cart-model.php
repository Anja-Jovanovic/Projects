<?php
function getShoppingCart()
{
    $cart = [];
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $productID) {
            $cart[] = getOneProductById($productID);
        }
    }
    return $cart;
}
