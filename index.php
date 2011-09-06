<?php
/*
 * Created on Sep 6, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 require_once("Product.class.php");
 $product = new Product('Cereal');
 echo $product.getProductName();
?>
