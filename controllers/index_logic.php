<?php
//Controller for Index page Functionality
//Author : Ankita Gupta
//Autoload Function which loads classes when needed
function __autoload($class){
	include_once("models/$class.php");
}
//Declaration of valiation
$query_category = "";
$query_brands = "All";
$query_stores = "All";
$query_features = [];
$query_rating = "";
$minrange = "";
$maxrange = "";

//Object creation of classes
$products = new Products();
$product_specs = new Specifications();
$pagination = new Pagination();
$features_list = $product_specs->readFeatures();
$stores_list = $product_specs->readStores();
$brands_list = $products->readBrands();
$categories_list = $products->readCategories();

//Pagination
$limit=4;$page=1;
if(isset($_GET["p"]) && $_GET["p"] != ""){$page = $_GET["p"];}
	if($page==''){$page=1;$start=0;}else{$start=$limit*($page-1);
}
$start_from = ($page-1) * $limit; 
if(isset($_GET["search"]) && trim($_GET["search"] != "")){
	//Global Search Method calling
	$total = $products->buildSearchProductsQuery($_GET["search"]);
	$products_list = $products->readSearchProducts($_GET["search"], $start_from, $limit);
}else{
	//Initialization of variables
	if(isset($_GET["category"]) && $_GET["category"] != ""){
		$query_category = urldecode($_GET["category"]);
	}
	if(isset($_GET["rating"]) || isset($_GET["brands"]) || isset($_GET["stores"]) || isset($_GET["features"])){	
		if(isset($_GET["brands"]) && count($_GET["brands"] > 0)){
			$query_brands = ($_GET["brands"]);
		}
		if(isset($_GET["stores"]) && count($_GET["stores"]) > 0){
			$query_stores = $_GET["stores"];
		}
		if(isset($_GET["features"]) && count($_GET["features"]) > 0){
			$query_features = $_GET["features"];
		}
		if(isset($_GET["rating"]) && $_GET["rating"] != ""){
			$query_rating = $_GET["rating"];
		}
		if(isset($_GET["minrange"]) && $_GET["minrange"] != ""){
			$minrange = $_GET["minrange"];
		}
		if(isset($_GET["maxrange"]) && $_GET["maxrange"] != ""){
			$maxrange = $_GET["maxrange"];
		}
	}
	//finding count for pagination
	$total = $products->buildReadProductQuery($query_category, $query_rating, $query_brands, $query_stores, $query_features, $minrange, $maxrange);
	//fetching all products
	$products_list = $products->readProducts($query_category, $query_rating, $query_brands, $query_stores, $query_features, $minrange, $maxrange, $start_from, $limit);
}
$num_page=ceil($total/$limit);
//Generating Pagination link
$pagination_link = $pagination->getPaginationLink($page,$num_page,'index');
?>