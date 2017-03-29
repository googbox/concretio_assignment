<?php
//Database Configuration Class
class Connection {
	//Database Configuration parameters
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "db_spyprice_products";
	protected $con;
	private static $instance;
	//Construct which connects to database once object created of this/extended class
	public static function createInstance(){
		if(!self::$instance){
			self::$instance = new self();
		}
		return self::$instance;
	}
	public function __construct	(){
		//Database connection
		$this->con = new mysqli($this->host, $this->username, $this->password, $this->database);
		if ($this->con->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}
	}
	public function connect(){
		return $this->con;
	}
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }
	
		
}


