<?php
    class Products{
        public function getAllProducts(){
            include "config/db-connect.php";
            $sql="SELECT * FROM `products`";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function getProductById($id){
            include "config/db-connect.php";
            $sql="SELECT * FROM `products` WHERE id=?";
            $stmt=$pdo->prepare($sql);
            $stmt->execute([$id]);
            $result=$stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }



        public function getProductByCategory($category){
            include "config/db-connect.php";
            $sql="SELECT * FROM `products` WHERE category!=? LIMIT 3";
            $stmt=$pdo->prepare($sql);
            $stmt->execute([$category]);
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>

