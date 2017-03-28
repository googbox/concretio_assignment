<?php
//Controller for Products page functionality 
//Author : Ankita Gupta
//Autoload Function which loads classes when needed
function __autoload($class){
	include_once("models/$class.php");
}
//Object which consist db connection
$products = new Products();
$product_specs = new Specifications();
$product = [];

//Fetching all Features, Stores, Brands and categories for filters listout
$features_list = $product_specs->readFeatures();
$stores_list = $product_specs->readStores();
$brands_list = $products->readBrands();
$categories_list = $products->readCategories();

//Fetching all Products Description its features and stores to show
$product = $products->readProductDescription($_GET["prod_id"]);
$features = $product_specs->readFeaturesByProduct($_GET["prod_id"]);
$stores = $product_specs->readStoresByProduct($_GET["prod_id"]);
?>