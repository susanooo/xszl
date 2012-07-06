<?php
class Tools{
	
	function separateDate($params){
		
		$date['day'] = substr($params, 8,9);
		$date['month'] = substr($params, 5,6);
		$date['year'] = substr($params, 0,3);
		
		return $date;
		
	}
	
	function transDate($params){
		
	}
	
	
}



?>