<?php
//Autoload Function which loads classes when needed
function __autoload($class){
	include_once("models/$class.php");
}
//Object which consist db connection
$db = Connection::createInstance();
$mysqli = $db->connect(); 

//Now we are including files on index page always
$route_include = "";

//Routing can be more optimized
if(isset($_GET["prod_id"]) && $_GET["prod_id"] != "")
	$route_include = "product";
else
	$route_include = "index";

include_once("controllers/".$route_include."_logic.php");
?>