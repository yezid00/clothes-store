
<?php 
require_once('inventory.php');
require_once('data.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Store</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="menu-wrapper container">
		<h1 class = "logo">Corner Store</h1>

		<form action ="confirm.php" method ="post">
			
		<div class="menu-items">
			<?php foreach($inventories as $inventory): ?>
				<div class="menu-item">
					<img src="<?php echo $inventory->getImage() ?>">
					<h3 class="menu-item-name"><?php echo $inventory->getName() ?></h3>
					<p class="price"> #<?php echo $inventory->getPrice() ?></p>
					<p class="yards"><?php echo $inventory->getYards() ?> yards</p>
					<p>Qty: <?php echo $inventory->getOrderCount() ?></p>
					<input type ="text" value ="0" name = "<?php echo $inventory->getName() ?>">
				</div>
			<?php endforeach ?>
		</div>
		<input type = "submit" value ="Order">	
		</form>
	</div>


</body>
</html>