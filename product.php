<?php
    session_start();
    include "classes/Product.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $products=new Products();
        $product=$products->getProductById($id);
        $_SESSION['id']=$product['id'];
        $_SESSION['name']=$product['name'];
        $_SESSION['price']=$product['price'];
        
        $product_category=$product['category'];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php include "components/navBar.php"?>
    <div class="container">
        <img src="assets/images/<?php echo $product['image']?>" class="img-fluid">
        <h3><?php echo $product['name']?></h3>
        <b>$<?php echo $product['price']?></b>
        <p><?php echo $product['description']?></p>
 
        <div class="mt-5 mb-5">
            <a class="btn btn-success" href="processes/add_product.php?id=<?php echo $product['id']?>">Add to cart</a>
            <a class="btn btn-primary text-end" href="products.php">Back</a>
        </div>
    </div>
    <?php include "components/footer.php" ?>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>