<?php
//Controller for Products page functionality 
//Author : Ankita Gupta

$product_specs = new Specifications();
$products = new Products();
$product = array();

//Fetching all Features, Stores, Brands and categories for filters listout
$features_listQ = $product_specs->readFeatures();
$features_list = $mysqli->query($features_listQ);
$stores_listQ = $product_specs->readStores();
$stores_list = $mysqli->query($stores_listQ);

$brands_listQ = $products->readBrands();
$brands_list = $mysqli->query($brands_listQ);
$categories_listQ = $products->readCategories();
$categories_list = $mysqli->query($categories_listQ);

//Fetching all Products Description its features and stores to show
$productQ = $products->readProductDescription($_GET["prod_id"]);
$result = $mysqli->query($productQ);
$product = $result->fetch_assoc();

$featuresQ = $product_specs->readFeaturesByProduct($_GET["prod_id"]);
$features = $mysqli->query($featuresQ);
$storesQ = $product_specs->readStoresByProduct($_GET["prod_id"]);
$stores = $mysqli->query($storesQ);
?>