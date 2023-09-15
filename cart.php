<?php
    session_start();
    include "classes/Cart.php";
    $cart_instance = new Cart();
    $items=$cart_instance->getAllCartItems();
    $oders=$cart_instance->getAllOders();
    $clear=$cart_instance->removeAllFromOrder();
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
        <?php include "components/cartItemCard.php"?>
        <div class="text-end">
            <h3>Total price: $<?php echo implode($cart_instance->totalPrice());?></h3>
        </div>
        <div class="mt-5 text-right">
            <a class="btn btn-success" href="processes/orders.php">Place order</a>
        </div>
        <div class="text-center mt-5 mb-5">
            <h5>RECENT ORDERS</h5>
            <table class="table">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>price</th>
                    <th>Date/Time</th>
                </tr>
                <?php foreach($oders as $order){?>
                <tr>
                    <td><?php echo $order['item_name']?></td>
                    <td><?php echo $order['quantity']?></td>
                    <td><?php echo $order['price']?></td>
                    <td><?php echo $order['date']?></td>
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
    <script src="assets/js/script.js"></script>
</body>
</html>