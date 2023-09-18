<?php
    session_start();
    include "classes/Product.php";
    $products=new Products();
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $product=$products->getProductById($id);
        $_SESSION['id']=$product['id'];
        $_SESSION['name']=$product['name'];
        $_SESSION['price']=$product['price'];
        $_SESSION['category']=$product['category'];
    }
    $product_category=$_SESSION['category'];
    $rel_product=$products->getProductByCategory($product_category);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        img{
            height: 100px;
            width: 100px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php include "components/navBar.php"?>
    <div class="container mt-5">
        <div class="text-center">
            <img src="assets/images/<?php echo $product['image']?>" class="img-fluid w-50">
            <h3><?php echo $product['name']?></h3>
            <b>$<span><?php echo $product['price']?></span></b>
            <p><?php echo $product['description']?></p>
        </div>
        <div class="mt-5 mb-5 text-end">
            <a class="add-to-cart btn btn-success" href="processes/add_product.php?id=<?php echo $product['id']?>">Add to cart</a>
            <a class="btn btn-secondary" href="products.php">Back</a>
        </div>
        <div class="mb-3">
            <b>You might also want to check this out</b>
        </div>
        <table class="table">
                <?php foreach($rel_product as $product){?>
                <tr>
                    <td><img src="assets/images/<?php echo $product['image']?>" class="img-fluid"></td>
                    <td><?php echo $product['name']?></td>
                    <td>$<?php echo $product['price']?></td>
                    <td><a href="#" class="btn btn-primary">Add</a></td>
                </tr>
                <?php
                }?>
            </table>
    </div>
    
    
    <?php include "components/footer.php" ?>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>