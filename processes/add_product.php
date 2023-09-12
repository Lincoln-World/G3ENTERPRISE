<?php
    session_start();
    include "../classes/Cart.php";
    $cart_instance=new Cart();
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $product_id=$id;
        $item_name=$_SESSION['name'];
        $item_price=$_SESSION['price'];
        $result=$cart_instance->getCartItemById($product_id);
        $cart_poduct_id=$result['product_id'];
        if($product_id === $cart_poduct_id){
            $_SESSION['success']='Product already added to cart, please update';
            header("Location: ../cart.php");
        }else{
            $added=$cart_instance->addToCart($product_id,$item_name,$item_price);
                if($added){
                    $_SESSION['success']='You have Successfully added to cart';
                    header("Location: ../products.php");
                }else{
                    $_SESSION['error']='Something went wrong';
                    header("Location: ../products.php");
                }
        }
    }
?>