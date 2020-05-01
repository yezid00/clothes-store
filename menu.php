<?php
class Inventory{
	private $name;
	private $price;
	private $image;
	private $yards;

	public function __construct($name,$price,$image){
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

}

?>