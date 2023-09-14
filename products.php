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
    <div class="container mt-5">
        <div class="alert">
            <?php
                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset ($_SESSION['error']);
                }
                if(isset($_SESSION['success'])){
                    echo $_SESSION['success'];
                    unset ($_SESSION['success']);
                }
            ?>
        </div>
        <b class="mt-5">Get your phones and accesseries from the comfort of your home at a good and affordable price</b>
        <?php include "components/productsCard.php"?>
        <div class="mt-5 mb-5 text-end">
            <a class="btn btn-secondary" href="index.php">Go back to home</a>
        </div>
    </div>
    <?php include "components/footer.php" ?>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>