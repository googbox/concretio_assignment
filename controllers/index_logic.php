<?php
//Controller for Index page Functionality
//Author : Ankita Gupta

//Declaration of valiation
$query_category = "";
$query_brands = "All";
$query_stores = "All";
$query_features = array(); // since $query_features = [] this initialization is not available in 5.3
$query_rating = "";
$minrange = "";
$maxrange = "";

//Object creation of classes
$products = new Products();
$product_specs = new Specifications();
$pagination = new Pagination();

$features_listQ = $product_specs->readFeatures();
$features_list = $mysqli->query($features_listQ);

$stores_listQ = $product_specs->readStores();
$stores_list = $mysqli->query($stores_listQ);

$brands_listQ = $products->readBrands();
$brands_list = $mysqli->query($brands_listQ);

$categories_listQ = $products->readCategories();
$categories_list = $mysqli->query($categories_listQ);

//Pagination
$limit=4;$page=1;
if(isset($_GET["p"]) && $_GET["p"] != ""){$page = $_GET["p"];}
	if($page==''){$page=1;$start=0;}else{$start=$limit*($page-1);
}
$start_from = ($page-1) * $limit; 
if(isset($_GET["search"]) && trim($_GET["search"] != "")){
	
	//Global Search Method calling
	$total_result = $products->buildSearchProductsQuery($_GET["search"]);
	$totalR = $mysqli->prepare($total_result);
	$totalR->bind_param("sssss",$_GET["search"],$_GET["search"],$_GET["search"],$_GET["search"],$_GET["search"]);
	$totalR->execute();
	$totalR->store_result();
	$total = $totalR->num_rows;
	
	$products_listQ = $products->readSearchProducts($_GET["search"], $start_from, $limit);
	$products_list = $mysqli->prepare($products_listQ);
	$products_list->bind_param("sssss",$_GET["search"],$_GET["search"],$_GET["search"],$_GET["search"],$_GET["search"]);
	$products_list->execute();
	$products_list->bind_result($id, $brand, $category, $name, $image, $price);
	
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
	$total_product_query = $products->buildReadProductQuery($query_category, $query_rating, $query_brands, $query_stores, $query_features, $minrange, $maxrange);
	$count_rows = $mysqli->prepare($total_product_query);
	$count_rows->execute();
	$count_rows->bind_result($count);
	while($count_rows->fetch()){$total = $count;}
	
	//fetching all products
	$products_listQ = $products->readProducts($query_category, $query_rating, $query_brands, $query_stores, $query_features, $minrange, $maxrange, $start_from, $limit);
	$products_list = $mysqli->prepare($products_listQ);
	$products_list->execute();
	$products_list->bind_result($id, $brand, $category, $name, $image, $price);

}
$num_page=ceil($total/$limit);
//Generating Pagination link
$pagination_link = $pagination->getPaginationLink($page,$num_page,'index');
?>