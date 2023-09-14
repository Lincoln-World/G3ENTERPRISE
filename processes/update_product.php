<?php
    session_start();
    include "../classes/Cart.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $price=$_SESSION['price'];
        $cart_instance=new Cart();
        $result=$cart_instance->increaseQuantity($price,$id);
        if($result){
            header("Location: ../cart.php");
            exit();
        }
    }
    
?>