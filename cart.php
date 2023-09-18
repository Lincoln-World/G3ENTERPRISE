<?php
    session_start();
    include "classes/Cart.php";
    $cart_instance = new Cart();
    $items=$cart_instance->getAllCartItems();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php include "components/navBar.php"?>
    <div class="container mt-5 mb-5">
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
        <?php include "components/cartItemCard.php"?>
        <div class="text-end">
            <h3>Total price: $<?php echo implode($cart_instance->totalPrice());?></h3>
        </div>
        <div class="mt-5 text-right">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">place Order</button>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#example2Modal">View Orders</button>
        </div>
    </div>
    <?php include "components/formModal.php" ?>
    <?php include "components/viewOrderModal.php" ?>
    <?php include "components/footer.php" ?>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>