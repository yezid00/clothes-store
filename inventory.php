<?php
class Inventory{
	private $name;
	private $price;
	private $image;
	private $yards;
	private $orderCount = 0;

	public function __construct($name,$price,$image,$yards){
		$this->name = $name;
		$this->price = $price;
		$this->image = $image;
		$this->yards = $yards;
	}
	public function getName(){
		return $this->name;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getImage(){
		return $this->image;
	}
	public function getYards(){
		return $this->yards;
	}

	public function getOrderCount(){
		return $this->orderCount;
	}
	public function setOrderCount($orderCount){
		$this->orderCount =$orderCount;
	}

	public function getTotalYards(){
		return $this->getOrderCount() * $this->getYards();
	}
	public function getTotalPrice(){
		return $this->getPrice() * $this->getTotalYards();
	}

}

?>