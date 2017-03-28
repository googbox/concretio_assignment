<?php
//Class for tbl_products table/model
//Author : Ankita Gupta
class Products extends Query{
	public static $model = "tbl_products";
	public static $pivot = "tbl_spec_type_values";
	
	public function readBrands(){//Return all different brands from model
		$query = "SELECT distinct product_brand FROM " . self::$model . " GROUP BY product_brand";
		return $this->execute($query);
	}
	public function readCategories(){//Return all categoris from model
		$query = "SELECT distinct product_category FROM " . self::$model . " GROUP BY product_category ORDER BY product_category";
		return $this->execute($query);
	}
	//Function which builds Query for Products
	public function buildProductQuery($category,$rating,$brands,$stores,$features, $minrange, $maxrange){
		$query = "";
		$flag = false;		
		if((isset($stores) && $stores != "All") || isset($features) && count($features) >0){
			//Join
			$query .= " LEFT JOIN ".self::$pivot." AS B ON A.product_id = B.product_id ";
		}
		//Where clause
		if($category !="" || $rating != "" || $brands != "All" || $stores != "All" || count($features) > 0 || $minrange != "" || $maxrange != ""){
			$query .= " WHERE ";
			//Checking Category if available concatination in query
			if($category != ""){
				$query .= " A.product_category = '$category' ";
				$flag = true;
			}
			//Checking Ratings if available concatination in query
			if($rating != "" && $rating != null){
				if($flag == true)$query .= " AND "; else $flag = true;
				$query .= " A.product_rating = '$rating'";
			}
			//Checking Min & Max price range if available concatination in query
			if(($minrange != "" && $minrange != null ) || ($maxrange != "" && $maxrange != null)){
				if($minrange == ""){$minrange = 0;}elseif($maxrange == ""){$maxrange = 1000;}
				if($flag == true)$query .= " AND "; else $flag = true;
				$query .= " (A.product_price >= $minrange AND A.product_price <= $maxrange) ";
			}
			//Checking Brands` if available concatination in query
			if(isset($brands) && $brands != "All"){
				if($flag == true)$query .= " AND "; else $flag = true;
				$query .= " A.product_brand = '$brands'";
			}
			//Checking Stores if available concatination in query
			if(isset($stores) && $stores != "All"){
				if($flag == true)$query .= " AND "; else $flag = true;
				$query .= " B.speci_value = '$stores' " ;
			}
			//Checking Features if available concatination in query
			if(isset($features) && count($features) >0){
				if($flag == true)$query .= " OR "; else $flag = true;			
				$flag2 = false;
				foreach($features as $feature){
					if($flag2 == true)$query .= " OR ";else $flag2 = true;
					$query .= " B.speci_value = '$feature' ";
				}
			}
		}
		return $query;
	}
	public function buildReadProductQuery($category,$rating,$brands,$stores,$features, $minrange, $maxrange){//return count of all search parameters
		//Building Query
		//Select
		$query = "SELECT count(A.product_id) as count from " . self::$model . " AS A ";
		$query .= $this->buildProductQuery($category,$rating,$brands,$stores,$features, $minrange, $maxrange);
		$count_rows = $this->execute($query);
		$c = $count_rows->fetch_assoc();
		return $c["count"];
	}	
	public function readProducts($category,$rating,$brands,$stores,$features, $minrange, $maxrange, $page, $limit){//Method returns all products
		//Building Query - Select
		$query = "SELECT DISTINCT A.product_id, A.product_name, A.product_price, A.product_image, A.created_on from " . self::$model . " AS A ";
		$query .= $this->buildProductQuery($category,$rating,$brands,$stores,$features, $minrange, $maxrange);
		$query .= " GROUP BY A.product_id LIMIT $page, $limit";
		return $this->execute($query);
	}
	//Building Search Query
	public function searchQuery($search){
		return $query = "SELECT DISTINCT A.product_id, A.product_brand, A.product_category, A.product_name, A.product_description, A.product_image, A.product_price 
					FROM " . self::$model . " A LEFT JOIN " . self::$pivot . " B ON A.product_id = B.product_id 
					WHERE(
						MATCH(A.product_name) AGAINST ('$search') OR 
						MATCH(A.product_category) AGAINST ('$search') OR
						MATCH(A.product_brand) AGAINST ('$search') OR
						MATCH(A.product_description) AGAINST ('$search') OR 
						MATCH(B.speci_value) AGAINST ('$search')
						)";
	}
	//Method - Global Search - Returns all Matched products with $search parameters
	public function readSearchProducts($search, $page, $limit){
		$query = $this->searchQuery($search);
		$query .= " LIMIT $page, $limit";
		return $this->execute($query);
	}
	//Method - Global Search - Returns count of Matched products with $search parameters
	public function buildSearchProductsQuery($search){
		$query = $this->searchQuery($search);
		$count_rows = $this->execute($query);
		$c = mysqli_num_rows($count_rows);
		return $c;
	}
	//Return all products with ID
	public function readProductDescription($id){
		if(isset($id) && $id > 0){
			$query = "select * from ".self::$model." where product_id = ".$id." limit 1;";
			$result = $this->execute($query);
			return $row = $result->fetch_assoc();
		}
	}
}