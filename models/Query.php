<?php
//Class for basic Queries and Execution of them
//This class extends Connection so when extended and on object creation it will call Connection class constructor and create db connection
//Author : Ankita Gupta
class Query extends Connection{
	protected static $model;
	protected $con;
	
	// BASIC CRUD Methods for given table 
	public function read(){
		//Selecting all data from static::$model => Late Static Binding
		$query = "select * from " . static::$model;
		return mysqli_query($this->con,$query);
	}
	public function insert(){
		
	}
	public function update(){
		
	}
	public function remove(){
		
	}
	public function execute($query){
		//Agenda is to create a standard function, there is time shortage otherwise in future will have to create filters before executing
		return mysqli_query($this->con, $query);
	}
	
	
}


