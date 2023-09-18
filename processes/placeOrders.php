<?php
    include "../classes/Cart.php";
    $cart_instance = new Cart();
    if(isset($_POST['order'])){
        $user=$_POST['user_name'];
        $address=$_POST['address'];
        $description=$_POST['description'];
        $cart_instance->insertIntoUsers($user,$address,$description);
        $cart_instance->placeOrder();
        $order=$cart_instance->removeAllFromCart();
        if($order){
            $_SESSION['success']='You have Successfully placed an order';
            header("Location: ../cart.php");
        }else{
            $_SESSION['error']='Something went wrong';
            header("Location: ../cart.php");
        }
    }

?> 
