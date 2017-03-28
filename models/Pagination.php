<?php
//Custom Class for pagnination functionalities which can be used further
//Author : Ankita Gupta
class Pagination{
	//Function which returns complete Pagination Link section
	//Accepts 
	//$page : which page to hightlight as current
	//$num_page : number of pages to show
	//$page_name : in which page this pagination to implement
	
	public function getPaginationLink($page,$num_page,$page_name){
		$string = '<ul style="list-style-type:none;">';
		// Check if there are any GET parameters
		if(isset($_GET["p"]) && $_GET["p"] > 1){
			$new_data = array("p" => $_GET["p"]-1);
			$full_data = array_merge($_GET, $new_data);  // New data will overwrite old entry
			$url = http_build_query($full_data);
				$string .= '<li class="paginationli"> <a href="'.$page_name.'.php?'.$url.'"> PREVIOUS </a></li>';
		}
		
		for($i=1;$i<=$num_page;$i++){
			$new_data = array("p" => $i);
			$full_data = array_merge($_GET, $new_data);  // New data will overwrite old entry
			$url = http_build_query($full_data);
			if($i==$page){
				$string .= '<li class="paginationli">'.$i.'</li>';
			}else{
				$string .= '<li class="paginationli"><a href="'.$page_name.'.php?'.$url.'">'.$i.'</a></li>';
			}
		}
		if($num_page > 1){
			if(isset($_GET["p"]) && $_GET["p"] < $num_page) $pv = $_GET["p"]+1; else {if(isset($_GET["p"]) && $_GET["p"] == $num_page) $pv = 1;else $pv = 2; }
					$new_data = array("p" => $pv);
					$full_data = array_merge($_GET, $new_data);  // New data will overwrite old entry
					$url = http_build_query($full_data);
					$string .= '<li class="paginationli"> <a href="'.$page_name.'.php?'.$url.'"> NEXT </a></li>';
		}
		$string .= '</ul>';
		return $string;
	}
}