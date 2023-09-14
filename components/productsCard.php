
<body>
    <div class="row g-4 mt-3">
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
</body>
</html>