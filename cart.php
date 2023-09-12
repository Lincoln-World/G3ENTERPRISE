<?php
    session_start();
    include "classes/Cart.php";
    $cart_instance = new Cart();
    $items=$cart_instance->getAllCartItems();
    $oders=$cart_instance->getAllOders();
    
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
    <div class="container">
        <div class="alert">
            <?php
                if(isset($_SESSION['success'])){
                    echo $_SESSION['success'];
                    unset ($_SESSION['success']);
                }
            ?>
        </div>
        <div class="row g-4 mt-5 ">
            <?php foreach($items as $item){?>
                <div class="col-md-12">
                    <div class="card text-center">
                            <b><?php echo $item['item_name']?></b>
                            <p>Quantity: <?php echo $item['quantity']?></p>
                            <p>$<?php echo $item['item_price']?></p>
                            <div class="text-center mb-3">
                                <a class="btn btn-primary w-50 mb-3" href="processes/update_product.php?id=<?php echo $item['id']?>">Update</a>
                                <a class="btn btn-danger w-50 mb-3" href="processes/remove_product.php?id=<?php echo $item['id']?>">Remove</a>
                            </div>
                    </div>
                </div>
                <?php
                }?>
                <div class="text-end">
                    <h3>Total price: $<?php echo implode($cart_instance->totalPrice());?></h3>
                </div> 
            </div>
        <div class="mt-5 text-right">
            <a class="btn btn-success" href="processes/orders.php">Place order</a>
        </div>
        <div class="text-center mt-5 mb-5">
            <h5>RECENT ORDERS</h5>
            <table class="table">
                <tr>
                    <th>s/n</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>price</th>
                    <th>Date/Time</th>
                </tr>
                <?php foreach($oders as $order){?>
                <tr>
                    <td><?php echo $order['id']?></td>
                    <td><?php echo $order['item_name']?></td>
                    <td><?php echo $order['quantity']?></td>
                    <td><?php echo $order['price']?></td>
                    <td><?php echo $order['date']?></td>
                </tr>
                <?php
                }?>
            </table>
            <!-- <div class="text-end">
                <button>Clear all records</button>
            </div> -->
        </div> 
    </div>
    <?php include "components/footer.php" ?>
</body>
</html>