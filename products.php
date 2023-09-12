<?php
    session_start();
    include "classes/Product.php";
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
    <?php include "components/navBar.php"?>
    <div class="container">
        <div class="alert">
            <?php
                if(isset($_SESSION['success'])){
                    echo $_SESSION['success'];
                    unset ($_SESSION['success']);
                }
            ?>
        </div>
        <b class="mt-5">Get your phones and accesseries from the comfort of your home at a good and affordable price</b>
        <div class="row g-4 mt-5">
            <?php foreach($products as $product){?>
            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100 w-80">
                    <div class="card-img-top ">
                        <img src="assets/images/<?php echo $product['image']?>" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <b><?php echo $product['name']?></b>
                        <p>$<?php echo $product['price']?></p>
                        <a href="product.php?id=<?php echo $product['id']?>"  class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            <?php
            }?>
        </div>
        <div class="mt-5 mb-5">
            <a class="btn btn-primary" href="index.php">Go back to home</a>
        </div>
    </div>
    <?php include "components/footer.php" ?>
</body>
</html>