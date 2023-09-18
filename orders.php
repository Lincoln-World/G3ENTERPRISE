<?php
    session_start();
    include "classes/Cart.php";
    $cart_instance = new Cart();


    $oders=$cart_instance->getAllOders();
    $clear=$cart_instance->removeAllFromOrder();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php include "components/navBar.php"?>
    <div class="container mt-5">
        <div class="mt-5 mb-5">
            <a class="btn btn-primary" href="cart.php">Back</a>
        </div>
        <div class="text-center mt-5 mb-5">
            <h5 class="mb-5">RECENT ORDERS</h5>
            <table class="table">
                <tr>
                    <th>description</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>price</th>
                    <th>Date/Time</th>
                    <th></th>
                </tr>
                <?php foreach($oders as $order){?>
                <tr>
                    <td><?php echo $order['description']?></td>
                    <td><?php echo $order['item_name']?></td>
                    <td><?php echo $order['quantity']?></td>
                    <td><?php echo $order['delivery_address']?></td>
                    <td><?php echo $order['date']?></td>
                    <td><a class="btn btn-primary" href="">View more</a></td>
                </tr>
                <?php
                }?>
            </table>
            <div class="text-end">
                <a href="">Clear all records</a>
            </div>
        </div>
    </div>
    <?php include "components/footer.php" ?>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>