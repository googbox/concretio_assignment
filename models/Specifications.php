<?php
//Standard Model for tbl_spec_type_values Model 
//Author : Ankita Gupta
class Specifications{
	public static $model = "tbl_spec_type_values";
	
	//Reading all features for filters primarily
	public function readFeatures(){
		return $query = "SELECT DISTINCT speci_value FROM " . self::$model ." WHERE speci_type = 1";
	}
	//Reading all Stores 
	public function readStores(){
		return $query = "SELECT DISTINCT speci_value FROM " . self::$model ." WHERE speci_type = 2";
	}
	//Return all feature of given product by product id
	public function readFeaturesByProduct($id){
		return $query = "SELECT DISTINCT speci_value FROM " . self::$model ." WHERE speci_type = 1 && product_id = ".$id;
	}
	//Return alll Stores of give product by product id
	public function readStoresByProduct($id){
		return $query = "SELECT DISTINCT speci_value FROM " . self::$model ." WHERE speci_type = 2 && product_id = ".$id;
	}
	
}

