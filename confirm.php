<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
require_once('data.php');
require_once('inventory.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Confirmation Page</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <?php
    $totalPayment = 0;
    ?>
    <?php foreach ($inventories as $inventory): ?>
      
      <?php 
      $orderCount = $_POST[$inventory->getName()];
      $inventory->setOrderCount($orderCount);
      $totalPayment += $inventory->getTotalPrice();

      ?>
      <p class="order-amount">
        <!-- Output the name property of $menu using the getName method -->
        <?php echo $inventory->getName()?>
        x
        <!-- Output the $orderCount variable -->
        <?php echo $orderCount ?>
        <p class="order-price">$<?php echo $inventory->getTotalPrice() ?></p>
      </p>
    <?php endforeach ?>
    <h3>Total Price: $<?php echo $totalPayment; ?></h3>
  </div>
</body>
</html>



