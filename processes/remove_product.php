<?php
    session_start();
    include "../classes/Cart.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $product_id=$_SESSION['id'];
        $price=$_SESSION['price'];
        $cart_instance=new Cart();
        $product=$cart_instance->getCartItemById($product_id);
        $quantity_price=$product['item_price'];
        if($quantity_price > $price){
            $reduce=$cart_instance->reduceQuantity($price,$id);
                if($reduce){
                    header("Location: ../cart.php");
                }else{
                    
                    header("Location: ../cart.php");
                }
        }else{
            $result=$cart_instance->removeFromCart($id);
                if($result){
                    $_SESSION['success']='Product successfully removed from cart';
                    header("Location: ../cart.php");
                }else{
                    $_SESSION['error']='Something went wrong';
                    header("Location: ../cart.php");
                }
        }
    }
    
?>



    include "../classes/Cart.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        
        $cart_instance=new Cart();
        
        if($result){
            $_SESSION['success']='Product successfully updated';
            header("Location: ../cart.php");
        }else{
            $_SESSION['error']='Something went wrong';
            header("Location: ../cart.php");
        }
    }