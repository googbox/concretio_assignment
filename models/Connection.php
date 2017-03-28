<?php
//Database Configuration Class
class Connection {
	//Database Configuration parameters
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "db_spyprice_products";
	protected $con;
	//Construct which connects to database once object created of this/extended class
	public function __construct(){
		$this->con = $this->connect();
	}
	public function connect(){
		//Database connection
		$mysqli = new mysqli($this->host, $this->username, $this->password, $this->database);
		if ($mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}else{
			return $mysqli;
		}
		
	}
	public function __destruct(){
		//Closing connection
		mysqli_close($this->con);
	}	
}


