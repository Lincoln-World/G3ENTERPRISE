<div class="row g-4 mt-5 mb-5">
    <?php foreach($items as $item){?>
        <div class="col-md-12">
            <div class="card text-center">
                <div class="row mt-1">
                    <div class="col-md-3">
                        <b><?php echo $item['item_name']?></b>
                    </div>
                    <div class="col-md-3">
                        <p>Quantity: <?php echo $item['quantity']?></p>
                    </div>
                    <div class="col-md-3">
                        <p>$<?php echo $item['item_price']?></p>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-primary" href="processes/update_product.php?id=<?php echo $item['id']?>">+</a>
                        <a class="btn btn-danger" href="processes/remove_product.php?id=<?php echo $item['id']?>">-</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }?> 
</div>