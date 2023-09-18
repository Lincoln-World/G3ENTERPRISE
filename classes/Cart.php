<?php
    class Cart{
        public function addToCart($product_id,$item_name,$item_price){
            include "../config/db-connect.php";
            $sql="INSERT INTO `cart` (product_id,item_name,item_price,quantity) VALUES (?,?,?,1)";
            $stmt=$pdo->prepare($sql);
            $result=$stmt->execute([$product_id,$item_name,$item_price]);
            return $result; 
        }


        public function getAllCartItems(){
            include "config/db-connect.php";
            $sql="SELECT * FROM `cart` ORDER BY id DESC";
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result; 
        }


        public function getCartItemById($id){
            include "../config/db-connect.php";
            $sql="SELECT * FROM `cart` WHERE product_id=?";
            $stmt=$pdo->prepare($sql);
            $stmt->execute([$id]);
            $result=$stmt->fetch(PDO::FETCH_ASSOC);
            return $result; 
        }


        public function removeFromCart($id){
            include "../config/db-connect.php";
            $sql="DELETE FROM `cart` WHERE id=?";
            $stmt=$pdo->prepare($sql);
            $result=$stmt->execute([$id]);
            return $result; 
        }


        public function increaseQuantity($price,$id){
            include "../config/db-connect.php";
            $sql="UPDATE `cart` SET item_price=item_price+?,quantity=quantity+1 WHERE id=?";
            $stmt=$pdo->prepare($sql);
            $result=$stmt->execute([$price,$id]);
            return $result; 
        }


        public function reduceQuantity($price,$id){
            include "../config/db-connect.php";
            $sql="UPDATE `cart` SET item_price=item_price-?,quantity=quantity-1 WHERE id=?";
            $stmt=$pdo->prepare($sql);
            $result=$stmt->execute([$price,$id]);
            return $result; 
        }



        public function removeAllFromCart(){
            include "../config/db-connect.php";
            $sql="DELETE FROM `cart`";
            $stmt=$pdo->prepare($sql);
            $result=$stmt->execute();
            return $result; 
        }




        public function placeOrder(){
            include "../config/db-connect.php";
            $sql="INSERT INTO `orders` (item_name,quantity,price,user_name,delivery_address,description) SELECT cart.item_name AS item_name,cart.quantity AS quantity,cart.item_price AS price,users.name AS user_name,users.address AS delivery_address,users.description AS description FROM `cart`,users";
            $stmt=$pdo->prepare($sql);
            $result=$stmt->execute();
            return $result; 
        }


        public function insertIntoUsers($user_name,$address,$description){
            include "../config/db-connect.php";
            $sql="INSERT INTO `users` (name,address,description) VALUES (?,?,?)";
            $stmt=$pdo->prepare($sql);
            $result=$stmt->execute([$user_name,$address,$description]);
            return $result; 
        }



        public function getAllOders(){
            include "config/db-connect.php";
            $sql="SELECT * FROM `orders` GROUP BY description ORDER BY id DESC";
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result; 
        }



        public function totalPrice(){
            include "config/db-connect.php";
            $sql="SELECT SUM(item_price) FROM cart";
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetch(PDO::FETCH_ASSOC);
            return $result; 
        }



        public function removeAllFromOrder(){
            include "config/db-connect.php";
            $sql="DELETE FROM `oders`";
            $stmt=$pdo->prepare($sql);
            $result=$stmt->execute();
            return $result; 
        }
    }
?>