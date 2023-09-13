<?php
    date_default_timezone_set("Africa/Lagos");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top bg-dark mb-5 shadow-sm">
    <div class="container-fluid d-flex nav-brand">
      <b>G3 ENTERPRISE</b>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
          <a href="about.php" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="products.php" class="nav-link">Products</a>
          </li>
          <li class="nav-item">
          <a href="cart.php" class="nav-link">Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <marquee behavior="" direction="">Welcome to G3 ENTERPRISE, your satisfaction is our priority.      <?php echo date('D, d  F, Y   G:i:sa') ?></marquee>
</body>
</html>   