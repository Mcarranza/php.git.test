<?php

class Product {
	
	private $name = null;

    function Product($name) {
    	
    	this.$name = $name;
    }
    
    function getProductName()
    {
    	return this.$name;
    }
}
?>