<?php

class Product {
	
	private $name;

    function Product($name) {
    	
    	this->name = $name;
    }
    
    public function getProductName()
    {
    	return this->name;
    }
}
?>