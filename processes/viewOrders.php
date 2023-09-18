<?php
    session_start();
    include "../classes/Cart.php";
    $cart_instance = new Cart();
    if(isset($_POST['view'])){
        $user=$_POST['user_name'];
        if($user){
            header("Location:../orders.php");
        }else{
            $_SESSION['success']="user does not exist";
            header("Location:../cart.php");
        }
    }

?> 
