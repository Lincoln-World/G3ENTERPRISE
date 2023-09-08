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
    }
?>

