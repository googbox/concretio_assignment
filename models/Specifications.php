<?php
//Standard Model for tbl_spec_type_values Model 
//Author : Ankita Gupta
class Specifications extends Query{
	public static $model = "tbl_spec_type_values";
	
	//Reading all features for filters primarily
	public function readFeatures(){
		$query = "SELECT DISTINCT speci_value FROM " . self::$model ." WHERE speci_type = 1";
		return $this->execute($query);
	}
	//Reading all Stores 
	public function readStores(){
		$query = "SELECT DISTINCT speci_value FROM " . self::$model ." WHERE speci_type = 2";
		return $this->execute($query);
	}
	//Return all feature of given product by product id
	public function readFeaturesByProduct($id){
		$query = "SELECT DISTINCT speci_value FROM " . self::$model ." WHERE speci_type = 1 && product_id = ".$id;
		return $this->execute($query);
	}
	//Return alll Stores of give product by product id
	public function readStoresByProduct($id){
		$query = "SELECT DISTINCT speci_value FROM " . self::$model ." WHERE speci_type = 2 && product_id = ".$id;
		return $this->execute($query);
	}
	
}

