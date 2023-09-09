<?php
    include "classes/product.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $products=new Products();
        $product=$products->getProductById($id);
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
    <div class="container">
        <a class="btn btn-primary mt-5 mb-5" href="products.php">Back</a>
        <img src="assets/images/<?php echo $product['image']?>" class="img-fluid">
        <h3><?php echo $product['name']?></h3>
        <b>$<?php echo $product['price']?></b>
        <p><?php echo $product['description']?></p>
        <a class="btn btn-success mt-5 mb-5">Add to cart</a>
    </div>
    <?php include "components/footer.php" ?>
</body>
</html>