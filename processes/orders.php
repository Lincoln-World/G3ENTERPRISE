<?php
    include "../classes/Cart.php";
    $cart_instance = new Cart();
    $cart_instance->placeOrder();
    $order=$cart_instance->removeAllFromCart();
    if($order){
        $_SESSION['success']='You have Successfully placed an order';
        header("Location: ../cart.php");
    }else{
        $_SESSION['error']='Something went wrong';
        header("Location: ../cart.php");
    }
?>