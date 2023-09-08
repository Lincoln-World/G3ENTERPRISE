<?php
    include "classes/product.php";
    $products_instance = new Products();
    $products=$products_instance->getAllProducts();
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="header  mb-5">
            <?php include "components/navBar.php"?>
        </div>
        <div class="row">
        <?php foreach($products as $product)?>
            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100 w-100">
                    <div class="card-img-top ">
                        <img src="assets/images/<?php echo $product['image']?>" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <b><?php echo $product['name']?></b>
                        <p>$<?php echo $product['price']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer bg-dark text-light mt-5 text-center">
            <b>Contact Address</b>
            <p>Benue State,Nigeria.</p>
            <p>email:ogwucheabraham08@gmail.com</p>
            <p>copywrite@G3ENTERPRISE2023</p>
        </div>
</body>
</html>