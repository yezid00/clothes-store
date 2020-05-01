<?php 
require_once('inventory.php');

$blue = new Inventory("CASHMERE BLUE",4000,"blue.png",4);
$green = new Inventory("CASHMERE GREEN",4000,"greene.png",4);
$stripped = new Inventory("CASHMERE PURPLE",5000,"stripped.png",4);
$ash= new Inventory("CASHMERE ASH",5500,"ash.png",4);

$inventories = array($blue,$green,$stripped,$ash);

?>